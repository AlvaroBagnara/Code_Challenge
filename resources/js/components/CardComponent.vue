<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{'Nada'}}</div>
                <div class="card-body">
                    <!-- @if (session('msg'))
                        {{ session('msg')}}
                    @else
                        {{ __('Você está logado, Seja Bem-vindo!') }}
                    @endif -->
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
