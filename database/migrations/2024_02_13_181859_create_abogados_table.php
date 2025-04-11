<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbogadosTable extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('abogados', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_es', 250);
            $table->string('titulo_en', 250);
            $table->string('fullname', 250);
            $table->text('main_image');
            $table->text('associated_logos');
            $table->text('top_bio_image');
            $table->text('alt_top_bio_image_es');
            $table->text('alt_top_bio_image_en');
            $table->text('title_top_bio_image_es');
            $table->text('title_top_bio_image_en');
            $table->text('short_bio_es');
            $table->text('short_bio_en');
            $table->text('secundary_image');
            $table->text('full_bio_es');
            $table->text('full_bio_en');
            $table->text('languages');
            $table->enum('practice_areas', ["immigration","personal injury"]);
            $table->text('regognitions_associations_by_logo');
            $table->text('regognitions_associations_by_year');
            $table->tinyInteger('estatus')->length(1)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abogados');
    }
};
