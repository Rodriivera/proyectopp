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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dni', 20)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('genero', ['masculino', 'femenino', 'otro']);
            $table->string('nacionalidad')->nullable();
            $table->string('ciudad_residencia')->nullable();
            $table->string('pais_residencia')->nullable();
            $table->string('foto_perfil')->nullable();
            $table->string('sitio_web')->nullable();
            $table->unsignedBigInteger('carrera_id')->nullable();
            $table->enum('rol', ['usuario', 'administrador']);
            $table->timestamps();

            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
