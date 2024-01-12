<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $teacher = new Teacher();
        $teacher = $request->exists('user') ? $teacher->whereUser($request->user) : $teacher;
        return response([
            'message' => null,
            'result' => TeacherResource::collection($teacher->get())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        try {
            return ($teacher = Teacher::create($request->all())) ?
                response([
                    'message' => 'Data guru berhasil ditambahkan.',
                    'result' => $teacher
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
    public function show(Teacher $teacher)
    {
        return response([
            'message' => null,
            'result' => new TeacherResource($teacher)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        try {
            return $teacher->update(array_filter($request->all())) ?
                response([
                    'message' => 'Data guru berhasil diperbarui.',
                    'result' => $teacher
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
    public function destroy(Teacher $teacher)
    {
        try {
            return $teacher->delete() ?
                response([
                    'message' => 'Data guru berhasil dihapus.',
                    'result' => $teacher
                ]) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception){
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ]);
        }
    }
}
