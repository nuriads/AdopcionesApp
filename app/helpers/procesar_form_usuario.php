<?php

include './models/AccesoDatos.php';
include './models/Usuario.php';
include './models/crud/funcionesCrud.php';

$msj="";

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
  $msj="Datos insertados correctamente.";
  
} else {
  $msj= "Error al insertar datos: " . $stmt->errorInfo();
}

include_once("registro.php");
?>