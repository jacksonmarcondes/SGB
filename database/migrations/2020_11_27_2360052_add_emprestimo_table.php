<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmprestimoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Emprestimo', function (Blueprint $table) {
            $table->dateTime('dataPrevista');
            $table->dateTime('dataEmprestimo');
            $table->dateTime('dataDevolucao');
            $table->unsignedBigInteger('reserva')->nullable();

        });

        Schema::table('Emprestimo', function (Blueprint $table) {
            $table->foreign('reserva')->references('codigoReserva')->on('Reserva');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Emprestimo');
    }
}
