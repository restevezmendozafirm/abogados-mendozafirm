<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_es', 250);
            $table->string('titulo_en', 250);
            $table->text('body_es');
            $table->text('body_en');
            $table->text('meta_es');
            $table->text('meta_en');
            $table->text('meta_desc_es');
            $table->text('meta_desc_en');
            $table->text('main_media');
            $table->string('main_media_text_es', 250);
            $table->string('main_media_text_en', 250);
            $table->text('tags_es');
            $table->text('tags_en');
            $table->unsignedBigInteger('category_id')->nullable(); // Columna de la clave foránea
            $table->text('url_es');
            $table->text('url_en');
            $table->timestamps();
            $table->tinyInteger('estatus')->length(1)->default(0);
            $table->foreign('category_id')->references('id')->on('categoria_blog')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
}
