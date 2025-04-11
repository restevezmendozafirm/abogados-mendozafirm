<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospectos extends Model
{
    use HasFactory;

    protected $table = 'prospectos';
    protected $fillable = [
        'nombre',
        'phone',
        'email',
        'message',
        'situacion',
        'seccion',
    ];

}
