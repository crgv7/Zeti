<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Swal from 'sweetalert2';
import { Head } from '@inertiajs/vue3';
import {useForm} from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'
import ModalServicios from '@/Components/ModalServicios.vue';



const form = useForm({});
const props = defineProps({
    serv: Array,
    foto:String
});

const deleteContrato= (id) => {
    Swal.fire({
        title: 'Estas seguro?',
        text: "No hay vuelta atras",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            form.delete(route('services.destroy', id))
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
        }
      })
}


// esta funcion es para que cuando se de le en el boton actualizar  obtenga los datos en los campos para modificar
const openModal = (service) => {
    document.getElementById('id2').value = service.id;
    document.getElementById('nombre2').value = service.nombre;
    document.getElementById('descripcion2').value = service.descripcion;
    document.getElementById('fotomin2').src = service.foto




}

</script>

<template>
<Head title="Servicios"></Head>

<AuthenticatedLayout>
    <template #header>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<body class="">
      <div class="d-grid mx-auto mt-5 d-flex justify-center mb-3">
        <div class=" container w-25 d-flex">
          <button class="btn bg-primary w-50" data-bs-toggle="modal" data-bs-target="#modalCreate">
            <i class="bi bi-plus-circle-fill"></i>Añadir</button>
          </div>
      </div>
      <div class="container d-lg-flex justify-content-center table-responsive  ">
        <table class="table w-75 table-bordered">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">Foto</th>


    </tr>
  </thead>

    <tbody v-if="serv && serv.length">
    <tr v-for="o in serv" :key="o.id">

    <td>{{  o.id  }}</td>
    <td>{{  o.nombre}}</td>
    <td>{{  o.descripcion  }}</td>
    <td><img :src="o.foto" style="width: 50px;"></td>

    <div class="container d-inline w-50">
        <td class="p-2"><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit" @click="openModal(o)">
        <i class="bi bi-pencil-square"></i>
    </button></td>
    <td><button class="btn btn-danger" @click="deleteContrato(o.id)">
        <i class="bi bi-trash"></i></button></td>
    </div>
    </tr>
  </tbody>
  <tbody v-else>
        <tr>
          <td colspan="3">No hay productos disponibles.</td>
        </tr>
      </tbody>
</table>
</div>
<ModalServicios :modal="'modalCreate'" :title="'Añadir Servicio'" :op="'1'" :foto="foto"></ModalServicios>
<ModalServicios :modal="'modalEdit'" :title="'Editar Servicio'" :op="'2'"></ModalServicios>
</body>
</template>
<!--  <Foot></Foot> -->
</AuthenticatedLayout>

</template>
