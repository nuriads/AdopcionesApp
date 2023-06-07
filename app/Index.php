<?php
//Para que redirija al carrusel directamente si la ventana está en index.php
if($_SERVER['REQUEST_URI']=='/AdopcionesApp_3.0/app/'){
  header('location:./content/inicio/carrusel_inicio.php');
}

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link id="estilos" rel="stylesheet" href="../assets/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/menu-usuario.js"></script>
  <script src="./js/carrusel-animales.js"></script>


  <title>Pagina principal Adopciones</title>
</head>

<header>
  <!--Menú---->
 
  <nav id="fondo-menu" class="navbar navbar-expand-lg ">
    <div class="container-fluid ">
      <img id="logomenu" src="" alt="Logo de Adopciones" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a id="inicio" class="nav-link" aria-current="page" href="carrusel_inicio.php">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="mascotasDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Mascotas</a>
            <ul class="dropdown-menu" aria-labelledby="mascotasDropdown">
              <li><a id="gatos" class="dropdown-item text-dark" href="">Gatos</a></li>
              <li><a id="perros" class="dropdown-item text-dark" href="">Perros</a></li>
              <li><a id="hurones" class="dropdown-item text-dark" href="">Hurones</a></li>
              <li><a id="otros" class="dropdown-item text-dark" href="">Otros</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="mascotasDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">Colabora</a>
            <ul class="dropdown-menu" aria-labelledby="mascotasDropdown">
              <li><a id="adopta" class="dropdown-item text-dark" href="">Estoy interesado/a en adoptar</a></li>
              <li><a id="abuelitos" class="dropdown-item text-dark" href="">Adopta un abuelito</a></li>
              <li><a id="voluntariado" class="dropdown-item text-dark" href="">Voluntariado</a></li>
              <li><a id="registroRef" class="dropdown-item text-dark" href="">Soy un refugio o asociación</a></li>
              <li><a id="donativos" class="dropdown-item text-dark" href="">Donativos</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a id="blog" class="nav-link" aria-current="page" href="">Blog</a>
          </li>
        </ul>
        <div class="row">
          <div class="col-auto">
            <!-- Menú aquí -->
          </div>
        </div>
      </div>
      <!--Barra de búsqueda-->
      <div class="row ms-auto me-2">
        <form class="form-inline" action='./helpers/busqueda.php' method='GET'>
          <input class='search' class="form-control mr-sm-2" type="search" placeholder="Search" name='query' aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" id="boton-busqueda" value="Buscar" type="submit">Buscar</button>

        </form>
      </div>






      <!--Menú del usuario-->
      <div class="user-container" id="user-menu">
        <a id="registro" href="#" class="modal-link" data-bs-toggle="modal" data-bs-target="#formularioModal"><img id="fotouser" src="" alt="Foto del usuario" id="user-img"></a>
        <div class="user-dropdown" id="user-menu">
          <ul>
            <li><a id="mi_perfil" href="">Mi perfil</a></li>
            <li><a id="conf_usu" href="">Configuración</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle">Más opciones</a>
              <ul class="dropdown-menu">
                <li><a href="#">Opción 1</a></li>
                <li><a href="#">Opción 2</a></li>
                <li><a href="#">Opción 3</a></li>
              </ul>
            </li>
            <li><a id="cerrar_sesion" href="">Cerrar sesión</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

</header>
<body>

<?php 
// Ruta actual de la ventana
$rutaActual = $_SERVER['REQUEST_URI'];

// Expresión regular 
$expresionRegular = '#^/AdopcionesApp_3\.0/app/content/([^/]+)/([^/]+)/([^/]+)$#';

// Compara la ruta actual con la expresión regular
if (preg_match($expresionRegular, $rutaActual,$matches)) {
    include '../../registro/modal_registro.php';
} else{
    include '../registro/modal_registro.php';
}





?> 
<script>
  
     // Obtener la URL actual de la ventana
     var currentURL = window.location.href;

// Definir las variables urluser y urllogo
var urlestilos;
var urluser;
var urllogo;
var urlindex;
var urlgatos;
var urlperros;
var urlhurones;
var urlotros;
var urladopta;
var urlabuelitos;
var urlvoluntariado;
var urlregistro;
var urlsoyasociacion;
var urlmiperfil;
var urlconfusu;
var urlcerrarsesion;
var urlblog;
var urldonativos;
// Verificar la URL actual y asignar los valores correspondientes utilizando un switch
switch (currentURL) {
 
  case 'http://localhost/AdopcionesApp_3.0/app/':
    urlestilos='../assets/style.css';
    urluser = '../assets/images/users/avatardefault.png';
    urllogo = '../assets/images/logos/logo4.PNG';
    urlindex='./content/inicio/carrusel_inicio.php';
    urlgatos='';
    urlperros='';
    urlhurones='';
    urlotros='';
    urladopta='';
    urlabuelitos='';
    urlvoluntariado='';
    urlregistro='./content/registro/registro.php';
    urlsoyasociacion='';//Cambiar cuando haya pagina sólo de registro de refugios
    urldonativos;
    urlmiperfil='';
    urlconfusu='';
    urlcerrarsesion='';
    urlblog='';
    break;
  case 'http://localhost/AdopcionesApp_3.0/app/content/inicio/carrusel_inicio.php':
    urlestilos='../../../assets/style.css';
    urluser = '../../../assets/images/users/avatardefault.png';
    urllogo = '../../../assets/images/logos/logo4.PNG';
    urlindex='../inicio/carrusel_inicio.php';
    urlgatos='../mascotas/gatos.php';
    urlperros='../mascotas/perros.php';
    urlhurones='../mascotas/hurones.php';
    urlotros='../mascotas/otros-animales.php';
    urladopta='../colabora/adopta.php';
    urlabuelitos='../colabora/abuelitos.php';
    urlvoluntariado='../colabora/voluntariado.php';
    urlregistro='../registro/registro.php';
    urlsoyasociacion='../registro/registro.php';//Cambiar cuando haya pagina sólo de registro de refugios
    urldonativos='../colabora/donativos.php';
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='../blog/blog.php';
    break;
  case 'http://localhost/AdopcionesApp_3.0/app/content/mascotas/perros.php':
  case 'http://localhost/AdopcionesApp_3.0/app/content/mascotas/gatos.php':
  case 'http://localhost/AdopcionesApp_3.0/app/content/mascotas/hurones.php':
  case 'http://localhost/AdopcionesApp_3.0/app/content/mascotas/otros-animales.php':
  case 'http://localhost/AdopcionesApp_3.0/app/content/mascotas/mascotas.php':
    urlestilos='../../../assets/style.css'; 
    urluser = '../../../assets/images/users/avatardefault.png';
    urllogo = '../../../assets/images/logos/logo4.PNG';
    urlindex='../inicio/carrusel_inicio.php';
    urlgatos='./gatos.php';
    urlperros='./perros.php';
    urlhurones='./hurones.php';
    urlotros='./otros-animales.php';
    urladopta='../colabora/adopta.php';
    urlabuelitos='../colabora/abuelitos.php';
    urlvoluntariado='../colabora/voluntariado.php';
    urlregistro='../registro/registro.php';
    urlsoyasociacion='../registro/registro.php';//Cambiar cuando haya pagina sólo de registro de refugios
    urldonativos='../colabora/donativos.php';
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='../blog/blog.php';
    break;
 case 'http://localhost/AdopcionesApp_3.0/app/content/colabora/adopta.php':
 case 'http://localhost/AdopcionesApp_3.0/app/content/colabora/abuelitos.php':
 case 'http://localhost/AdopcionesApp_3.0/app/content/colabora/voluntariado.php':
 case 'http://localhost/AdopcionesApp_3.0/app/content/colabora/donativos.php':
    urlestilos='../../../assets/style.css'; 
    urluser = '../../../assets/images/users/avatardefault.png';
    urllogo = '../../../assets/images/logos/logo4.PNG';
    urlindex='../inicio/carrusel_inicio.php';
    urlgatos='../mascotas/gatos.php';
    urlperros='../mascotas/perros.php';
    urlhurones='../mascotas/hurones.php';
    urlotros='../mascotas/otros-animales.php';
    urladopta='./adopta.php';
    urlabuelitos='./abuelitos.php';
    urlvoluntariado='./voluntariado.php';
    urlregistro='../registro/registro.php';
    urlsoyasociacion='../registro/registro.php';//Cambiar cuando haya pagina sólo de registro de refugios
    urldonativos='../colabora/donativos.php';
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='../blog/blog.php';
    break;
    case 'http://localhost/AdopcionesApp_3.0/app/content/blog/blog.php':
    urlestilos='../../../assets/style.css';
    urluser = '../../../assets/images/users/avatardefault.png';
    urllogo = '../../../assets/images/logos/logo4.PNG';
    urlindex='../inicio/carrusel_inicio.php';
    urlgatos='../mascotas/gatos.php';
    urlperros='../mascotas/perros.php';
    urlhurones='../mascotas/hurones.php';
    urlotros='../mascotas/otros-animales.php';
    urladopta='../colabora/adopta.php';
    urlabuelitos='../colabora/abuelitos.php';
    urlvoluntariado='../colabora/voluntariado.php';
    urlregistro='../registro/registro.php';
    urlsoyasociacion='../registro/registro.php';//Cambiar cuando haya pagina sólo de registro de refugios
    urldonativos='../colabora/donativos.php';
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='#';
    break;
  case 'http://localhost/AdopcionesApp_3.0/app/content/registro/registro.php':
    urlestilos='../../../assets/style.css';
    urluser = '../../../assets/images/users/avatardefault.png';
    urllogo = '../../../assets/images/logos/logo4.PNG';
    urlindex='../inicio/carrusel_inicio.php';
    urlgatos='../mascotas/gatos.php';
    urlperros='../mascotas/perros.php';
    urlhurones='../mascotas/hurones.php';
    urlotros='../mascotas/otros-animales.php';
    urladopta='../colabora/adopta.php';
    urlabuelitos='../colabora/abuelitos.php';
    urlvoluntariado='../colabora/voluntariado.php';
    urlregistro='../registro/registro.php';
    urlsoyasociacion='./registro.php';//Cambiar cuando haya pagina sólo de registro de refugios
    urldonativos='../colabora/donativos.php';
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='../blog/blog.php';
    break;
    case 'http://localhost/AdopcionesApp_3.0/app/helpers/procesar_form_refugios.php':
    case 'http://localhost/AdopcionesApp_3.0/app/helpers/procesar_form_usuario.php':
    case 'http://localhost/AdopcionesApp_3.0/app/helpers/procesar_inicio_sesion.php':
    urlestilos='../../assets/style.css';
    urluser = '../../assets/images/users/avatardefault.png';
    urllogo = '../../assets/images/logos/logo4.PNG';
    urlindex='../content/inicio/carrusel_inicio.php';
    urlgatos='../content/mascotas/gatos.php';
    urlperros='../content/mascotas/perros.php';
    urlhurones='../content/mascotas/hurones.php';
    urlotros='../content/mascotas/otros-animales.php';
    urladopta='../content/colabora/adopta.php';
    urlabuelitos='../content/colabora/abuelitos.php';
    urlvoluntariado='../content/colabora/voluntariado.php';
    urlregistro='../content/registro/registro.php';
    urlsoyasociacion='../content/registro/registro.php';//Cambiar cuando haya pagina sólo de registro de refugios
    urldonativos='../colabora/donativos.php';
    urlmiperfil='../content/desplegable_usuario/mi_perfil.php';
    urlconfusu='../content/desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../content/desplegable_usuario/cerrar_sesion.php';
    urlblog='../content/blog/blog.php';
      break;
    case 'http://localhost/AdopcionesApp_3.0/app/content/blog/articulos/articulo_kala.php':
    urlestilos='../../../../assets/style.css';
    urluser = '../../../../assets/images/users/avatardefault.png';
    urllogo = '../../../../assets/images/logos/logo4.PNG';
    urlindex='../../inicio/carrusel_inicio.php';
    urlgatos='../../mascotas/gatos.php';
    urlperros='../../mascotas/perros.php';
    urlhurones='../../mascotas/hurones.php';
    urlotros='../../mascotas/otros-animales.php';
    urladopta='../../colabora/adopta.php';
    urlabuelitos='../../colabora/abuelitos.php';
    urlvoluntariado='../../colabora/voluntariado.php';
    urlregistro='../../registro/registro.php';
    urlsoyasociacion='../../registro/registro.php';//Cambiar cuando haya pagina sólo de registro de refugios
    urldonativos='../../colabora/donativos.php';
    urlmiperfil='../../desplegable_usuario/mi_perfil.php';
    urlconfusu='../../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../../desplegable_usuario/cerrar_sesion.php';
    urlblog='../blog.php';
    break;
}
  
// Pongo los valores de cada variable en el href o src del elemento html correspondiente
  //Style
  var linkestilos = document.getElementById("estilos");
  linkestilos.href = urlestilos;

  //Nav Inicio
  var linkinicio = document.getElementById("inicio");
  linkinicio.href = urlindex;

  var linkregistro = document.getElementById("registro");
  linkregistro.href = urlregistro;

  var imglogo = document.getElementById("logomenu");
  imglogo.src = urllogo;

  var imguser = document.getElementById("fotouser");
  imguser.src = urluser;

//Nav Mascotas
  var linkgatos = document.getElementById("gatos");
  linkgatos.href = urlgatos;
  console.log(linkgatos);

  var linkperros = document.getElementById("perros");
  linkperros.href = urlperros;

  var linkhurones = document.getElementById("hurones");
  linkhurones.href = urlhurones;

  var linkotros = document.getElementById("otros");
  linkotros.href = urlotros;

  //Colabora
  var linkadopta = document.getElementById("adopta");
  linkadopta.href = urladopta;
  var linkabuelitos = document.getElementById("abuelitos");
  linkabuelitos.href = urlabuelitos;
  var linkvoluntariado = document.getElementById("voluntariado");
  linkvoluntariado.href = urlvoluntariado;
  var linksoyasociacion = document.getElementById("registroRef");
  linksoyasociacion.href = urlsoyasociacion;
  var linkdonativos = document.getElementById("donativos");
  linkdonativos.href = urldonativos;

  //Desplagable Usuario
  var linkconfusu = document.getElementById("conf_usu");
  linkconfusu.href = urlconfusu;
  var linkmiperfil = document.getElementById("mi_perfil");
  linkmiperfil.href = urlmiperfil;
  var linkcerrarsesion = document.getElementById("cerrar_sesion");
  linkcerrarsesion.href = urlcerrarsesion;

  //Blog

  var linkblog = document.getElementById("blog");
  linkblog.href = urlblog;
  console.log(typeof(linkblog));
  console.log(linkblog.href);
  
  


</script>

</body>

</html>