<script setup>
import {useForm} from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
const props = defineProps({
    client:{type:Object, default:()=>({})},
    modal:String, title:String, op:String
});


//Formulario, difinir campos
const form =useForm({
    id:props.client.id,
    nombre:props.client.nombre,
    direccion:props.client.direccion,
    telefono:props.client.telefono,
    clasificacion:props.client.clasificacion,

});
//Funcion guardar
const save= () =>{
    //guarda el formulario,haciendo post y enviando a la ruta orders.store
    form.post(route('clients.store'),{
        onSuccess: ()=>cerrar()
    })
};
//funcion actualizar
const update = () =>{
    //Actualiza los datos, obtiene el id del elemento, envia a la ruta de actualizar, pasando el id
    var id = document.getElementById('id2').value;
    form.put(route('clients.update', id),{
        onSuccess: ()=>cerrar() //si es exitoso cierra el modal
    })
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
                        <TextInput :id="'direccion'+op" class="form-control" type="text"
                        name="nombre" v-model="form.direccion" maxlength="150" placeholder="direccion"
                       ></TextInput>
                    </div>
                    <div v-if="form.errors.direccion" class="text-sm text-danger">
                        {{ form.errors.direcccion }}
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'telefono'+op" class="form-control" type="text"
                        name="nombre" v-model="form.telefono" maxlength="100" placeholder="Telefono"
                       ></TextInput>
                    </div>
                    <div v-if="form.errors.telefono" class="text-sm text-danger">
                        {{ form.errors.descripcion }}
                    </div>



                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'clasificacion'+op" class="form-control" type="text"
                        name="clasificacion" v-model="form.clasificacion" maxlength="100" placeholder="clasificacion"
                       ></TextInput>
                    </div>
                    <div v-if="form.errors.clasificacion" class="text-sm text-danger">
                        {{ form.errors.clasificacion }}
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
