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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('empresa');
            $table->text('descripcion');
            $table->string('ubicacion');
            $table->enum('modalidad', ['Pasantia', 'Practica', 'Freelance','Remoto','Hibrido','Eventual']);
            $table->enum('horario', ['Full-Time', 'Part-Time', 'Rotativo']);
            $table->integer('salario_id')->nullable();
            $table->integer('experiencia_id')->nullable();
            $table->enum('estado_oferta', ['Activa', 'Cerrada', 'Expirada','Borrador']);
            $table->datetime('fecha_publicacion');
            $table->date('fecha_expiracion')->nullable();
            $table->timestamps();

            $table->foreign('experiencia_id')->references('id')->on('experiencias_requeridas')->onDelete('cascade');
            $table->foreign('salario_id')->references('id')->on('salarios')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas');
    }
};
