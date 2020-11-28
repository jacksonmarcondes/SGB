<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reserva', function (Blueprint $table) {
            $table->id('codigoReserva');
            $table->unsignedBigInteger('usuario')->nullable();
            $table->unsignedBigInteger('titulo')->nullable();
            $table->dateTime('dataReserva');
        });

        Schema::table('Reserva', function (Blueprint $table) {
            $table->foreign('usuario')->references('codigoUsuario')->on('Usuario');
            $table->foreign('titulo')->references('codigoLivro')->on('Titulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Reserva');
    }
}
