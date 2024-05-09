<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Http\Resources\SubjectResource;
use App\Models\Subject;
use Exception;
use Illuminate\Support\Facades\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subject = new Subject();
        return response([
            'message' => null,
            'result' => SubjectResource::collection($subject->get())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        try {
            return ($subject = Subject::create($request->all())) ?
                response([
                    'message' => 'Data mata pelajaran berhasil ditambahkan.',
                    'result' => $subject
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
    public function show(Subject $subject)
    {
        return response([
            'message' => null,
            'result' => new SubjectResource($subject)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        try {
            return $subject->update(array_filter($request->all())) ?
                response([
                    'message' => 'Data mata pelajaran berhasil diperbarui.',
                    'result' => $subject
                ]) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        try {
            return $subject->delete() ?
                response([
                    'message' => 'Data mata pelajaran berhasil dihapus.',
                    'result' => $subject
                ]) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ]);
        }
    }
}
