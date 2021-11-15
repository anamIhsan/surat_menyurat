<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuratKeluarRequest extends FormRequest
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
            'teruskan_kepada' => 'required|string|min:4|max:25',
            'perihal' => 'required|string|min:4|max:25',
            'no_surat' => 'required|string|min:4|max:25',
            'tanggal_keluar' => 'required',
            'sifat_surat_id' => 'required',
            'klasifikasi_surat_id' => 'required',
            'catatan' => 'required|string|min:4|max:25',
        ];
    }

    public function messages()
    {
        return [
            'teruskan_kepada.required' => 'Penerima wajib di isi',
            'teruskan_kepada.string' => 'Penerima harus huruf',
            'teruskan_kepada.min' => 'Penerima minimal 4 huruf',
            'teruskan_kepada.max' => 'Penerima maksimal 25 huruf',

            'perihal.required' => 'Perihal wajib di isi',
            'perihal.string' => 'Perihal harus huruf',
            'perihal.min' => 'Perihal minimal 4 huruf',
            'perihal.max' => 'Perihal maksimal 25 huruf',

            'no_surat.required' => 'No Surat wajib di isi',
            'no_surat.string' => 'No Surat harus huruf',
            'no_surat.min' => 'No Surat minimal 4 huruf',
            'no_surat.max' => 'No Surat maksimal 25 huruf',

            'tanggal_keluar.required' => 'Tanggal wajib di isi',
            
            'sifat_surat_id.required' => 'Sifat Surat wajib di isi',
            
            'klasifikasi_surat_id.required' => 'Klasifikasi Surat wajib di isi',

            'catatan.required' => 'Catatan wajib di isi',
            'catatan.string' => 'Catatan harus huruf',
            'catatan.min' => 'Catatan minimal 4 huruf',
            'catatan.max' => 'Catatan maksimal 25 huruf',
        ];
    }
}
