<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroImovei extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cadastro_imoveis';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['disponivel', 'tipoImovel', 'locacaoVenda', 'nomeEdificio', 'numeroAptCasa', 'tamanhoTerreno', 'terrenoProprio', 'marinha', 'numeroAndares', 'qtAptAndar', 'endereco', 'bairro', 'cidade', 'cep', 'qtdQuartos', 'qtdSuites', 'qtdBanheiros', 'varanda', 'terraco', 'areaUtil', 'itensLazer', 'tempoConstrucao', 'valorCondominio', 'valorIptu', 'posicaoSol', 'qtdGaragens', 'tipoGaragens', 'nomeProprietario', 'emailProprietario', 'foneProprietario', 'valorVenda', 'valorLocacao', 'nomeConstrutora', 'percentualComissao', 'quemIndicou', 'foneQuemIndicou', 'outrasInformacoes', 'dataCaptacao'];

    
}
