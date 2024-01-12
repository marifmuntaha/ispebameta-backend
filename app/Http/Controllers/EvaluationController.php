<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Http\Resources\EvaluationResource;
use App\Models\Evaluation;
use Exception;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluation = new Evaluation();

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
        try {
            return ($evaluation = Evaluation::create($request->all())) ?
                response([
                    'message' => 'Data Penilaian berhasil disimpan.',
                    'result' => $evaluation
                ], 201) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
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
        } catch (Exception $exception){
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
        } catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ], 422);
        }
    }
}
