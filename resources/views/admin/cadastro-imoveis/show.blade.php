@extends('layouts.app')
@if (Auth::guest())
    <script>
        window.location = "/login";
    </script>
@endif
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <!--Imóvel {{ $cadastroimovei->id }}-->
                        <div class="alert alert-success" role="alert" id="imovelDisponivel"><i class="fa fa-check" aria-hidden="true"></i> Imóvel Disponível</div>
                        <div class="alert alert-warning" role="alert" id="imovelIndisponivel"><i class="fa fa-times" aria-hidden="true"></i> Imóvel Indisponível</div>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/cadastro-imoveis') }}" title="Voltar"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/admin/cadastro-imoveis/' . $cadastroimovei->id . '/edit') }}" title="Editar Imóvel"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar Imóvel</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['imoveis', $cadastroimovei->id],
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
                                        <th>ID</th><td>{{ $cadastroimovei->id }}</td>
                                    </tr>-->
                                    <tr style="display:none;"><th> Disponível ? </th><td id="disponivel"> {{ $cadastroimovei->disponivel }} </td></tr>

                                    <tr><th> Tipo do Imóvel </th><td id="tipoImovel"> {{ $cadastroimovei->tipoImovel }} </td></tr>

                                    <tr><th> Locação / Venda </th><td id="locacaoVenda"> {{ $cadastroimovei->locacaoVenda }} </td></tr>
                                    
                                    <tr><th> Nome do Edifício </th><td> {{ $cadastroimovei->nomeEdificio }} </td></tr>
                                    
                                    <tr><th> Número do Apartamento / Casa </th><td> {{ $cadastroimovei->numeroAptCasa }} </td></tr>

                                    <tr><th> Tamanho do Terreno </th><td> {{ $cadastroimovei->tamanhoTerreno }} </td></tr>

                                    <tr><th> Terreno Próprio ? </th><td id="terrenoProprio"> {{ $cadastroimovei->terrenoProprio }} </td></tr>

                                    <tr><th> Marinha </th><td id="marinha"> {{ $cadastroimovei->marinha }} </td></tr>

                                    <tr><th> Número de Andares </th><td> {{ $cadastroimovei->numeroAndares }} </td></tr>

                                    <tr><th> Quantidade de Apartamentos por Andar </th><td> {{ $cadastroimovei->qtAptAndar }} </td></tr>

                                    <tr><th> Endereço </th><td> {{ $cadastroimovei->endereco }} </td></tr>

                                    <tr><th> Bairro </th><td> {{ $cadastroimovei->bairro }} </td></tr>

                                    <tr><th> Cidade </th><td> {{ $cadastroimovei->cidade }} </td></tr>

                                    <tr><th> CEP </th><td> {{ $cadastroimovei->cep }} </td></tr>

                                    <tr><th> Quantidade de Quartos </th><td> {{ $cadastroimovei->qtdQuartos }} </td></tr>

                                    <tr><th> Quantidade de Suítes </th><td> {{ $cadastroimovei->qtdSuites }} </td></tr>

                                    <tr><th> Quantidade de Banheiros </th><td> {{ $cadastroimovei->qtdBanheiros }} </td></tr>

                                    <tr><th> Varanda </th><td id="varanda"> {{ $cadastroimovei->varanda }} </td></tr>

                                    <tr><th> Terraço </th><td id="terraco"> {{ $cadastroimovei->terraco }} </td></tr>

                                    <tr><th> Área Útil </th><td> {{ $cadastroimovei->areaUtil }} </td></tr>

                                    <tr><th> Itens de Lazer </th><td> {{ $cadastroimovei->itensLazer }} </td></tr>

                                    <tr><th> Ano de Construção </th><td> {{ $cadastroimovei->tempoConstrucao }} </td></tr>

                                    <tr><th> Valor do Condomínio </th><td> {{ $cadastroimovei->valorCondominio }} </td></tr>

                                    <tr><th> Valor do IPTU </th><td> {{ $cadastroimovei->valorIptu }} </td></tr>

                                    <tr><th> Posição em relação ao sol </th><td id="posicaoSol"> {{ $cadastroimovei->posicaoSol }} </td></tr>

                                    <tr><th> Quantidade de Garagens </th><td> {{ $cadastroimovei->qtdGaragens }} </td></tr>

                                    <tr><th> Tipo de Garagens </th><td> {{ $cadastroimovei->tipoGaragens }} </td></tr>

                                    <tr><th> Nome do Proprietário </th><td> {{ $cadastroimovei->nomeProprietario }} </td></tr>

                                    <tr><th> Email do Proprietário </th><td> {{ $cadastroimovei->emailProprietario }} </td></tr>

                                    <tr><th> Fone do Proprietário </th><td> {{ $cadastroimovei->foneProprietario }} </td></tr>

                                    <tr><th> Valor de Venda </th><td> {{ $cadastroimovei->valorVenda }} </td></tr>

                                    <tr><th> Valor de Locação </th><td> {{ $cadastroimovei->valorLocacao }} </td></tr>

                                    <tr><th> Nome da Construtora </th><td> {{ $cadastroimovei->nomeConstrutora }} </td></tr>

                                    <tr><th> Percentual da comissão </th><td> {{ $cadastroimovei->percentualComissao }} </td></tr>

                                    <tr><th> Quem indicou </th><td> {{ $cadastroimovei->quemIndicou }} </td></tr>

                                    <tr><th> Telefone de quem indicou </th><td> {{ $cadastroimovei->foneQuemIndicou }} </td></tr>

                                    <tr><th> Outras Informações </th><td> {{ $cadastroimovei->outrasInformacoes }} </td></tr>

                                    <tr><th> Data da Captação </th><td id='dataCaptacao' > {{ $cadastroimovei->dataCaptacao }} </td></tr>



                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
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

        if(document.getElementById("disponivel").innerHTML == 0){
            $("#imovelDisponivel").show();
            $("#imovelIndisponivel").hide();
        }else if(document.getElementById("disponivel").innerHTML == 1){
            $("#imovelIndisponivel").show();
            $("#imovelDisponivel").hide();
        }

        if(document.getElementById("locacaoVenda").innerHTML == 0){
            document.getElementById("locacaoVenda").innerHTML = "Locação";
        }else if(document.getElementById("locacaoVenda").innerHTML == 1){
            document.getElementById("locacaoVenda").innerHTML = "Venda";
        }else if(document.getElementById("locacaoVenda").innerHTML == 2){
            document.getElementById("locacaoVenda").innerHTML = "Locação / Venda";
        }

        var dataCaptacao = document.getElementById('dataCaptacao').innerHTML;
        var regex = /((\d+){4})[-]((\d+){2})[-]((\d+){2})/;
        var day = dataCaptacao.replace(regex, "$5");
        var month = dataCaptacao.replace(regex, "$3");
        var year = dataCaptacao.replace(regex, "$1");
        document.getElementById('dataCaptacao').innerHTML = day+"/"+month+"/"+year;
    </script>
@endsection
