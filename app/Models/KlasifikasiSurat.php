<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlasifikasiSurat extends Model
{
    use HasFactory;

    protected $table = 'letter_classifications';

    protected $fillable = [
        'code', 'name'
    ];

    public function suratKeluar()
    {
        return $this->belongsTo(SuratKeluar::class, 'klasifikasi_surat_id', 'id');
    }

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class, 'klasifikasi_surat_id', 'id');
    }
}
