@extends('layouts.app')

@section('content')
<h1>{{$cliente->name}}</h1>
    <div class="col-md-10 offset-md-4">
        <div class="row">
            <div id="info-container" class="col-md-5">
                <div class="card col-md-12">
                    <br>
                    <h2>{{ $cliente->nome }}</h2>
                    <p>E-Mail: {{$cliente->email}}</p>
                    <p>Telefone: {{$cliente->telefone}}</p>
                    <p>Sexo: {{$cliente->sexo}}</p>
                    <h5 class="text-center">Endereco:</h5>
                    <p>Logradouro: {{$cliente->endereco->logradouro}}</p>
                    <p>Bairro: {{$cliente->endereco->bairro}}</p>
                    <p>Numero: {{$cliente->endereco->numero}}</p>
                    <p>Cidade: {{$cliente->endereco->cidade}}</p>
                    <p>Estado: {{$cliente->endereco->estado}}</p>
                    <p>CEP: {{$cliente->endereco->cep}}</p>
                    <h5 class="text-center">Info:</h5>
                    <p>Criado: {{$cliente->created_at}} </p>
                    <p>Editado: {{$cliente->updated_at}}</p>
                    <a href="/cliente/edit/{{$cliente->id}}" class="btn btn-primary" >Editar</a>
                    <br>
                    <form action="/cliente/{{$cliente->id}}" method="POST" class="text-center">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                    </form>
                    <br>
                </div>  
            </div>
        </div>
    </div>

@endsection