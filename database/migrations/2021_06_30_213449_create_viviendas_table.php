<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_conjunto')->unsigned();
            $table->bigInteger('id_usuario')->unsigned()->nullable();
            $table->foreign('id_conjunto')->references('id')->on('conjuntos');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->string('estado')->comment('Alquilada, En venta, Vendida, Libre');
            $table->double('precio_venta')->nullable();
            $table->double('precio_alquiler')->nullable();
            $table->string('tipo')->comment('Revisar de qué hablábamos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viviendas');
    }
}
