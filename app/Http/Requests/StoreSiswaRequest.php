<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'wali_id' => 'nullable',
                'nama' => 'required',
                'nisn' => 'required|unique:siswas',
                'kelas' => 'required',
                'angkatan' => 'required',
                'foto' => 'nullable|image|mimes:jpeg,png,gif,svg|max:2048',

        ];
    }
}