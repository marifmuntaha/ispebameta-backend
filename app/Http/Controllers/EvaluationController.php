<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Http\Resources\EvaluationResource;
use App\Models\Aspect;
use App\Models\Evaluation;
use App\Models\Instrument;
use App\Models\Teacher;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $evaluation = new Evaluation();
        $evaluation = $request->has('user') ? $evaluation->whereUser($request->user) : $evaluation;
        $evaluation = $request->teacher ? $evaluation->whereTeacher($request->teacher) : $evaluation;
        $evaluation = $request->aspect ? $evaluation->whereAspect($request->aspect) : $evaluation;
        return response([
            'message' => null,
            'result' => EvaluationResource::collection($evaluation->get())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvaluationRequest $request)
    {
        $sentence = [
            '* Melakukan kegiatan diseminasi dan berbagi dalam pelatihan ',
            '* Melaksanakan Pengembangan profesi melalui beragam bentuk kegiatan MGMP, Diskusi dengan materi: ',
            '* Mengikuti kegiatan pembimbingan pelatihan untuk meningkatkan pemahaman ',
        ];
        $result = collect($request->result);
        $result = $result->flatMap(function ($value) {
            return collect(json_decode($value));
        });
        $result = $result->groupBy('name')->collect();
        $modusData = $result->filter(function (Collection $groups) {
            return $groups->count() > 1;
        })->flatMap(function ($item) {
            return $item;
        })->collect();
        $otherData = $result->filter(function (Collection $groups) {
            return $groups->count() < 2;
        })->flatMap(function ($item) {
            return $item;
        })->collect();
        if ($modusData->count() > 1){
            $modusValue = $modusData->pluck('indicator.value')->mode();
            $modusData = collect([$modusData->first()]);
            $modusData = $modusData->map(function ($value) use ($modusValue) {
                $value->indicator->code = $modusValue[0];
                return $value;
            });
            $otherData = $otherData->merge($modusData)->sortBy('name')->flatten(1)->collect();
        }
        $teacher = Teacher::find($request->teacher);
        $feedback = '';
        $feedbackText = 'Guru mata pelajaran ' . $teacher->subject . ' a.n. ' . $teacher->name . ' diharapkan dapat ';
        $feedbackCount = 0;
        for ($i = 0; $i < count($otherData); $i++) {
            $instrument = new Instrument();
            if ($otherData[$i]->indicator->value > 2) {
                $feedback .= $instrument->find($otherData[$i]->instrument)->feedback . ', ';
            } else {
                $feedbackCount++;
            }
        }
        if ($feedbackCount != 6) {
            $feedbackText .= $sentence[0] . $feedback;
        }
        $otherData = collect($otherData->filter(function ($item) {
            return $item->indicator->value <= 2;
        })->values()->all());
        $feedbackCount = 0;
        $feedback = '';
        for ($j = 0; $j < count($otherData); $j++) {
            $instrument = new Instrument();
            if ($otherData[$j]->indicator->value == 2) {
                $feedback .= $instrument->find($otherData[$j]->instrument)->feedback . ', ';
            } else {
                $feedbackCount++;
            }
        }
        if ($feedbackCount != 6) {
            $feedbackText .= $sentence[1] . $feedback;
        }
        $otherData = collect($otherData->filter(function ($item) {
            return $item->indicator->value != 2 && $item->indicator->value < 2;
        })->values()->all());
        $feedbackCount = 0;
        $feedback = '';
        for ($k = 0; $k < count($otherData); $k++) {
            $instrument = new Instrument();
            if ($otherData[$k]->indicator->value < 2) {
                $feedback .= $instrument->find($otherData[$k]->instrument)->feedback . ', ';
            } else {
                $feedbackCount++;
            }
        }
        if ($feedbackCount != 6) {
            $feedbackText .= $sentence[2] . $feedback;
        }
        $feedbackText = substr($feedbackText, 0, -2);
        $request->request->add(['feedback' => $feedbackText]);
        try {
            return ($evaluation = Evaluation::create($request->all())) ?
                response([
                    'message' => 'Data Penilaian berhasil disimpan.',
                    'result' => $evaluation
                ], 201) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception) {
            return response([
                'message' => $exception->getMessage(),
                'result' => $otherData
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluation $evaluation)
    {
        return response([
            'message' => null,
            'result' => new EvaluationResource($evaluation)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
        try {
            return $evaluation->update(array_filter($request->all())) ?
                response([
                    'message' => 'Data Penilaian berhasil diperbarui.',
                    'result' => $evaluation
                ], 201) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception) {
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        try {
            return $evaluation->delete() ?
                response([
                    'message' => 'Data Penilaian berhasil dihapus',
                    'result' => $evaluation
                ]) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception) {
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ], 422);
        }
    }

    public function print(Request $request)
    {
        $user = User::find($request->user);
        $aspect = Aspect::find($request->aspect);
        $teacher = Teacher::find($request->teacher);
        $result = json_decode($request->result);
        $feedback = $request->feedback;
        $date = Carbon::parse($request->created_at)->translatedFormat('d F Y');
        $data = [
            'user' => $user,
            'aspect' => $aspect,
            'teacher' => $teacher,
            'result' => $result,
            'feedback' => $feedback,
            'date' => $date
        ];

        $pdf = Pdf::loadView('template', $data);
        $pdf->save('storage/download/supervisi-'. $teacher->name .'pdf');
        return response([
            'message' => 'Hasil supervisi berhasil diunduh.',
            'result' => asset('storage/download/supervisi-'. $teacher->name .'pdf')
        ]);
    }
}
