<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'role' => 'nullable',
            'nip' => 'nullable',
            'institution' => 'required',
            'position' => 'required',
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'Nama Lengkap',
            'email' => 'Alamat Email',
            'password' => 'Kata Sandi',
            'password_confirmation' => 'Ulangi Sandi',
            'role' => 'Hak Akses',
            'nip' => 'NIP',
            'institution' => 'Lembaga Asal',
            'position' => 'Jabatan',
        ];
    }

    public function prepareForValidation()
    {
        return $this->merge(['role' => 2]);
    }
}
