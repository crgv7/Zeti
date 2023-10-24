<script setup>
import { Head, Link } from '@inertiajs/vue3';
import {ref} from 'vue'
import {useForm} from '@inertiajs/vue3';

const form=useForm({
name:"",
email:"",
body:"",
});

const submit=()=>{
//form.post(route('contact'))
alert(' Su correo se ha enviado conrrectamente, Gracias por contactarnos')
};
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
    services: {type:Object},
});


const openModal_Map = () => {

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}



}












</script>

<template>
    <Head title="Welcome" />

<body class="fondo">


    <nav class="navbar navbar-expand-md fondo py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span>

            <img src="assets/img/foto3.png" href="" class="w-25">
        </span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

        </div>
    </nav>

    <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">

<Link
    v-if="$page.props.auth.user"
    :href="route('dashboard')"
    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
    >Dashboard</Link>

<template v-else>
    <Link
        :href="route('login')"
        class="font-semibold text-white btn btn-primary"
        >Autenticarse</Link>
</template>
</div>
    <section class="py-4 py-xl-5" style="background: url(&quot;assets/img/foto1.jpg&quot;) center / cover no-repeat; height: 500px;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <h2 class="text-uppercase fw-bold mb-3 fs-1 text-dark">Empresa de Servicios Técnicos Industriales</h2>
                        <p class="mb-4 text-dark fw-bold fs-3 fondo sombra">Satisfacer las necesidades de asistencia técnica, de construcción y montaje, de automatización y de producciones electromecánicas de la industria con oportunidad, calidad y a precios competitivos. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="padding-top: 0px;margin-top: 58px;margin-bottom: 10px;">
        <div class="row">
            <div class="col">
                <div></div><img  class="borde reveal fade-left sombra" src="assets/img/foto2.jpg" width="575" height="440" style="position: static;">
            </div>
            <div class="col">
                <div></div>
                <h1 class="fs-2">Historia</h1>
                <p   class="fs-4 "> "InnovaTech", ubicada en una pequeña ciudad llamada Pueblo Nuevo. InnovaTech era una empresa que se dedicaba a la fabricación de dispositivos electrónicos innovadores y soluciones tecnológicas para distintas industrias.

La historia de InnovaTech comenzó cuando su fundador, Eric Rivera, un ingeniero apasionado por la tecnología, decidió iniciar su propio negocio. Con un equipo de talentosos ingenieros y diseñadores, Eric estableció la empresa en un modesto local.
</p>
<p  id="myText" class="fs-4 fw-bold" style="display: none;">Al principio, InnovaTech enfrentó muchos desafíos. La competencia era feroz y el mercado estaba dominado por grandes empresas establecidas. Sin embargo, Eric y su equipo estaban decididos a hacer una diferencia con sus productos únicos y de alta calidad.

La empresa comenzó a ganar reconocimiento gracias a su enfoque en la innovación.</p>
<button id="myBtn" class="mt-1 fs-5 text-primary" onclick="mostrar()">Mostrar más</button>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5 mt-5">
        <div class="row gy-4 row-cols-2 row-cols-md-4">
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                 <svg enable-background="new 0 0 512 512" height="200px" id="ideation_1_" version="1.1" viewBox="0 0 512 512" width="200px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="ideation"><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="150.3711" x2="380.322" y1="314.2012" y2="181.439"><stop offset="0" style="stop-color:#F14D5C"/><stop offset="0.1309" style="stop-color:#F05454"/><stop offset="0.3346" style="stop-color:#ED663E"/><stop offset="0.3492" style="stop-color:#ED683C"/><stop offset="0.714" style="stop-color:#F3903F"/><stop offset="1" style="stop-color:#FDC70C"/></linearGradient><path d="M193.341,290.56c5.592,3.667,8.93,9.89,8.93,16.647v6.256c0,5.257,1.715,10.119,4.61,14.064   c-7.888,1.301-13.93,8.148-13.93,16.399v8.146c0,4.529,1.824,8.638,4.771,11.641c-2.946,3.004-4.771,7.112-4.771,11.642v8.146   c0,9.176,7.466,16.641,16.642,16.641h15.026c-0.161,1.067-0.191,2.159-0.051,3.25l2.31,17.932   c0.754,5.841,5.764,10.246,11.653,10.246h34.928c5.891,0,10.9-4.406,11.653-10.248l2.311-17.93c0.141-1.092,0.11-2.183-0.051-3.25   h15.026c9.176,0,16.641-7.465,16.641-16.641v-8.146c0-4.529-1.824-8.638-4.771-11.642c2.946-3.003,4.771-7.111,4.771-11.641v-8.146   c0-8.251-6.042-15.1-13.93-16.399c2.896-3.945,4.61-8.808,4.61-14.064v-6.256c0-6.758,3.336-12.98,8.924-16.644   c32.408-21.248,51.756-57.036,51.756-95.732c0-60.235-47.043-110.387-107.098-114.175c-33.755-2.127-66.616,10.884-90.13,35.703   c-23.521,24.827-34.744,58.345-30.793,91.961C146.33,241.938,164.905,271.913,193.341,290.56z M277.083,400.734   c0.195,0.223,0.51,0.697,0.422,1.379l-2.311,17.93c-0.112,0.869-0.858,1.525-1.735,1.525h-34.928c-0.877,0-1.623-0.656-1.735-1.525   l-2.31-17.93c-0.088-0.683,0.227-1.156,0.421-1.379c0.195-0.222,0.626-0.594,1.313-0.594h39.549   C276.458,400.141,276.888,400.513,277.083,400.734z M309.039,383.5c0,3.662-2.979,6.641-6.641,6.641H275.77h-39.549h-26.628   c-3.662,0-6.642-2.979-6.642-6.641v-8.146c0-3.662,2.979-6.642,6.642-6.642h92.806c3.662,0,6.641,2.979,6.641,6.642V383.5z    M309.039,343.927v8.146c0,3.662-2.979,6.641-6.641,6.641h-92.806c-3.662,0-6.642-2.979-6.642-6.641v-8.146   c0-3.662,2.979-6.642,6.642-6.642h16.501h59.803h16.502C306.061,337.285,309.039,340.265,309.039,343.927z M180.432,123.237   c19.947-21.056,47.241-32.806,75.714-32.806c2.17,0,4.347,0.068,6.527,0.206c54.8,3.456,97.727,49.224,97.727,104.194   c0,35.314-17.659,67.975-47.238,87.369c-8.417,5.519-13.441,14.866-13.441,25.007v6.256c0,7.621-6.201,13.822-13.823,13.822   h-59.803c-7.622,0-13.823-6.201-13.823-13.822v-6.256c0-10.14-5.026-19.489-13.445-25.01c-25.956-17.02-42.91-44.373-46.515-75.044   C148.706,176.491,158.956,145.905,180.432,123.237z" fill="url(#SVGID_1_)"/><path d="M234.751,110.064l-2.676-9.635c-3.107,0.863-6.204,1.888-9.204,3.047l3.604,9.328   C229.173,111.762,231.957,110.84,234.751,110.064z" fill="#F2893E"/><path d="M218.818,116.182l-4.461-8.95c-19.583,9.76-35.655,25.962-45.257,45.621l8.986,4.389   C186.728,139.547,201.193,124.966,218.818,116.182z" fill="#EE713D"/></g></svg>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0 fst-italic fs-2">Innovacion</h2>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <svg enable-background="new 0 0 512 512" height="200px" id="development_1_" version="1.1" viewBox="0 0 512 512" width="300px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="development"><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="116.0244" x2="395.9758" y1="336.8145" y2="175.1844"><stop offset="0" style="stop-color:#F14D5C"/><stop offset="0.1309" style="stop-color:#F05454"/><stop offset="0.3346" style="stop-color:#ED663E"/><stop offset="0.3492" style="stop-color:#ED683C"/><stop offset="0.714" style="stop-color:#F3903F"/><stop offset="1" style="stop-color:#FDC70C"/></linearGradient><path d="M128.279,299.373c1.876,5.521,4.138,10.977,6.724,16.215c2.491,5.045,1.465,11.137-2.554,15.156   l-0.06,0.059c-9.02,9.076-9.004,23.799,0.05,32.854l15.905,15.904c9.071,9.07,23.831,9.07,32.903,0l0.045-0.045   c4.019-3.988,10.089-5.004,15.121-2.52c5.238,2.586,10.693,4.85,16.214,6.725c5.3,1.801,8.861,6.826,8.861,12.508   c0,12.828,10.437,23.266,23.266,23.266h22.493c12.83,0,23.266-10.438,23.266-23.266c0-5.682,3.563-10.707,8.861-12.508   c5.521-1.875,10.977-4.139,16.215-6.725c5.027-2.48,11.092-1.471,15.111,2.51l0.055,0.055c9.072,9.07,23.832,9.07,32.902,0   l15.904-15.904c9.055-9.055,9.072-23.777,0.051-32.854l-0.061-0.059c-4.018-4.02-5.045-10.111-2.553-15.158   c2.584-5.234,4.846-10.691,6.723-16.213c1.801-5.301,6.828-8.861,12.508-8.861c12.83,0,23.266-10.438,23.266-23.266v-22.493   c0-12.829-10.436-23.266-23.266-23.266c-5.68,0-10.707-3.561-12.508-8.861c-1.875-5.522-4.139-10.978-6.723-16.215   c-2.492-5.046-1.465-11.137,2.553-15.156l0.061-0.06c9.02-9.076,9.004-23.798-0.051-32.852l-15.904-15.905   c-9.07-9.07-23.832-9.071-32.902,0l-0.045,0.045c-4.021,3.988-10.092,5.001-15.121,2.518c-5.238-2.586-10.693-4.848-16.215-6.724   c-5.299-1.8-8.861-6.827-8.861-12.508c0-12.829-10.436-23.266-23.266-23.266h-22.493c-12.829,0-23.266,10.437-23.266,23.266   c0,5.681-3.561,10.708-8.861,12.508c-5.521,1.875-10.976,4.138-16.214,6.724c-5.027,2.482-11.092,1.472-15.112-2.51l-0.053-0.054   c-9.071-9.07-23.832-9.07-32.903,0l-15.905,15.905c-9.055,9.055-9.072,23.777-0.05,32.852l0.06,0.06   c4.019,4.019,5.045,10.11,2.554,15.156c-2.585,5.236-4.847,10.692-6.724,16.214c-1.8,5.3-6.827,8.861-12.508,8.861   c-12.829,0-23.266,10.437-23.266,23.266v22.493c0,12.828,10.437,23.266,23.266,23.266   C121.452,290.512,126.479,294.072,128.279,299.373z M115.771,231.488c9.966,0,18.798-6.287,21.977-15.645   c1.736-5.11,3.829-10.158,6.222-15.004c4.379-8.871,2.61-19.552-4.4-26.604l-0.059-0.06c-5.172-5.172-5.172-13.588,0-18.76   l15.905-15.905c5.157-5.158,13.54-5.173,18.717-0.043l0.053,0.053c7.051,7.051,17.762,8.84,26.654,4.45   c4.848-2.393,9.896-4.486,15.004-6.222c9.357-3.179,15.644-12.01,15.644-21.977c0-7.314,5.951-13.266,13.266-13.266h22.493   c7.314,0,13.266,5.951,13.266,13.266c0,9.966,6.287,18.798,15.645,21.977c5.109,1.735,10.156,3.829,15.004,6.222   c8.893,4.39,19.604,2.601,26.654-4.45l0.043-0.042c5.174-5.14,13.566-5.129,18.727,0.033l15.906,15.905   c5.172,5.172,5.172,13.588,0,18.76l-0.061,0.06c-7.01,7.051-8.777,17.732-4.398,26.604c2.393,4.846,4.484,9.895,6.221,15.005   c3.18,9.357,12.012,15.644,21.977,15.644c7.314,0,13.266,5.951,13.266,13.266V251h-65.488c-2.602-46.289-41.078-83.15-88.006-83.15   c-46.927,0-85.403,36.862-88.004,83.15h-65.49v-6.247C102.505,237.439,108.457,231.488,115.771,231.488z M334.15,256   c0,43.091-35.059,78.15-78.151,78.15c-43.091,0-78.149-35.059-78.149-78.15c0-43.093,35.058-78.151,78.149-78.151   C299.092,177.85,334.15,212.908,334.15,256z M102.505,267.246V261h65.49c2.601,46.289,41.077,83.15,88.004,83.15   c46.928,0,85.405-36.861,88.006-83.15h65.488v6.246c0,7.314-5.951,13.266-13.266,13.266c-9.965,0-18.797,6.287-21.977,15.645   c-1.736,5.109-3.828,10.158-6.221,15.004c-4.379,8.871-2.609,19.553,4.398,26.604l0.061,0.061c5.172,5.172,5.172,13.588,0,18.76   l-15.906,15.904c-5.156,5.158-13.539,5.172-18.717,0.045l-0.053-0.053c-7.051-7.051-17.76-8.84-26.654-4.451   c-4.848,2.395-9.895,4.486-15.004,6.223c-9.357,3.178-15.645,12.01-15.645,21.977c0,7.314-5.951,13.266-13.266,13.266h-22.493   c-7.314,0-13.266-5.951-13.266-13.266c0-9.967-6.287-18.799-15.644-21.977c-5.108-1.736-10.157-3.828-15.004-6.223   c-3.247-1.602-6.736-2.381-10.201-2.381c-6.024,0-11.977,2.355-16.453,6.832l-0.042,0.041c-5.175,5.139-13.567,5.129-18.727-0.033   l-15.905-15.904c-5.172-5.172-5.172-13.588,0-18.76l0.059-0.061c7.01-7.051,8.779-17.732,4.4-26.604   c-2.393-4.846-4.486-9.895-6.222-15.004c-3.179-9.357-12.011-15.645-21.977-15.645   C108.457,280.512,102.505,274.561,102.505,267.246z" fill="url(#SVGID_1_)"/></g></svg>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0 fs-2 fst-itali">Eficiencia operativa</h2>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                    <svg enable-background="new 0 0 91 91" height="200px" id="Layer_1" version="1.1" viewBox="0 0 91 91" width="150px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><circle cx="45.397" cy="46.069" fill="#E0E0E0" r="33.948"/><g><g><path d="M45.533,90.489c-11.95,0-23.185-4.653-31.635-13.104C5.449,68.938,0.795,57.704,0.795,45.754     S5.449,22.57,13.898,14.121C22.347,5.672,33.581,1.02,45.531,1.02s23.186,4.652,31.635,13.102s13.103,19.683,13.103,31.633     c0,11.949-4.653,23.183-13.103,31.632C68.717,85.836,57.482,90.489,45.533,90.489z M45.531,6.045     c-10.607,0-20.58,4.13-28.08,11.629c-7.5,7.5-11.631,17.473-11.631,28.08s4.131,20.579,11.631,28.079     c7.502,7.501,17.475,11.632,28.082,11.632c10.606,0,20.579-4.131,28.08-11.632c7.5-7.5,11.63-17.473,11.63-28.079     c0-10.607-4.13-20.58-11.63-28.08C66.112,10.175,56.14,6.045,45.531,6.045z" fill="#454B53"/><g><polygon fill="#7BA7C9" points="54.043,54.268 37.018,37.246 65.094,26.191     "/><path d="M54.043,56.78c-0.659,0-1.301-0.26-1.776-0.736L35.242,39.022c-0.6-0.599-0.856-1.459-0.684-2.288      c0.172-0.829,0.751-1.516,1.539-1.826l28.075-11.055c0.934-0.367,1.991-0.145,2.697,0.562c0.707,0.707,0.928,1.766,0.562,2.696      L56.381,55.188c-0.311,0.788-0.997,1.367-1.826,1.54C54.385,56.763,54.213,56.78,54.043,56.78z M41.506,38.18l11.603,11.602      l7.532-19.136L41.506,38.18z" fill="#454B53"/></g><g><polygon fill="#F4767A" points="54.046,54.268 37.021,37.244 25.971,65.317     "/><path d="M25.971,67.83c-0.654,0-1.297-0.256-1.777-0.736c-0.707-0.707-0.928-1.767-0.561-2.696l11.051-28.073      c0.31-0.788,0.996-1.367,1.825-1.54c0.83-0.171,1.69,0.084,2.288,0.684l17.025,17.023c0.6,0.599,0.856,1.459,0.684,2.288      s-0.752,1.516-1.54,1.826l-28.075,11.05C26.592,67.772,26.279,67.83,25.971,67.83z M37.955,41.731l-7.531,19.134l19.135-7.531      L37.955,41.731z" fill="#454B53"/></g></g></g></g></svg>
                    <div class="px-3">
                        <h2 class="fw-bold mb-0 fst-itali fs-2">Orientación al cliente</h2>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">

                    <svg enable-background="new 0 0 512 512" height="200px" id="Presentation" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="219.0483" x2="219.0483" y1="355.3086" y2="113.3218"><stop offset="0" style="stop-color:#FFFFFF"/><stop offset="0.3279" style="stop-color:#FCFCFC"/><stop offset="0.5302" style="stop-color:#F4F4F4"/><stop offset="0.6984" style="stop-color:#E5E5E5"/><stop offset="0.848" style="stop-color:#D1D1D1"/><stop offset="0.9839" style="stop-color:#B7B7B7"/><stop offset="1" style="stop-color:#B3B3B3"/></linearGradient><rect fill="url(#SVGID_1_)" height="241.987" width="376.201" x="30.947" y="113.321"/><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_2_" x1="-960.9961" x2="401.6442" y1="918.9365" y2="132.2158"><stop offset="0.699" style="stop-color:#00FFFF"/><stop offset="0.7084" style="stop-color:#09FAFC"/><stop offset="0.8182" style="stop-color:#71C4DA"/><stop offset="0.9065" style="stop-color:#BD9DC1"/><stop offset="0.9689" style="stop-color:#ED84B2"/><stop offset="1" style="stop-color:#FF7BAC"/></linearGradient><polygon fill="url(#SVGID_2_)" points="366.066,190.743 366.066,142.792 318.115,142.792 297.758,163.15 331.577,163.14   268.787,225.93 245.959,203.101 189.324,259.736 156.656,227.069 64.958,318.767 79.101,332.909 156.656,255.353 189.324,288.021   245.959,231.385 268.787,254.214 345.719,177.283 345.709,211.101 "/><path d="M500.451,431.879H313.845v-62.531c0-26.878,21.788-48.666,48.667-48.666h89.273  c26.878,0,48.666,21.788,48.666,48.666V431.879z" fill="#3F5EAB"/><circle cx="407.148" cy="244.627" fill="#3F5EAB" r="62.761"/><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_3_" x1="408.3857" x2="428.0454" y1="106.5518" y2="86.8921"><stop offset="0" style="stop-color:#00FFFF"/><stop offset="1" style="stop-color:#FF7BAC"/></linearGradient><path d="M417.547,80.122h-2.392v33.2h2.392c4.971,0,9-4.029,9-9v-15.2  C426.547,84.151,422.518,80.122,417.547,80.122z" fill="url(#SVGID_3_)"/><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_4_" x1="106.1021" x2="317.8658" y1="202.603" y2="-9.1608"><stop offset="0" style="stop-color:#00FFFF"/><stop offset="1" style="stop-color:#FF7BAC"/></linearGradient><path d="M20.548,80.122c-4.971,0-9,4.029-9,9v15.2c0,4.971,4.029,9,9,9h2.392v-33.2h8.007v33.2h376.201v-33.2  H20.548z" fill="url(#SVGID_4_)"/></svg>


                    <div class="px-3">
                        <h2 class="fw-bold mb-0 fst-itali fs-2">Cultura corporativa</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5 mt-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="fs-2"> Servicios</h2>
                <p class="w-lg-50 fs-4 mt-4 fw-bold"> La empresa ofrece variedad de servicios, con multiples opciones, el cliente es libre de elegir la mejor opcion y nosotros llevamos a cabo el proceso, consulte cada servicio, estamos a su disposicon</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">



            <div class="col" v-for="o in services" :key="o.id">
                <div  id="scroll-content" class="card d-flex p sombra reveal fade-left"  style="width: 25rem; min-height: 38rem;" >
                 <img :src=o.foto class="card-img-top"  style="max-height: 15rem;" alt="...">
                        <div class="card-body d-flex flex-column">
                    <h5 class="card-title fs-3">{{o.nombre}}</h5>
                     <p class="card-text fs-6">{{o.descripcion}}</p>

                    <Link :href="`/ShowService/${o.id}`" class="btn btn-primary d-flex justify-content-center mt-3  mt-auto align-self-end w-100">Ver</Link>
                 </div>
            </div>
            </div>

        </div>
        <footer class="text-center">
            <div class="container text-muted py-4 py-lg-5">
                <section class="position-relative py-4 py-xl-5">
                    <div class="container position-relative">
                        <div class="row d-flex justify-content-center">
                            <div class="row w-bold fs-3 sombra mb-4 w-50">
                                <div class="col-10 d-flex justify-content-center">
                                    <h1 class="fw-bold fs-2 ms-5 p-1">Donde puede encontrarnos </h1>


                                </div>
                                <div class="col-2  d-flex justify-content-start">
                                    <img class="me-5" style="width: 50px;" src="assets/img/location.ico">
                                </div>




                            </div>

                            <div class="container d-flex justify-content-center reveal fade-left">


                                <img id="myImg" class="img-fluid sombra" width="800" height="531" title="Ubicacion de la empresa" src="assets/img/foto4.png" style="border-radius: 12px;" @click="openModal_Map()"></div>

                        </div>
                    </div>
                </section>
                <ul class="list-inline">
                    <li class="list-inline-item me-4"><a class="link-secondary text-dark" href="#">Web design</a></li>
                    <li class="list-inline-item me-4"><a class="link-secondary text-dark" href="#">Development</a></li>
                    <li class="list-inline-item"><a class="link-secondary text-dark" href="#">Hosting</a></li>
                </ul>
                <ul class="list-inline">
                    <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></li>
                    <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></li>
                </ul>
                <p class="mb-0">Copyright © 2023 Brand</p>
            </div>
        </footer>
    </div>

    <div id="myModal" class="modal_map">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>



</body>
</template>

