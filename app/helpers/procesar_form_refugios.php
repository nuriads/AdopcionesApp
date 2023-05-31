<?php
include './models/AccesoDatos.php';
include './models/Refugio.php';
include './models/crud/funcionesCrud.php';

$msj="";
//Creo objeto REFUGIO
$refugio= new Refugio();

// Procesar datos del formulario
$refugio->nif = $_POST['nif'];
$refugio->nom_refugio= $_POST['nom_refugio'];
$refugio->direccion = $_POST['direccion'];
$refugio->telefono = $_POST['telefono'];
$refugio->email = $_POST['email'];
$refugio->contrasena = $_POST['contrasena'];

//Inserto los datos en la base de datos
$insert=insertRefugio($refugio);

//Muestro un mensaje dependiendo de si se ha insertado correctamente o no
if ($insert) {
  $msj="Datos insertados correctamente.";
  
} else {
  $msj= "Error al insertar datos: " . $stmt->errorInfo();
}

include_once("registro.php");
?>