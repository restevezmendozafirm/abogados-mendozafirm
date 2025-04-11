<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lname', 250);
            $table->text('body_es');
            $table->text('body_en');
            $table->string('avatar', 50)->nullable();
            $table->string('alt_avatar_es', 50);
            $table->string('alt_avatar_en', 50);
            $table->enum('type', ["imagen","Video"] );
            $table->enum('categoria', ["Regular","Travel","Giveaway"] );
            $table->unsignedBigInteger('abogado_id');
            $table->foreign('abogado_id')->references('id')->on('abogados');
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