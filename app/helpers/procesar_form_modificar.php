<?php
include '../models/AccesoDatos.php';
include '../models/Refugio.php';
include '../models/Usuario.php';
include '../models/crud/funcionesCrud.php';

//Inicio sesion o recupero la sesion si ya está iniciada

session_start();
//Borro el mensaje de error si anteriormente existia
if(isset($_SESSION["mensaje_error"])){
  unset($_SESSION["mensaje_error"]);
}

if($_POST['rol']=="refugio"){


//Creo objeto REFUGIO
$refugio_update= new Refugio();

// Procesar datos del formulario
$refugio_update->nif = $_POST['nif'];
$refugio_update->nom_refugio= $_POST['nom_refugio'];
$refugio_update->direccion = $_POST['direccion'];
$refugio_update->comunidad = $_POST['comunidad'];
$refugio_update->telefono = $_POST['telefono'];
$refugio_update->web = $_POST['web'];
$refugio_update->email = $_POST['email'];
$refugio_update->contrasena = $_POST['contrasena'];
$refugio_update->web = $_POST['web'];
$refugio_update->comunidad = $_POST['comunidad'];

//Inserto los datos en la base de datos
$upadate=guardarcambiosRef($refugio_update);

}

if($_POST['rol']=="Adoptante"){


    //Creo objeto usuario
$user_update= new Usuario();

// Procesar datos del formulario
$user_update->email = $_POST['email'];
$user_update->nombre = $_POST['nombre'];
$user_update->apellidos = $_POST['apellidos'];
$user_update->nick = $_POST['nick'];
$user_update->contrasena = $_POST['contrasena'];
$user_update->intereses = $_POST['intereses'];

//Compruebo que la contraseá no esté vacia
if($user_update->contrasena==""){
    $upadate=false;
    
    
}else{
//Inserto los datos en la base de datos
$upadate=guardarcambiosUser($user_update);

}

}
//Muestro un mensaje dependiendo de si se ha insertado correctamente o no
if ($upadate) {
 
  $_SESSION["mensaje_actualización"]="Cambios guardados";
  header("Location: ../content/desplegable_usuario/mi_perfil.php");
  
} else {
   
  $_SESSION["mensaje_error_actualización"]="Error al actualizar los datos en la base de datos";
  header("Location: ../content/desplegable_usuario/mi_perfil.php");
}


?>