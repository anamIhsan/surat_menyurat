<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $table = 'dispositions';
    protected $dates = ['tanggal_verifikasi'];

    protected $fillable = [
        'surat_masuk_id', 'master_harap_id', 'users_id', 
        'catatan_adminTU', 'catatan_kepalaDinas', 'verifikasi',
        'tanggal_verifikasi'
    ];

    public function suratMasuk()
    {
        return $this->belongsTo(SuratMasuk::class, 'surat_masuk_id', 'id');
    }

    public function masterHarap()
    {
        return $this->hasOne(MasterHarap::class, 'id', 'master_harap_id');
    }
}
