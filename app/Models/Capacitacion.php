<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;

    // Define la tabla asociada al modelo
    protected $table = 'capacitacion';

    // Define los campos que se pueden asignar en masa
    protected $fillable = [
        'nombre',
        'archivo',
        'estatus',
        'url',
    ];

    // Si los campos de timestamps son diferentes, puedes especificarlos aquí
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
