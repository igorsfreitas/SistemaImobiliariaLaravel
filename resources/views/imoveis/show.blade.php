@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Imóvel {{ $imovei->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/imoveis') }}" title="Voltar"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/imoveis/' . $imovei->id . '/edit') }}" title="Editar Imóvel"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar Imóvel</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['imoveis', $imovei->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Apagar', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Apagar Imóvel',
                                    'onclick'=>'return confirm("Apagar Imóvel?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <!--<tr>
                                        <th>ID</th><td>{{ $imovei->id }}</td>
                                    </tr>-->
                                    <tr><th> Tipo do Imóvel </th><td id="tipoImovel"> {{ $imovei->tipoImovel }} </td></tr>
                                    
                                    <tr><th> Nome do Edifício </th><td> {{ $imovei->nomeEdificio }} </td></tr>
                                    
                                    <tr><th> Número do Apartamento / Casa </th><td> {{ $imovei->numeroAptCasa }} </td></tr>

                                    <tr><th> Tamanho do Terreno </th><td> {{ $imovei->tamanhoTerreno }} </td></tr>

                                    <tr><th> Terreno Próprio ? </th><td id="terrenoProprio"> {{ $imovei->terrenoProprio }} </td></tr>

                                    <tr><th> Marinha </th><td id="marinha"> {{ $imovei->marinha }} </td></tr>

                                    <tr><th> Número de Andares </th><td> {{ $imovei->numeroAndares }} </td></tr>

                                    <tr><th> Quantidade de Apartamentos por Andar </th><td> {{ $imovei->qtAptAndar }} </td></tr>

                                    <tr><th> Endereço </th><td> {{ $imovei->endereco }} </td></tr>

                                    <tr><th> Bairro </th><td> {{ $imovei->bairro }} </td></tr>

                                    <tr><th> Cidade </th><td> {{ $imovei->cidade }} </td></tr>

                                    <tr><th> CEP </th><td> {{ $imovei->endereco }} </td></tr>

                                    <tr><th> Quantidade de Quartos </th><td> {{ $imovei->qtdQuartos }} </td></tr>

                                    <tr><th> Quantidade de Suítes </th><td> {{ $imovei->qtdSuites }} </td></tr>

                                    <tr><th> Quantidade de Banheiros </th><td> {{ $imovei->qtdBanheiros }} </td></tr>

                                    <tr><th> Varanda </th><td id="varanda"> {{ $imovei->varanda }} </td></tr>

                                    <tr><th> Terraço </th><td id="terraco"> {{ $imovei->terraco }} </td></tr>

                                    <tr><th> Área Útil </th><td> {{ $imovei->areaUtil }} </td></tr>

                                    <tr><th> Itens de Lazer </th><td> {{ $imovei->itensLazer }} </td></tr>

                                    <tr><th> Tempo de Construção </th><td> {{ $imovei->tempoConstrucao }} </td></tr>

                                    <tr><th> Valor do Condomínio </th><td> {{ $imovei->valorCondominio }} </td></tr>

                                    <tr><th> Valor do IPTU </th><td> {{ $imovei->valorIptu }} </td></tr>

                                    <tr><th> Posição em relação ao sol </th><td id="posicaoSol"> {{ $imovei->posicaoSol }} </td></tr>

                                    <tr><th> Quantidade de Garagens </th><td> {{ $imovei->qtdGaragens }} </td></tr>

                                    <tr><th> Tipo de Garagens </th><td> {{ $imovei->tipoGaragens }} </td></tr>

                                    <tr><th> Nome do Proprietário </th><td> {{ $imovei->nomeProprietario }} </td></tr>

                                    <tr><th> Email do Proprietário </th><td> {{ $imovei->emailProprietario }} </td></tr>

                                    <tr><th> Fone do Proprietário </th><td> {{ $imovei->foneProprietario }} </td></tr>

                                    <tr><th> Valor de Venda </th><td> {{ $imovei->valorVenda }} </td></tr>

                                    <tr><th> Valor de Locação </th><td> {{ $imovei->valorLocacao }} </td></tr>

                                    <tr><th> Nome da Construtora </th><td> {{ $imovei->nomeConstrutora }} </td></tr>

                                    <tr><th> Percentual da comissão </th><td> {{ $imovei->percentualComissao }} </td></tr>

                                    <tr><th> Quem indicou </th><td> {{ $imovei->quemIndicou }} </td></tr>

                                    <tr><th> Telefone de quem indicou </th><td> {{ $imovei->foneQuemIndicou }} </td></tr>

                                    <tr><th> Outras Informações </th><td> {{ $imovei->outrasInformacoes }} </td></tr>

                                    <tr><th> Data da Captação </th><td> {{ $imovei->dataCaptacao }} </td></tr>



                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        if(document.getElementById("tipoImovel").innerHTML == 0){
            document.getElementById("tipoImovel").innerHTML = "Casa";
        }else{
            document.getElementById("tipoImovel").innerHTML = "Apartamento";
        }
    
        if(document.getElementById("terrenoProprio").innerHTML == 0){
            document.getElementById("terrenoProprio").innerHTML = "Sim";
        }else{
            document.getElementById("terrenoProprio").innerHTML = "Não";
        }

        if(document.getElementById("marinha").innerHTML == 0){
            document.getElementById("marinha").innerHTML = "Sim";
        }else{
            document.getElementById("marinha").innerHTML = "Não";
        }

        if(document.getElementById("varanda").innerHTML == 0){
            document.getElementById("varanda").innerHTML = "Sim";
        }else{
            document.getElementById("varanda").innerHTML = "Não";
        }

        if(document.getElementById("terraco").innerHTML == 0){
            document.getElementById("terraco").innerHTML = "Sim";
        }else{
            document.getElementById("terraco").innerHTML = "Não";
        }

        if(document.getElementById("posicaoSol").innerHTML == 0){
            document.getElementById("posicaoSol").innerHTML = "Norte";
        }else if(document.getElementById("posicaoSol").innerHTML == 1){
            document.getElementById("posicaoSol").innerHTML = "Sul";
        }else if(document.getElementById("posicaoSol").innerHTML == 2){
            document.getElementById("posicaoSol").innerHTML = "Leste";
        }else if(document.getElementById("posicaoSol").innerHTML == 3){
            document.getElementById("posicaoSol").innerHTML = "Oeste";
        }
    </script>
@endsection
