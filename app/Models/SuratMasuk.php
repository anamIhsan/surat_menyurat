<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'incoming_letters';
    protected $dates = ['tanggal_masuk'];

    protected $fillable = [
        'dari', 'no_surat', 'tanggal_masuk', 'perihal', 
        'klasifikasi_surat_id', 'sifat_surat_id', 'catatan',
        'lampiran_surat', 'diterima'
    ];

    public function sifat()
    {
        return $this->hasOne(SifatSurat::class, 'id', 'sifat_surat_id');
    }

    public function klasifikasi()
    {
        return $this->hasOne(KlasifikasiSurat::class, 'id', 'klasifikasi_surat_id');
    }

    public function disposisi()
    {
        return $this->hasOne(Disposisi::class, 'surat_masuk_id', 'id');
    }
}
