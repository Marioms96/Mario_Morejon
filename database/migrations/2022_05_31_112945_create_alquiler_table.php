<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlquilerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquiler', function (Blueprint $table) {
            $table->bigInteger('id_cliente_alquiler');
            $table->string('id_patinete_alquiler');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('id_pago');
            $table->foreign('id_cliente')
            ->references('id_cliente_alquiler')
            ->on($tableNames['cliente'])
            ->onDelete('cascade');
            $table->foreign('id_patinete')
            ->references('id_patinete_alquiler')
            ->on($tableNames['patinetes'])
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
        Schema::dropIfExists('alquiler');
    }
}
