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
        Schema::create('uso_parqueos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_guardia');
            $table->unsignedBigInteger('id_vehiculo');
            $table->dateTime('fecha_entrada');
            $table->dateTime('fecha_salida')->nullable();

            // Primary Key


            // Foreign Keys
            $table->foreign('id_guardia')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            // Foreign Keys  

            $table->foreign('id_vehiculo')
                ->references('id')
                ->on('vehiculos')
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
        Schema::dropIfExists('uso_parqueos');
    }
};
