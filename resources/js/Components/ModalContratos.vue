<script setup>
import {useForm} from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
const props = defineProps({
    contract:{type:Object, default:()=>({})},
    clients:{type:Object, default:()=>({})},
    services:{type:Object, default:()=>({})},
    modal:String, title:String, op:String
});


//Formulario, difinir campos
const form =useForm({
    id:props.contract.id,
    codigo_de_UEB:props.contract.codigo_de_UEB,
    Year:props.contract.Year,
    No_contrato:props.contract.No_contrato,
    Tipo_de_contrato:props.contract.Tipo_de_contrato,
    Actividad:props.contract.Actividad,
    Centro_de_Negocio:props.contract.Centro_de_Negocio,
    Oferente:props.contract.Oferente,
    Monto_de_Contrato_en_CUP:props.contract.Monto_de_Contrato_en_CUP,
    Fecha_de_Inicio:props.contract.Fecha_de_Inicio,
    Fecha_Fin:props.contract.Fecha_Fin,
    Fecha_Real_de_Inicio:props.contract.Fecha_Real_de_Inicio,
    Vigencia:props.contract.Vigencia,
    Organismo:props.contract.Organismo,
    Valor_Ejecutado:props.contract.Valor_Ejecutado,
    Monto_disponible:props.contract.Monto_disponible,
    clients_id:props.contract.clients_id,
    services_id:props.contract.services_id,
});
//Funcion guardar
const save= () =>{
    //guarda el formulario,haciendo post y enviando a la ruta orders.store
    form.post(route('contracts.store'),{
        onSuccess: ()=>cerrar()
    })
};
//funcion actualizar
const update = () =>{
    //Actualiza los datos, obtiene el id del elemento, envia a la ruta de actualizar, pasando el id
    var id = document.getElementById('id2').value;
    form.put(route('contracts.update', id),{
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
        <div class="modal-dialog ml-2">
            <div class="modal-content fondo" style="width: 265%;">
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

                    <div class="container">
                        <div class="row">
                              <div class="col">

                                <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'codigo_de_UEB'+op" class="form-control" type="text"
                        name="codigo_de_UEB" v-model="form.codigo_de_UEB" maxlength="100" placeholder="Codigo_UEB"
                       ></TextInput>
                    </div>
                    <div v-if="form.errors.codigo_de_UEB" class="text-sm text-danger">
                        {{ form.errors.codigo_de_UEB }}
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'No_contrato'+op" class="form-control" type="text"
                        name="No_contrato" v-model="form.No_contrato" maxlength="80" placeholder="No. contrato"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.No_contrato" class="text-sm text-danger">
                        {{ form.errors.No_contrato }}
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Actividad'+op" class="form-control" type="text"
                        name="Actividad" v-model="form.Actividad" maxlength="80" placeholder="Actividad"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Actividad" class="text-sm text-danger">
                        {{ form.errors.Actividad }}
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Oferente'+op" class="form-control" type="text"
                        name="Oferente" v-model="form.Oferente" maxlength="80" placeholder="Oferente"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Oferente" class="text-sm text-danger">
                        {{ form.errors.Oferente }}
                    </div>




                    <div class="row d-flex justify-content-start">
                        <div class="row">
                            <label class="mb-1">Fecha de Inicio</label>
                        </div>
                        <div class="input-group ">
                        <input :id="'Fecha_de_Inicio'+op" v-model="form.Fecha_de_Inicio" name="Fecha_de_Inicio"  type="date"  min="2018-01-01" max="2030-12-31" required />
                    </div>
                    <div v-if="form.errors.Fecha_de_Inicio" class="text-sm text-danger">
                        {{ form.errors.Fecha_de_Inicio }}
                    </div>

                    </div>



                    <div class="row d-flex justify-content-start mt-1 mb-3">
                        <div class=" row me-5">
                            <label class="mb-1">Fecha Real de Inicio</label>
                        </div>

                        <div class="input-group">
                        <input :id="'Fecha_Real_de_Inicio'+op"  name="Fecha_Real_de_Inicio" v-model="form.Fecha_Real_de_Inicio" type="date"  min="2018-01-01" max="2030-12-31" required />
                    </div>

                    <div v-if="form.errors.Fecha_Real_de_Inicio" class="text-sm text-danger">
                        {{ form.errors.Fecha_Real_de_Inicio }}
                    </div>
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Organismo'+op" class="form-control" type="text"
                        name="Organismo" v-model="form.Organismo" maxlength="80" placeholder="Organismo"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Organismo" class="text-sm text-danger">
                        {{ form.errors.Organismo }}
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Monto_disponible'+op" class="form-control" type="text"
                        name="Monto_disponible" v-model="form.Monto_disponible" maxlength="80" placeholder="Monto Disponible"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Monto_disponible" class="text-sm text-danger">
                        {{ form.errors.Monto_disponible }}
                    </div>


                    <!--end col-->
                              </div>
                              <div class="col">

                                <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Year'+op" class="form-control" type="text"
                        name="Year" v-model="form.Year" maxlength="80" placeholder="Year"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Year" class="text-sm text-danger">
                        {{ form.errors.Year }}
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Tipo_de_contrato'+op" class="form-control" type="text"
                        name="Tipo_de_contrato" v-model="form.Tipo_de_contrato" maxlength="80" placeholder="Tipo de contrato"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Tipo_de_contrato" class="text-sm text-danger">
                        {{ form.errors.Tipo_de_contrato }}
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Centro_de_Negocio'+op" class="form-control" type="text"
                        name="Centro_de_Negocio" v-model="form.Centro_de_Negocio" maxlength="80" placeholder="Centro de negocio"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Centro_de_Negocio" class="text-sm text-danger">
                        {{ form.errors.Centro_de_Negocio }}
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Monto_de_Contrato_en_CUP'+op" class="form-control" type="text"
                        name="Monto_de_Contrato_en_CUP" v-model="form.Monto_de_Contrato_en_CUP" maxlength="80" placeholder="Monto de Contrato en CUP"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Monto_de_Contrato_en_CUP" class="text-sm text-danger">
                        {{ form.errors.Monto_de_Contrato_en_CUP }}
                    </div>

                <div class="row d-flex justify-content-start">
                    <div class="row me-5">
                        <label class="mb-1">Fecha Fin</label>
                    </div>
                    <div class="input-group">
                        <input :id="'Fecha_Fin'+op"  name="Fecha_Fin" type="date" v-model="form.Fecha_Fin" min="2018-01-01" max="2030-12-31" required />
                    </div>
                    <div v-if="form.errors.Fecha_Fin" class="text-sm text-danger">
                        {{ form.errors.Fecha_Fin }}
                    </div>
                </div>


                 <div class="row d-flex justify-content-start">
                    <div class="row me-5">
                        <label>Vigencia</label>
                    </div>

                    <div class="input-group mt-1 mb-3">
                        <input :id="'Vigencia'+op"  name="Vigencia"  type="date" v-model="form.Vigencia"  min="2018-01-01" max="2030-12-31" required />
                    </div>
                    <div v-if="form.errors.Vigencia" class="text-sm text-danger">
                        {{ form.errors.Vigencia}}
                    </div>

                 </div>





                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <TextInput :id="'Valor_Ejecutado'+op" class="form-control" type="text"
                        name="Valor_Ejecutado" v-model="form.Valor_Ejecutado" maxlength="80" placeholder="Valor ejecutado"
                        required></TextInput>
                    </div>
                    <div v-if="form.errors.Valor_Ejecutado" class="text-sm text-danger">
                        {{ form.errors.Valor_Ejecutado }}
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <select
                        :id="'clients_id'+op" class="form-control" type="text"
                        name="clients_id" v-model="form.clients_id" maxlength="80" placeholder="client"
                        required> <option v-for="option in clients" :key="option.id" :value="option.id">
                        {{ option.nombre }}
                        </option></select>
                    </div>
                    <div v-if="form.errors.clients_id" class="text-sm text-danger">
                        {{ form.errors.clients_id}}
                    </div>


                    <div class="input-group mb-3">
                        <span class="input-group-text"></span>
                        <select
                        :id="'services_id'+op" class="form-control" type="text"
                        name="services_id" v-model="form.services_id" maxlength="80" placeholder="client"
                        required> <option v-for="option in services" :key="option.id" :value="option.id">
                        {{ option.nombre }}
                        </option></select>
                    </div>
                    <div v-if="form.errors.services_id" class="text-sm text-danger">
                        {{ form.errors.services_id}}
                    </div>

                </div>
            </div>
        </div>
                <div class="d-grid mx-auto d-flex justify-content-end mt-4">
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
