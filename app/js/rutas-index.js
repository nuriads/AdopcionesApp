
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

// Verificar la URL actual y asignar los valores correspondientes utilizando un switch
switch (currentURL) {
 
  case 'http://localhost/AdopcionesApp_3.0/app/':
    urlestilos='../assets/style.css';
    urluser = '../assets/images/foto-user.jpg';
    urllogo = '../assets/images/logo4.PNG';
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
    urlmiperfil='';
    urlconfusu='';
    urlcerrarsesion='';
    urlblog='';
    break;
  case 'http://localhost/AdopcionesApp_3.0/app/content/inicio/carrusel_inicio.php':
    urlestilos='../../../assets/style.css';
    urluser = '../../../assets/images/foto-user.jpg';
    urllogo = '../../../assets/images/logo4.PNG';
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
    urluser = '../../../assets/images/foto-user.jpg';
    urllogo = '../../../assets/images/logo4.PNG';
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
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='../blog/blog.php';
    break;
 case 'http://localhost/AdopcionesApp_3.0/app/content/colabora/adopta.php':
 case 'http://localhost/AdopcionesApp_3.0/app/content/colabora/abuelitos.php':
 case 'http://localhost/AdopcionesApp_3.0/app/content/colabora/voluntariado.php':
    urlestilos='../../../assets/style.css'; 
    urluser = '../../../assets/images/foto-user.jpg';
    urllogo = '../../../assets/images/logo4.PNG';
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
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='../blog/blog.php';
    break;
    case 'http://localhost/AdopcionesApp_3.0/app/content/blog/blog.php':
    urlestilos='../../../assets/style.css';
    urluser = '../../../assets/images/foto-user.jpg';
    urllogo = '../../../assets/images/logo4.PNG';
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
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='#';
    break;
  case 'http://localhost/AdopcionesApp_3.0/app/content/registro/registro.php':
    urlestilos='../../../assets/style.css';
    urluser = '../../../assets/images/foto-user.jpg';
    urllogo = '../../../assets/images/logo4.PNG';
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
    urlmiperfil='../desplegable_usuario/mi_perfil.php';
    urlconfusu='../desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../desplegable_usuario/cerrar_sesion.php';
    urlblog='../blog/blog.php';
    break;
    case 'http://localhost/AdopcionesApp_3.0/app/helpers/procesar_form_refugios.php':
    case 'http://localhost/AdopcionesApp_3.0/app/helpers/procesar_form_usuario.php':
    urlestilos='../../assets/style.css';
    urluser = '../../assets/images/foto-user.jpg';
    urllogo = '../../assets/images/logo4.PNG';
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
    urlmiperfil='../content/desplegable_usuario/mi_perfil.php';
    urlconfusu='../content/desplegable_usuario/conf_usuario.php';
    urlcerrarsesion='../content/desplegable_usuario/cerrar_sesion.php';
    urlblog='../content/blog/blog.php';
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

  //Desplrgable Usuario
  var linkconfusu = document.getElementById("conf_usu");
  linkconfusu.href = urlconfusu;
  var linkmiperfil = document.getElementById("mi_perfil");
  linkmiperfil.href = urlmiperfil;
  var linkcerrarsesion = document.getElementById("cerrar_sesion");
  linkcerrarsesion.href = urlcerrarsesion;

  //Blog

  var linkblog = document.getElementById("blog");
  linkblog.href = urlblog;


 

