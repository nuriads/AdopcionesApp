<?php
include '../models/AccesoDatos.php';
include '../models/Refugio.php';
include '../models/crud/funcionesCrud.php';

//Inicio sesion o recupero la sesion si ya está iniciada

session_start();
//Borro el mensaje de error si anteriormente existia
if(isset($_SESSION["mensaje_error"])){
  unset($_SESSION["mensaje_error"]);
}


//Creo objeto REFUGIO
$refugio= new Refugio();

// Procesar datos del formulario
$refugio->nif = $_POST['nif'];
$refugio->nom_refugio= $_POST['nom_refugio'];
$refugio->direccion = $_POST['direccion'];
$refugio->comunidad = $_POST['comunidad'];
$refugio->telefono = $_POST['telefono'];
$refugio->web = $_POST['web'];
$refugio->email = $_POST['email'];
$refugio->contrasena = $_POST['contrasena'];
$refugio->contrasena = $_POST['web'];
$refugio->contrasena = $_POST['comunidad'];

//Inserto los datos en la base de datos
$insert=insertRefugio($refugio);

//Muestro un mensaje dependiendo de si se ha insertado correctamente o no
if ($insert) {
  $_SESSION["mensaje"]="Registro Completado";
  $_SESSION["rol"]="refugio";
  header("Location: ../content/desplegable_usuario/mi_perfil.php");
  
} else {
  
  $_SESSION["mensaje_error"]="Error al insertar los datos en la base de datos, el nif del refugio ya existe";
  header("Location: ../content/inicio/carrusel_inicio.php");
}


?>