<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    foto:String,
    nombre:String,
    descripcion:String
});

</script>

<template>
    <Head title="Welcome" />

<body>
    <nav class="navbar navbar-expand-md principal py-3">
        <div class="container"><a :href="route('dashboard')" class="navbar-brand d-flex align-items-center" ><span>
            <img src="/assets/img/foto3.png" class="w-25">
        </span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

        </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" :src=foto></div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 350px;">
                    <h2 class="text-uppercase fw-bold">{{nombre}}</h2>
                    <p class="my-3">{{descripcion}}</p>
                </div>
            </div>
        </div>
    </div>



</body>
</template>
