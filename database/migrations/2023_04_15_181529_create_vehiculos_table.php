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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 20);
            $table->string('modelo', 20);
            $table->string('placa', 20);
            //$table->string('tipo_vehiculo', 20);
            $table->string('color', 20);
            $table->boolean('soat');
            $table->decimal('altura', 10, 2);
            $table->decimal('anchura', 10, 2);
            $table->decimal('longitud', 10, 2);
            $table->unsignedBigInteger('usuario_id'); // Añadiendo la columna para la clave foránea
            $table->timestamps();
            
            $table->string('foto')->nullable();
            // Añadiendo la clave foránea
            $table->foreign('usuario_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('vehiculos');
    }
};
