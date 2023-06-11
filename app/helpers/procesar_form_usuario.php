<?php

include '../models/AccesoDatos.php';
include '../models/Usuario.php';
include '../models/crud/funcionesCrud.php';

//Inicio sesion o recupero la sesion si ya está iniciada

session_start();
//Borro el mensaje de error si anteriormente existia
if(isset($_SESSION["mensaje_error"])){
  unset($_SESSION["mensaje_error"]);
}


//Creo objeto usuario
$user= new Usuario();

// Procesar datos del formulario
$user->email = $_POST['email'];
$user->nombre = $_POST['nombre'];
$user->apellidos = $_POST['apellidos'];
$user->nick = $_POST['nick'];
$user->contrasena = $_POST['contrasena'];
$user->intereses = $_POST['intereses'];

//Inserto los datos en la base de datos
$insert=insertUser($user);

//Muestro un mensaje dependiendo de si se ha insertado correctamente o no
if ($insert) {
  $_SESSION['email']=$_POST['email'];
  $_SESSION["mensaje"]="Registro Completado";
  $_SESSION["rol"]="usuario";
  header("Location: ../content/desplegable_usuario/mi_perfil.php");
  
} else {
  
  $_SESSION["mensaje_error"]="Error al insertar los datos en la base de datos, el email ya existe";
  header("Location: ../content/inicio/carrusel_inicio.php");
}

?>