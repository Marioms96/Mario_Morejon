<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('dni');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_cliente')
            ->references('id')
            ->on($tableNames['cliente'])
            ->onDelete('cascade');
            $table->foreign('id_administrador')
            ->references('id')
            ->on($tableNames['administrador'])
            ->onDelete('cascade');
            $table->foreign('id_proveedor')
            ->references('id')
            ->on($tableNames['proveedor'])
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
        Schema::dropIfExists('users');
    }
}
