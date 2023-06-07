<?php

include_once('../models/crud/funcionesCrud.php');
include_once('../models/Usuario.php');
include_once('../models/Refugio.php');
include_once('../models/Animal.php');
include_once('../models/AccesoDatos.php');

//Inicio sesion o recupero la sesion si ya está iniciada
session_start();




$_SESSION['rol']="";

if ( !empty( $_POST['email']) && !empty($_POST['contrasena'])){
  //Obtenemos el rol del usuario.
  $rol=getUserRol($_POST['email']);
  //Si rol es una cadena vacía es que el email no está en la BBDD
  if($rol==""){
      $_SESSION['mensaje_error']='El email no se encuentra en nuestra base de datos';
      header("Location: ../content/inicio/carrusel_inicio.php");
  }else{
    if ( userOk($_POST['email'],$_POST['contrasena'],$rol)&& $rol!=""){
    
      $_SESSION['rol']=$rol;
      $_SESSION['mensaje']="Bienvenido/a de nuevo!";
      header("Location: ../content/desplegable_usuario/mi_perfil.php");
      
    }else{
      $_SESSION['mensaje_error']="Email o contraseña no válidos. Recuerda que la contraseña diferencia mayúsculas y minúsculas. Por favor, inténtalo de nuevo.";
      header("Location: ../content/inicio/carrusel_inicio.php");
    }
  }
 

  }else{
    $_SESSION['mensaje_error']="Introduzca su email y su contraseña";
    header("Location: ../content/inicio/carrusel_inicio.php");
  }


?>

