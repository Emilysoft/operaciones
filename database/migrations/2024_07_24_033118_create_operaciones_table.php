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
        Schema::create('operaciones', function (Blueprint $table) {
            $table->id();
            $table->string('prioridad');
            $table->date('fecha_ingreso');
            $table->integer('vencimiento');
            $table->date('fecha_vencimiento');
            $table->date('fecha_ejecucion');
            $table->string('estado');
            $table->foreignId('id_usuario')->constrained()->onDelete('cascade');
            $table->foreignId('id_trabajo')->constrained()->onDelete('cascade');
            $table->foreignId('id_maquinaria')->constrained()->onDelete('cascade');
            $table->foreignId('id_sector')->constrained()->onDelete('cascade');








            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operaciones');
    }
};
