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
                    <div class="panel-heading">Adicionar Novo Imóvel</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/cadastro-imoveis') }}" title="Voltar"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/cadastro-imoveis', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.cadastro-imoveis.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
