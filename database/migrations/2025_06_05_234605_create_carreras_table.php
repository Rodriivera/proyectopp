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
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->enum('carrera', ['Tecnicatura Superior en Logística', 'Tecnicatura Superior en Análisis de Sistemas','Tecnicatura Superior en Administración Contable','Tecnicatura Superior en Administración de Recursos Humanos','Tecnicatura Superior en Gestión Ambiental y Salud','Tecnicatura Superior en Higiene y Seguridad en el Trabajo','Tecnicatura Superior en Mantenimiento Industrial','Tecnicatura Superior en Internet de las Cosas y Sistemas Embebidos']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carreras');
    }
};
