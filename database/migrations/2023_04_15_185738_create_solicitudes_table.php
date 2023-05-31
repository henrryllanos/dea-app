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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->unique();
            $table->string('estado', 50)->nullable();
            $table->string('observacion', 50)->nullable();
            $table->string('gestion', 20)->nullable();
            $table->integer('year')->nullable();
            $table->string('tipo_plaza', 20)->nullable();
             // Añadiendo la columna para la clave foránea
            $table->timestamps();
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
        Schema::dropIfExists('solicutudes');
    }
};
