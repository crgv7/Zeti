<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" type="image/png" href="assets/img/foto3.png"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
        <link rel="stylesheet" href="assets/css/Projects-Grid-images.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@animxyz/core">
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased fondo">
        @inertia
    </body>




<script>


function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);


// mostar texto

function mostrar() {
  var moreText = document.getElementById("myText");
  var btnText = document.getElementById("myBtn");
 console.log(moreText);
  if (moreText.style.display == "none") {
    moreText.style.display = "inline";
    btnText.innerHTML = "Mostrar menos";
  } else {
    btnText.innerHTML = "Mostrar mas";
    moreText.style.display = "none";

  }
}





</script>

</html>
