<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogados extends Model
{
    use HasFactory;

    protected $table = 'abogados';
    protected $fillable = [
        'title_es',
        'title_en',
        'fullname',
        'main_image',
        'alt_imagen_es',
        'alt_imagen_en',
        'associated_logos',
        'top_bio_image',
        'alt_top_bio_image_es',
        'alt_top_bio_image_en',
        'title_top_bio_image_es',
        'title_top_bio_image_en',
        'short_bio_es',
        'short_bio_en',
        'secundary_image',
        'full_bio_es',
        'full_bio_en',
        'languages',
        'practice_areas',
        'regognitions_associations_es',
        'regognitions_associations_en',
        'regognitions_associations_es_2',
        'regognitions_associations_en_2',
        'estatus',
        'url_es',
        'url_en',
    ];



}
