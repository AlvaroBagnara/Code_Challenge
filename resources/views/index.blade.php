@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bem-Vindo a Pagina Inicial') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @else
                    {{ __('Efetue seu Login ou se Registre no canto superior direito,') }}
                    {{ __('Caso ja tenha feito isso, use a barra de navegaçao acima para as funcoes disponiveis.') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
