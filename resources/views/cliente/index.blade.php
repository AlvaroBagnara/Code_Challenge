@extends('layouts.app')

@section('content')

@if (session('msg'))
    <alert-component alert="{{session('msg')}}"></alert-component>
@endif

<search-component></search-component>

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
            @if (count($clientes)==0 && $search)

            <card-component title="Cliente Não Encontrado"
            msg="Certifique-se de ter digitado corretamente!">
            </card-component> 

            @else
            
            <card-component title="Sem Clientes Cadastrados"
            msg="Certifique-se de ter cadastrado Clientes!">
            </card-component>

            @endif   
        @endif
        
    </div>
</div>
@endsection
