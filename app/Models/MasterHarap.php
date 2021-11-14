<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterHarap extends Model
{
    use HasFactory;

    protected $table = 'master_pleases';

    protected $fillable = [
        'name'
    ];
}
