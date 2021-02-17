@extends('layouts.app')

@section('content')
<div id="cliente-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastro de Cliente</h1>
    <form action="/create/store" method="POST">
        @csrf 
        <div class="form-group">
            <label for="title">Cliente: </label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do cliente" required >
        </div>
        <div class="form-group">
            <label for="email">E-Mail: </label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone: (DD + 9 Digitos)</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" pattern="[0-9]{11}" placeholder="Numero de Telefone" min="11" max="11" required>
        </div>
        <div class="form-group">
            <label for="title">Sexo: </label>
            <select name="sexo" id="sexo" class="form-control">
                <option value="N">Nao Declarar</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select> 
        </div>
        <h2>Endereco:</h2>
        <div class="form-group">
            <label for="title">Logradouro: </label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Nome da Rua/Logradouro" required>
        </div>
        <div class="form-group">
            <label for="title">Bairro: </label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Nome do Bairro" required>
        </div>
        <div class="form-group">
            <label for="title">Numero: </label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero" required>
        </div>
        <div class="form-group">
            <label for="title">CEP: </label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>
        </div>
        <div class="form-group">
            <label for="title">Estado: </label>
            <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
        </div>
        <div class="form-group">
            <label for="title">Cidade: </label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da Cidade" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Cliente">
        
    </form>
</div>
@endsection
