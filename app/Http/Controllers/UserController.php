<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = new User();
        return response([
            'message' => null,
            'result' => $user->get()
        ]);
    }

    public function store(StoreUserRequest $request)
    {

    }

    public function show(User $user)
    {
        return response([
            'message' => null,
            'result' => new UserResource($user)
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {

        try {
            if ($request->hasFile('image')) {
                $logo = $request->file('image');
                $extension = $logo->getClientOriginalExtension();
                $filenameToStore = $user->id . '.' . $extension;
                $logo->storeAs('public/images', $filenameToStore);
                $request->request->add(['logo' => $filenameToStore]);

            }
            return $user->update(array_filter($request->all())) ?
                response([
                    'message' => 'Data Pengguna berhasil diperbarui.',
                    'result' => $user
                ], 201) : throw new Exception('Terjadi kesalahan server.');
        } catch (Exception $exception) {
            return response([
                'message' => $exception->getMessage(),
                'result' => null
            ], 422);
        }
    }

    public function destroy(User $user)
    {

    }
}
