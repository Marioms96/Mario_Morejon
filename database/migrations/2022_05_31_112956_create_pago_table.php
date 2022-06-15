<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->integer('numero_pago');
            $table->double('cantidad');
            $table->string('descripcion');
            $table->date('fecha_pago');
            $table->bigInteger('id_usuario_cliente');
            $table->foreign('id_cliente_alquiler')
            ->references('numero_pago')
            ->on($tableNames['alquiler'])
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago');
    }
}
