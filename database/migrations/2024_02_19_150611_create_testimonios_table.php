<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250);
            $table->text('body_es');
            $table->text('body_en');
            $table->text('foto');
            $table->text('alt_es');
            $table->text('alt_en');
            $table->enum('type', ["imagen", "video", "giveway", "travel"]);
            $table->unsignedBigInteger('abogado_id')->nullable(); // Columna de la clave foránea
            $table->tinyInteger('estatus')->length(1)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonios');
    }
};
