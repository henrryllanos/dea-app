<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_guardias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guardia_id')->unique();
            $table->unsignedBigInteger('turno_id');
            $table->string('gestion', 20);
            $table->integer('year');
             // Añadiendo la columna para la clave foránea
            $table->timestamps();
            $table->foreign('guardia_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
              // Añadiendo la columna para la clave foránea
            $table->foreign('turno_id')
                  ->references('id')
                  ->on('turnos')
                  ->onDelete('cascade')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios_guardias');
    }
};
