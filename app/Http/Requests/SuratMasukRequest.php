<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuratMasukRequest extends FormRequest
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
            'dari' => 'required|string|min:4|max:25',
            'no_surat' => 'required|string|min:4|max:25',
            'perihal' => 'required|string|min:4|max:25',
            'tanggal_masuk' => 'required',
            'catatan' => 'required|string|min:4|max:25',
            'lampiran' => 'required|mimes:pdf',
            'sifat_surat_id' => 'required',
            'klasifikasi_surat_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dari.required' => 'Pengirim wajib di isi',
            'dari.string' => 'Pengirim harus huruf',
            'dari.min' => 'Pengirim minimal 4 huruf',
            'dari.max' => 'Pengirim maksimal 25 huruf',

            'no_surat.required' => 'No Surat wajib di isi',
            'no_surat.string' => 'No Surat harus huruf',
            'no_surat.min' => 'No Surat minimal 4 huruf',
            'no_surat.max' => 'No Surat maksimal 25 huruf',

            'perihal.required' => 'Perihal wajib di isi',
            'perihal.string' => 'Perihal harus huruf',
            'perihal.min' => 'Perihal minimal 4 huruf',
            'perihal.max' => 'Perihal maksimal 25 huruf',

            'tanggal_masuk.required' => 'Tanggal wajib di isi',
            
            'catatan.required' => 'Catatan wajib di isi',
            'catatan.string' => 'Catatan harus huruf',
            'catatan.min' => 'Catatan minimal 4 huruf',
            'catatan.max' => 'Catatan maksimal 25 huruf',
            
            'lampiran.required' => 'Lampiran surat wajib di isi',
            'lampiran.mimes' => 'Lampiran surat harus format PDF',

            'sifat_surat_id.required' => 'Sifat Surat wajib di isi',
            
            'klasifikasi_surat_id.required' => 'Klasifikasi Surat wajib di isi',
        ];
    }
}
