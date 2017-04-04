@extends('layouts.app')
<?php
    if(Auth::check()!=1){
        echo '<script type="text/javascript"> window.location = "/login"; </script>';   
    }
?>
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Imóveis</div>
                    <div class="panel-body">
                        <a href="{{ url('/imoveis/create') }}" class="btn btn-success btn-sm" title="Add New Imovei">
                            <i class="fa fa-plus" aria-hidden="true"></i> Adicionar Novo
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/imoveis', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Procurar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <!--<th>ID</th>-->
                                        <th>Nome do Edificio</th>
                                        <th>Bairro</th>
                                        <th>Nome do Propietário</th>
                                        <!--<th>Telefone</th>-->
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($imoveis as $item)
                                    <tr>
                                        <!--<td>{{ $item->id }}</td>-->
                                        <td>{{ $item->nomeEdificio }}</td>
                                        <td>{{ $item->bairro }}</td>
                                        <td>{{ $item->nomeProprietario }}</td>
                                        <!--<td>{{ $item->foneProprietario }}</td>-->
                                        <td>
                                            <a href="{{ url('/imoveis/' . $item->id) }}" title="Visualizar Imóvel'"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Visualizar</button></a>
                                            <a href="{{ url('/imoveis/' . $item->id . '/edit') }}" title="Editar Imóvel"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/imoveis', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Apagar', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Apagar Imóvel',
                                                        'onclick'=>'return confirm("Apagar este imóvel ?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $imoveis->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
