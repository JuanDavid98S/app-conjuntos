<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->string('tipo_transaccion')->comment('Administración, Arrendamiento, Colecta');
            $table->boolean('estado_pago')->comment('true -> Pago, false -> No pago');
            $table->double('valor_pago');
            $table->date('fecha_limite');
            $table->date('fecha_generacion');
            $table->string('detalle')->comment('Descripción del pago realizado. (Pago de cuota de administración, etc...)');
            $table->string('metodo_pago')->comment('Paypal, Débito PSE, Crédito, Efectivo');
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
        Schema::dropIfExists('transacciones');
    }
}
