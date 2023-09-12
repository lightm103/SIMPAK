<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataPerangkatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_perangkat' => 'required',
            'nama_pengguna' => 'required',
            'alamat_pengguna' => 'required',
            'foto_perangkat' => 'required',
            'foto_pengguna' => 'required',
            'notelpon_pengguna' => 'required',
            'merek_perangkat' => 'required',
            'tahun_perolehan' => 'required',
            'jabatan_pengguna' => 'required',
        ];
    }
}
