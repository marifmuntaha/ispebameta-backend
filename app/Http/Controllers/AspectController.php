<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAspectRequest;
use App\Http\Requests\UpdateAspectRequest;
use App\Http\Resources\AspectResource;
use App\Models\Aspect;
use Exception;

class AspectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aspect = new Aspect();
        return response([
            'message' => null,
            'result' => AspectResource::collection($aspect->get())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAspectRequest $request)
    {
        try {
            return ($aspect = Aspect::create($request->all())) ?
                response([
                    'message' => 'Data Aspek berhasil disimpan.',
                    'result' => $aspect
                ]) : throw new Exception('Terjadi kesalahan server.');
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
    public function show(Aspect $aspect)
    {
        return response([
            'message' => null,
            'result' => new AspectResource($aspect)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAspectRequest $request, Aspect $aspect)
    {
        try {
            return $aspect->update(array_filter($request->all())) ?
                response([
                    'message' => 'Data Aspek berhasil diperbarui.',
                    'result' => $aspect
                ]) : throw new Exception('Terjadi kesalahan server.');
        }catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ], 422);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aspect $aspect)
    {
        try {
            return $aspect->delete() ?
                response([
                    'message' => 'Data Aspek berhasil dihapus.',
                    'result' => $aspect
                ]) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ], 422);
        }
    }
}
