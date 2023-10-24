<script setup>
import {useForm} from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import { router } from '@inertiajs/vue3'

const props = defineProps({
    serv:{type:Object, default:()=>({})},
    modal:String, title:String, op:String
});



//Formulario, difinir campos
const form =useForm({
    id:props.serv.id,
    nombre:props.serv.nombre,
    descripcion:props.serv.descripcion,
    foto:null


});
//Funcion guardar
const save= () =>{
    //guarda el formulario,haciendo post y enviando a la ruta orders.store
    form.post(route('services.store'),{
        onSuccess: ()=>cerrar()
    })
};
//funcion actualizar
const update = () =>{
    var id = document.getElementById('id2').value;
    router.post(`/services/${id}`, {
    _method: 'put',
     nombre: form.nombre,
     descripcion:form.descripcion,
     foto: form.foto,


   },{onSuccess: ()=>cerrar()})


    //Actualiza los datos, obtiene el id del elemento, envia a la ruta de actualizar, pasando el id

};
//funcion cerrar del boton
const cerrar = () =>{
        form.reset();
        document.querySelector('#cerrar'+props.op).click();
    };


</script>
<template>
  <div class="modal fade" :id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content fondo">
                <div class="modal-header">
                    <label class="h5">{{ title }}</label>
                    <button class="btn-close" type="button" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <!-- si la op =1 llama a la funcion save() si no llama a la funcion update-->
                <form @submit.prevent="(op === '1' ? save() : update())">
                    <TextInput :id="'id'+op" type="hidden" name="id" v-model="form.id">
                    </TextInput>

                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'nombre'+op" class="form-control" type="text"
                        name="nombre" v-model="form.nombre" maxlength="100" placeholder="Nombre"
                       ></TextInput>
                    </div>
                    <div v-if="form.errors.nombre" class="text-sm text-danger">
                        {{ form.errors.nombre }}
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <input :id="'foto'+op" class="form-control" type="file"
                        name="foto" @input="form.foto=$event.target.files[0]" maxlength="80" placeholder="foto"
                        required>
                    </div>
                    <div v-if="form.errors.foto" class="text-sm text-danger">
                        {{ form.errors.foto }}
                    </div>

                    <div class="mb-4 row d-flex justify-content-center">
                        <label> Imagen</label>
                        <img  :id="'fotomin'+op" style="width: 150px;">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextArea :id="'descripcion'+op" class="form-control" type="textarea"
                        name="descripcion" v-model="form.descripcion" maxlength="500" placeholder="descripcion"
                        required></TextArea>
                    </div>
                    <div v-if="form.errors.descripcion" class="text-sm text-danger">
                        {{ form.errors.descripcion }}
                    </div>






                    <div class="d-grid mx-auto">
                        <button class="btn btn-success" :disabled="form.processing">
                        <i class="fa-solid fa-floppy-disk"></i> Guardar
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn  bg-danger text-light" type="submit" :id="'cerrar'+op"
                data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
        </div>
    </div>



</template>
