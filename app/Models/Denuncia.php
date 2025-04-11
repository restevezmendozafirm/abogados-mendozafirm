<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;

    protected $table = 'denuncias';

    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'categoria',
        'reportado',
        'img_evidencia',
        'descripcion',
    ];
}
