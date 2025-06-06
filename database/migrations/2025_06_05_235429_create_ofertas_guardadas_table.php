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
        Schema::create('ofertas_guardadas', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id');
            $table->integer('oferta_id');
            $table->timestamps();

            $table->foreignId('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');

            $table->foreignId('oferta_id')->references('id')->on('ofertas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas_guardadas');
    }
};
