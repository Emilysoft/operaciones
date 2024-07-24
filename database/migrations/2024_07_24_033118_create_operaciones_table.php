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
            
            /*
             * Referencias: https://laravel.com/docs/10.x/migrations#foreign-key-constraints
             *
             * Como indica la documentación: el método `foreignId` crea la columna teniendo como convención de <tabla>_<columna>.
             * La relación con el ID de la tabla 'usuarios' sería `usuario_id`, 'usuario' en singular porque el método lo pluraliza agregándole una 's' al final.
             */            
            $table->foreignId('usuario_id')->constrained()->onDelete('cascade');
            $table->foreignId('trabajo_id')->constrained()->onDelete('cascade');
            $table->foreignId('maquinaria_id')->constrained()->onDelete('cascade');

            /* Para esta columna es necesario definir el nombre de la tabla (sectores) en el método `constrained` porque por defecto 'sector' lo pluraliza a 'sectors', donde esa tabla no existe.  */
            $table->foreignId('sector_id')->constrained('sectores')->onDelete('cascade');

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
