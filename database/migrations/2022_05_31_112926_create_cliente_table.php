<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigInteger('id_cliente');
            $table->string('nombre_titular');
            $table->bigInteger('numero_tarjeta');
            $table->date('fecha_caducidad');
            $table->integer('cvc');
            $table->foreign('id_usuario_cliente')
            ->references('id_cliente')
            ->on($tableNames['pago'])
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
        Schema::dropIfExists('cliente');
    }
}
