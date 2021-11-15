<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SifatSurat extends Model
{
    use HasFactory;

    protected $table = 'letter_traits';

    protected $fillable = [
        'name'
    ];

    public function suratKeluar()
    {
        return $this->belongsTo(SuratKeluar::class, 'sifat_surat_id', 'id');
    }

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class, 'sifat_surat_id', 'id');
    }
}
