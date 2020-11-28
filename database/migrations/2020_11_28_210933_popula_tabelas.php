<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PopulaTabelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('Titulo')->insert(
            array(
                'autor' => 'Lewis, Clive Staples',
                'titulo' => 'As Crônicas De Nárnia',
                'descricao' => 'Viagens ao fim do mundo, criaturas fantásticas e batalhas épicas entre o bem e o mal '
            )
        );

        DB::table('Titulo')->insert(
            array(
                'autor' => 'SUTHERLAND, JEFF',
                'titulo' => 'SCRUM',
                'descricao' => 'Conheça o método que está revolucionando a produtividade das empresas.'
            )
        );

        DB::table('Titulo')->insert(
            array(
                'autor' => 'Knapp, Jake',
                'titulo' => 'Sprint',
                'descricao' => 'o Método Usado No Google Para Testar e Aplicar Novas Ideias Em Apenas Cinco Dias'
            )
        );

        DB::table('Titulo')->insert(
            array(
                'autor' => 'Nilo Ney',
                'titulo' => 'Python: Algoritmos',
                'descricao' => 'Este livro é orientado ao iniciante em programação.'
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
