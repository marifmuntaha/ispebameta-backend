<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIndicatorRequest;
use App\Http\Requests\UpdateIndicatorRequest;
use App\Http\Resources\IndicatorResource;
use App\Models\Indicator;
use Exception;
use Illuminate\Http\Request;

class IndicatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $indicator = new Indicator();
        $indicator = $request->exists('instrument') ? $indicator->whereInstrument($request->instrument) : $indicator;
        $indicator = $indicator->orderBy('code', 'ASC');
        return response([
            'message' => null,
            'result' => IndicatorResource::collection($indicator->get())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndicatorRequest $request)
    {
        try {
            return ($indicator = Indicator::create($request->all())) ?
                response([
                    'message' => 'Data Indikator berhasil disimpan.',
                    'result' => $indicator
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
    public function show(Indicator $indicator)
    {
        return response([
            'message' => null,
            'result' => new IndicatorResource($indicator)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndicatorRequest $request, Indicator $indicator)
    {
        try {
            return $indicator->update(array_filter($request->all())) ?
                response([
                    'message' => 'Data Indikator berhasil diperbarui.',
                    'result' => $indicator
                ]) : throw new Exception('Terjadi kesalahan server.');
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
    public function destroy(Indicator $indicator)
    {
        try {
            return $indicator->delete() ?
                response([
                    'message' => 'Data Indikator berhasil dihapus.',
                    'result' => $indicator
                ]) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ], 422);
        }
    }
}
