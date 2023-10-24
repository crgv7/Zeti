<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Swal from 'sweetalert2';
import { Head } from '@inertiajs/vue3';
import {useForm} from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'
import ModalContratos from '@/Components/ModalContratos.vue';
import { ref,watch } from "vue";
import { router } from "@inertiajs/vue3";



const form = useForm({});
const props = defineProps({
    contracts: {type:Object},
    services: {type:Object},
    clients: {type:Object},

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
            form.delete(route('contracts.destroy', id))
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
        }
      })
}

const clientNombre=(id,clients)=>{
    for (let i = 0; i < clients.length; i++) {
        if (clients[i].id==id){
           return clients[i].nombre
        }
    }
}

const serviceNombre=(id,services)=>{
    for (let i = 0; i < services.length; i++) {
        if (services[i].id==id){
           return services[i].nombre
        }
    }
}
// esta funcion es para que cuando se de le en el boton actualizar  obtenga los datos en los campos para modificar
const openModal = (contrato) => {
    document.getElementById('id2').value = contrato.id;
    document.getElementById('codigo_de_UEB2').value = contrato.codigo_de_UEB;
    document.getElementById('Year2').value = contrato.Year;
    document.getElementById('No_contrato2').value = contrato.No_contrato;
    document.getElementById('Tipo_de_contrato2').value = contrato.Tipo_de_contrato;
    document.getElementById('Actividad2').value = contrato.Actividad
    document.getElementById('Centro_de_Negocio2').value = contrato.Centro_de_Negocio;
    document.getElementById('Oferente2').value = contrato.Oferente;
    document.getElementById('Monto_de_Contrato_en_CUP2').value = contrato.Monto_de_Contrato_en_CUP;
    document.getElementById('Fecha_de_Inicio2').value = contrato.Fecha_de_Inicio;
    document.getElementById('Fecha_Fin2').value = contrato.Fecha_Fin;
    document.getElementById('Fecha_Real_de_Inicio2').value = contrato.Fecha_Real_de_Inicio;
    document.getElementById('Vigencia2').value = contrato.Vigencia;
    document.getElementById('Organismo2').value = contrato.Organismo;
    document.getElementById('Valor_Ejecutado2').value = contrato.Valor_Ejecutado;
    document.getElementById('Monto_disponible2').value = contrato.Monto_disponible;
    document.getElementById('clients_id2').value = contrato.clients_id;
    document.getElementById('services_id2').value = contrato.services_id;

}

const search=ref('');
watch(search, value=>{
router.get('/contracts',{search:value},{preserveState:true, replace:true});
})

/*const search=()=>{
  //  this.$inertia.replace(this.$route('contracts.index', {term:this.term}))
}
*/
</script>

<template>
<Head title="Contratos"></Head>

<AuthenticatedLayout>
    <template #header>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">




      <div class="d-grid row mx-auto mt-5 d-flex justify-center mb-3">
     <div class="col-4 d-flex justify-content-center">
        <div>
        <label class="me-2">Buscar</label>
        <input id="search" type="text" v-model="search">
     </div>

     </div>


        <div class=" col-8 d-flex justify-content-start">

          <button class="btn bg-primary w-25" data-bs-toggle="modal" data-bs-target="#modalCreate">
            <i class="bi bi-plus-circle-fill"></i>Añadir</button>
          </div>
      </div>
      <div class="container table-responsive  ">
        <table class="table table-bordered">
  <thead>

    <tr>
      <th scope="col">id</th>
      <th scope="col">codigo de UEB</th>
      <th scope="col">Year</th>
      <th scope="col">No contrato</th>
      <th scope="col">Tipo de contrato</th>
      <th scope="col">Actividad</th>
      <th scope="col">Centro de Negocio</th>
      <th scope="col">Oferente</th>
      <th scope="col">Monto de Contrato en CUP</th>
      <th scope="col">Fecha de Inicio</th>
      <th scope="col">Fecha Fin</th>
      <th scope="col">Fecha Real de Inicio</th>
      <th scope="col">Vigencia</th>
      <th scope="col">Organismo</th>
      <th scope="col">Valor Ejecutado</th>
      <th scope="col">Monto disponible</th>
      <th scope="col">Cliente</th>
      <th scope="col">Servicio</th>

    </tr>
  </thead>

    <tbody v-if="contracts && contracts.length">
    <tr v-for="o in contracts" :key="o.id">

    <td>{{  o.id  }}</td>
    <td>{{  o.codigo_de_UEB}}</td>
    <td>{{  o.Year}}</td>
    <td>{{  o.No_contrato  }}</td>
    <td>{{  o.Tipo_de_contrato }}</td>
    <td>{{  o.Actividad}}$</td>
    <td>{{  o.Centro_de_Negocio }}</td>
    <td>{{  o.Oferente }}</td>
    <td>{{  o.Monto_de_Contrato_en_CUP}}$</td>
    <td>{{  o.Fecha_de_Inicio}}</td>
    <td>{{  o.Fecha_Fin }}</td>
    <td>{{  o.Fecha_Real_de_Inicio}}$</td>
    <td>{{  o.Vigencia}}</td>
    <td>{{  o.Organismo }}</td>
    <td>{{  o.Valor_Ejecutado}}$</td>
    <td>{{  o.Monto_disponible}}$</td>
    <td>{{ clientNombre(o.clients_id, props.clients) }}</td>
    <td>{{ serviceNombre(o.services_id, props.services)}}</td>

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

<div class="p-5 d-flex justify-end">

</div>


</div>
<ModalContratos :modal="'modalCreate'" :title="'Crear Registro de Contrato'" :op="'1'" :clients=clients :services=services></ModalContratos>
<ModalContratos :modal="'modalEdit'" :title="'Editar Registro de Contrato'" :op="'2'" :clients=clients :services=services></ModalContratos>

</template>
<!--  <Foot></Foot> -->
</AuthenticatedLayout>

</template>
