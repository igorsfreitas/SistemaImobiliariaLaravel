@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Você está logado! <br />

                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <button type="button" onClick="gerenciarImoveis()" class="btn btn-primary text-center" style="width:100%;">
                                <h1><i class="fa fa-home" aria-hidden="true"></i></h1>
                                <p>Gerenciar Imóveis</p>
                            </button>
                        </div>

                        <div class="col-md-4">
                            <button type="button" onClick="gerarRelatorio()" class="btn btn-primary text-center" style="width:100%;">
                                <h1><i class="fa fa-file-text-o" aria-hidden="true"></i></h1>
                                <p>Gerar Relatório</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function gerarRelatorio(){
        window.open("{{ url('/relatorioImoveis') }}","_blank");
    };

    function gerenciarImoveis(){
        location.href = "{{ url('/imoveis') }}";
    };
</script>
@endsection
