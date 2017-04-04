<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tipoImovel');
            $table->string('nomeEdificio');
            $table->string('numeroAptCasa');
            $table->string('tamanhoTerreno');
            $table->string('terrenoProprio');
            $table->string('marinha');
            $table->integer('numeroAndares');
            $table->integer('qtAptAndar');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->integer('qtdQuartos');
            $table->integer('qtdSuites');
            $table->string('qtdBanheiros');
            $table->string('varanda');
            $table->string('terraco');
            $table->string('areaUtil');
            $table->string('itensLazer');
            $table->string('tempoConstrucao');
            $table->string('valorCondominio');
            $table->string('valorIptu');
            $table->string('posicaoSol');
            $table->integer('qtdGaragens');
            $table->string('tipoGaragens');
            $table->string('nomeProprietario');
            $table->string('emailProprietario');
            $table->string('foneProprietario');
            $table->string('valorVenda');
            $table->string('valorLocacao');
            $table->string('nomeConstrutora');
            $table->string('percentualComissao');
            $table->string('quemIndicou');
            $table->string('foneQuemIndicou');
            $table->string('outrasInformacoes');
            $table->date('dataCaptacao');
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
        Schema::drop('imoveis');
    }
}
