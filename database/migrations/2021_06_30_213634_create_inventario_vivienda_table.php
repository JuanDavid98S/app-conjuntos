<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioViviendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_vivienda', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_vivienda')->unsigned();
            $table->foreign('id_vivienda')->references('id')->on('viviendas');
            $table->string('producto');
            $table->string('estado')->comment('Descipción del estado del bien (funcional, con fallas, no funciona)');
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
        Schema::dropIfExists('inventario_vivienda');
    }
}
