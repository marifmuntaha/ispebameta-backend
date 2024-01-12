<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAspectRequest extends FormRequest
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
            'number' => 'required',
            'name' => 'required',
            'desc' => 'required'
        ];
    }

    public function attributes(): array
    {
        return [
            'number' => 'Nomor Urut',
            'name' => 'Nama Aspek',
            'desc' => 'Diskripsi'
        ];
    }
}
