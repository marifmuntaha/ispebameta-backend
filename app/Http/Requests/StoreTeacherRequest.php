<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'user' => 'required',
            'name' => 'required',
            'nip' => 'nullable',
            'subject' => 'required',
            'phone' => 'nullable',
        ];
    }

    public function attributes(): array
    {
        return [
            'user' => 'Member',
            'name' => 'Nama Lengkap',
            'nip' => 'NIP',
            'subject' => 'Mata Pelajaran',
            'phone' => 'Nomor WA',
        ];
    }
}
