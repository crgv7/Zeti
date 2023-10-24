<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Swal from 'sweetalert2';
import { Head } from '@inertiajs/vue3';
import {useForm} from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'
import ModalClients from '@/Components/ModalClients.vue';



const form = useForm({});
const props = defineProps({
    clients: {type:Object}
});

const deleteClients= (id) => {
    Swal.fire({
        title: 'Estas seguro?',
        text: "No hay vuelta atras",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Desea elimninar!'
      }).then((result) => {
        if (result.isConfirmed) {
            form.delete(route('clients.destroy', id))
            Swal.fire(
                'Eliminado!',
                'El dato ha sido eliminado.',
                'exitosamente'
              )
        }
      })
}


// esta funcion es para que cuando se de le en el boton actualizar  obtenga los datos en los campos para modificar
const openModal = (clients) => {
    document.getElementById('id2').value = clients.id;
    document.getElementById('codigo_de_UEB2').value = clients.nombre;
    document.getElementById('Year2').value = clients.direccion;
    document.getElementById('No_contrato2').value = clients.telefono;
    document.getElementById('No_contrato2').value = clients.clasificacion;


}

</script>

<template>
<Head title="Contratos"></Head>

<AuthenticatedLayout>
    <template #header>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



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
      <th scope="col">direccion</th>
      <th scope="col">telefono</th>
      <th scope="col">clasificacion</th>


    </tr>
  </thead>

    <tbody v-if="clients && clients.length">
    <tr v-for="o in clients" :key="o.id">

    <td>{{  o.id  }}</td>
    <td>{{  o.nombre}}</td>
    <td>{{  o.direccion}}</td>
    <td>{{  o.telefono}}</td>
    <td>{{  o.clasificacion}}</td>

    <div class="container d-inline w-50">
        <td class="p-2"><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit" @click="openModal(o)">
        <i class="bi bi-pencil-square"></i>
    </button></td>
    <td><button class="btn btn-danger" @click="deleteClients(o.id)">
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
<ModalClients :modal="'modalCreate'" :title="'Crear Clientes'" :op="'1'"></ModalClients>
<ModalClients :modal="'modalEdit'" :title="'Editar Clientes'" :op="'2'"></ModalClients>

</template>
<!--  <Foot></Foot> -->
</AuthenticatedLayout>

</template>
