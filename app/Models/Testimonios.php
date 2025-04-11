<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonios extends Model
{
    use HasFactory;

    protected $table = 'testimonios';
    protected $fillable = [
        'nombre_es',
        'nombre_en',
        'body_es',
        'body_en',
        'foto',
        'alt_es',
        'alt_en',
        'type',
        'abogado_id',
        'estatus',
    ];

    public function abogado()
    {
        return $this->belongsTo(Abogados::class, 'abogado_id');
    }
}
