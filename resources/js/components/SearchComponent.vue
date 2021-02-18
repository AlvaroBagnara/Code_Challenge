<template>
<div id="search-container" class="col-md-12">
    <h1>Busque um Cliente</h1>
    <form action="/cliente" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Digite o Nome do Cliente">
    </form>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Card Component mounted.')
        }
    }
</script>
