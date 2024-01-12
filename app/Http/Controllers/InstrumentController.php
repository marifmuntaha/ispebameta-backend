<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstrumentRequest;
use App\Http\Requests\UpdateInstrumentRequest;
use App\Http\Resources\InstrumentResource;
use App\Models\Instrument;
use Exception;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $instrument = new Instrument();
        $instrument = $request->exists('aspect') ? $instrument->whereAspect($request->aspect) : $instrument;
        return response([
            'message' => null,
            'result' => InstrumentResource::collection($instrument->get())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInstrumentRequest $request)
    {
        try {
            return ($instrument = Instrument::create($request->all())) ?
                response([
                    'message' => 'Data Instrument berhasil disimpan.',
                    'result' => $instrument
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
    public function show(Instrument $instrument)
    {
        return response([
            'message' => null,
            'result' => new InstrumentResource($instrument)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInstrumentRequest $request, Instrument $instrument)
    {
        try {
            return $instrument->update(array_filter($request->all())) ?
                response([
                    'message' => 'Data Instrumen berhasil diperbarui.',
                    'result' => $instrument
                ]) : throw new Exception('Terjadi kesalahan server');
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
    public function destroy(Instrument $instrument)
    {
        try {
            return $instrument->delete() ?
                response([
                    'message' => 'Data Instrument berhasil dihapus.',
                    'result' => $instrument
                ]) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ], 422);
        }
    }
}
