<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Http\Resources\EvaluationResource;
use App\Models\Evaluation;
use App\Models\Instrument;
use App\Models\Teacher;
use Barryvdh\DomPDF\Facade\Pdf;
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
//        try {
//            return ($evaluation = Evaluation::create($request->all())) ?
//                response([
//                    'message' => 'Data Penilaian berhasil disimpan.',
//                    'result' => $evaluation
//                ], 201) : throw new Exception('Terjadi kesalahan server.');
//        } catch (Exception $exception){
//            return response([
//                'message' => $exception->getMessage(),
//                'result' => null
//            ], 422);
//        }
        $result = collect($request->all('result'));
        $result = $result->map(function ($value) {
            return json_decode($value);
        });
        $result = collect($result['result']);
        $result = collect($result->groupBy('name'));
        $modus = collect($result->filter(function (Collection $groups) {
            return $groups->count() > 1;
        })->flatMap(function ($item) {
            return $item;
        }));
        $modusvalue = $modus->pluck('indicator.code')->mode();
        $modus = collect($modus->first()->indicator);
        $modus = $modus->replace(['code' => $modusvalue[0]]);

        $other = $result->filter(function (Collection $groups) {
            return $groups->count() < 2;
        })->flatMap(function ($item) {
            return $item;
        });
        $result = collect($other->merge([$modus]));
//        $teacher = Teacher::find($request->teacher);
//        $feedbacktext = 'Guru mata pelajaran '. $teacher->subject .' a.n. '. $teacher->name .' diharapkan dapat ';
//        $feedbackarray = $result->map(function ($item){
//            $feedbackarray = collect([]);
//            $instrument = new Instrument();
//            if ($item->indicator->code > 2){
//                $feedbackarray->merge($instrument->find($item->instrument)->feedback);
//            }
//            return $item->instrument;
//        });
        $feedbackarray = [];
        foreach ($result as $item){
            $feedbackarray = $item;
        }
        return response([
            'testing' => $feedbackarray
        ]);
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

    public function print()
    {
        $pdf = Pdf::loadView('template');
        return $pdf->download('testing.pdf');
    }
}
