<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBasicUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('Usuario')->insert(
            array(
                'email' => 'jackson@sgb.com',
                'senha' => md5('123'),
                'tipo' => 'administrador',
                'nome' => 'Jackson Marcondes'
            )
        );

        DB::table('Usuario')->insert(
            array(
                'email' => 'jeremias@sgb.com',
                'senha' => md5('jeremias'),
                'tipo' => 'administrador',
                'nome' => 'Jeremias de Senna Crispim'
            )
        );

        DB::table('Usuario')->insert(
            array(
                'email' => 'angela@sgb.com',
                'senha' => md5('angela'),
                'tipo' => 'administrador',
                'nome' => 'Angela Thalia'
            )
        );

        DB::table('Usuario')->insert(
            array(
                'email' => 'usuario@sgb.com',
                'senha' => md5('usuario'),
                'tipo' => 'usuario',
                'nome' => 'Usuário'
            )
        );

        DB::table('Usuario')->insert(
            array(
                'email' => 'usuario2@sgb.com',
                'senha' => md5('usuario'),
                'tipo' => 'usuario',
                'nome' => 'Usuário 2'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
