<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Font extends Model
{

    protected $fillable = [
        'NOM',
        'ADREÇA',
        'X_ETRS89',
        'Y_ETRS89',
        'LATITUD',
        'LONGITUD'
    ];

    use HasFactory;
}
