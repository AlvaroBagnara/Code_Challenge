<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-0 d-flex">
            <div class="card">
                <div class="card-header">{{title}}</div>
                <div class="card-body">
                    {{msg}}
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        props: ['title','msg'],
        mounted() {
            console.log('Card Component mounted.')
        }
    }
</script>
