<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura2', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->nullable();
            $table->string("detalle")->nullable();
            $table->integer("ci")->nullable();
            $table->integer("monto")->nullable();
            $table->string("comprobante")->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('usuario_id');

            //llave foranea
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
        Schema::dropIfExists('posts');
    }
}
