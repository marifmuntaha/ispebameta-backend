<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'nullable',
            'email' => 'nullable|email',
            'password' => 'nullable',
            'nip' => 'nullable',
            'position' => 'nullable',
            'institution' => 'nullable',
            'address' => 'nullable',
            'nsm' => 'nullable',
            'npsn' => 'nullable',
            'foundation' => 'nullable',
            'logo' => 'nullable|image|max:512'
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'Nama Lengkap',
            'email' => 'Alamat Email',
            'password' => 'Kata Sandi',
            'nip' => 'NIP',
            'position' => 'Jabatan',
            'institution' => 'Nama Lembaga',
            'address' => 'Alamat Sekolah',
            'nsm' => 'NSM',
            'npsn' => 'NPSN',
            'logo' => 'Logo Madrasah'
        ];
    }
}
