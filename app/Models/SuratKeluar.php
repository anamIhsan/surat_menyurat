<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'outgoing_letters';
    protected $dates = ['tanggal_keluar'];

    protected $fillable = [
        'teruskan_kepada', 'no_surat', 'perihal', 'tanggal_keluar', 
        'klasifikasi_surat_id', 'sifat_surat_id', 'catatan'
    ];

    public function sifat()
    {
        return $this->hasOne(SifatSurat::class, 'id', 'sifat_surat_id');
    }

    public function klasifikasi()
    {
        return $this->hasOne(KlasifikasiSurat::class, 'id', 'klasifikasi_surat_id');
    }
}
