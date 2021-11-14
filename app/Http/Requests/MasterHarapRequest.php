<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MasterHarapRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:4|max:25|unique:master_pleases,name,'.$this->id.'',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib di isi',
            'name.string' => 'Nama harus huruf',
            'name.min' => 'Nama minimal 4 huruf',
            'name.max' => 'Nama maksimal 25 huruf',
            'name.unique' => 'Nama sudah terpakai',
        ];
    }
}
