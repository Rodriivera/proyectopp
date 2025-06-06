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
        Schema::create('carreras_ofertas', function (Blueprint $table) {
            $table->id();
            $table->integer('carrera_id');
            $table->integer('oferta_id');
            $table->timestamps();

            $table->foreignId('carrera_id')->references('id')->on('carreras')->onDelete('cascade');

            $table->foreignId('oferta_id')->references('id')->on('ofertas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras_ofertas');
    }
};
