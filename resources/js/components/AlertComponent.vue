<template>
<div class="card-body ">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="alert alert-success text-center">{{alert}}</div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ['alert'],
        mounted() {
            console.log('Home Component mounted.')
        }
    }
</script>