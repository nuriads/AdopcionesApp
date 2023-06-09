<?php
include '../models/AccesoDatos.php';
include '../models/Animal.php';
include '../models/Refugio.php';
include '../models/crud/funcionesCrud.php';

//Inicio sesion o recupero la sesion si ya está iniciada
session_start();
//Borro el mensaje de error si anteriormente existia
if ($_SESSION["mensaje_error"]!=""){
 $_SESSION["mensaje_error"]="";
}
if ($_SESSION["mensaje_error_subida"]!=""){
    $_SESSION["mensaje_error_subida"]="";
  }
  if ($_SESSION["mensaje_subida"]!=""){
    $_SESSION["mensaje_subida"]="";
  }
//Recupero el email de la sesión y obtengo elobj refugio para poder acceder al nif del refugio
$email=$_SESSION['email'];
$refugio=getRefugio($email);
//Creo objeto ANIMAL
$animal= new Animal();

// Procesar datos del formulario
$animal->nif_refugio=$refugio->nif;
$animal->microchip=$_POST['microchip'];
$animal->nombre = $_POST['nombre'];
$animal->nombre = $_POST['nombre'];
$animal->especie= $_POST['especie'];
$animal->raza = $_POST['raza'];
$animal->fecha_nac = $_POST['fecha'];
$animal->sexo = $_POST['sexo'];
$animal->tamano = $_POST['tamano'];
$animal->peso = $_POST['peso'];
$animal->descripcion = $_POST['descripcion'];


//Inserto los datos en la base de datos
$insert=insertanimal($animal);

//Muestro un mensaje dependiendo de si se ha insertado correctamente o no
if ($insert) {
  $_SESSION["mensaje_subida"]="Animal registrado correctamente de nuestra Base de Datos";
  header("Location: ../content/desplegable_usuario/registro_animales.php");
  
} else {
  
  $_SESSION["mensaje_error_subida"]="Error al insertar los datos en la base de datos, el microchip del animal ya está en nuestra Base de Datos";
  header("Location:Location: ../content/desplegable_usuario/registro_animales.php");
}


?>