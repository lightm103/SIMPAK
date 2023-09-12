<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataKendaraanRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'plat_nomer' => 'required',
            'nama_pengguna' => 'required',
            'alamat_pengguna' => 'required',
            'foto_kendaraan' => 'required',
            'foto_pengguna' => 'required',
            'notelpon_pengguna' => 'required',
            'merek_kendaraan' => 'required',
            'jenis_kendaraan' => 'required',
            'tahun_perolehan' => 'required',
            'jabatan_pengguna' => 'required',
        ];
    }
}