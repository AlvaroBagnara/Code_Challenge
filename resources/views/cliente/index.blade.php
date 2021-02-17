@extends('layouts.app')

@section('content')
@if (session('msg'))
    <div class="card-body">
        <div class="text-center">
            {{ session('msg')}}
        </div>
    </div>
@endif
<div id="search-container" class="col-md-12">
    <h1>Busque um Cliente</h1>
    <form action="/cliente" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Digite o Nome do Cliente">
    </form>
</div>
<div id="clientes-container" class="col-md-12">
    <br>
    @if ($search)
    <h2>Resultado da Busca: {{$search}}</h2>
    @else
    <h2>Clientes Cadastrados: </h2>
    @endif
    <br>
    <div id="cards-container" class="row">
        @foreach ($clientes as $cliente)
        <div class="card col-md-3">
            <p>{{ $cliente->id}}</p>
            <div class="card-body">
                <h5 class="card-title">{{$cliente->nome}}</h5>
                <p class="card-clientes">{{$cliente->email}}</p>
                <p class="card-clientes">Tel: {{$cliente->telefone}}</p>
                <p class="card-clientes">Endereco: {{$cliente->endereco->logradouro}},{{$cliente->endereco->numero}} - {{$cliente->endereco->bairro}}</p>
                <p class="card-data">{{$cliente->endereco->cidade}},{{$cliente->endereco->estado}} - {{$cliente->endereco->cep}}</p>
                <div class="text-center">
                    <a href="/cliente/{{$cliente->id}}" class="btn btn-primary">Editar</a>
                </div>
                <br>
            </div>
        </div>
        @endforeach
        @if (count($clientes)==0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        @if (count($clientes)==0 && $search)
                        <div class="card-header">{{ __('Cliente Nao Encontrado!') }}</div>
                        <div class="card-body">                           
                            {{ __('Certifique-se de ter digitado certo!') }}   
                        </div>
                        </div>                            
                        @else
                        <div class="card-header">{{ __('Sem Clientes Cadastrados!') }}</div>
                        <div class="card-body">                           
                            {{ __('Certifique-se de ter cadastrado clientes!') }}   
                        </div>
                        </div> 
                        @endif                        
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection


<!-- 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
-->