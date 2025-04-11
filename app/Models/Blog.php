<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'titulo_es',
        'titulo_en',
        'blog_es',
        'blog_en',
        'meta_es',
        'meta_en',
        'meta_desc_es',
        'meta_desc_en',
        'main_media',
        'main_media_text_es',
        'main_media_text_en',
        'tags_es',
        'tags_en',
        'url_es',
        'url_en',
        'category_id'
    ];

    // Definir la relación con la categoría
    public function categoria()
    {
        return $this->belongsTo(CategoriaBlog::class, 'category_id');
    }
}