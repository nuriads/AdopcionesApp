<?php
include '../models/AccesoDatos.php';
include '../models/Animal.php';
include '../models/Refugio.php';
include '../models/crud/funcionesCrud.php';

//Inicio sesion o recupero la sesion si ya está iniciada
session_start();

//Borro el mensaje de error si anteriormente existia
if(isset($_SESSION["mensaje_error"])){
    unset($_SESSION["mensaje_error"]);
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
$animal->especie= $_POST['especie'];
$animal->raza = $_POST['raza'];
$animal->fecha_nac = $_POST['fecha'];
$animal->sexo = $_POST['sexo'];
$animal->tamano = $_POST['tamano'];
$animal->peso = $_POST['peso'];
$animal->descripcion = $_POST['descripcion'];
//Si la imagen está vacia pongo la extension de la original para que no se borre de la bbdd
if($_FILES["imagen"]["error"]>0){
    $animal->extension_imagen = $_POST['ext_img_old'];
}else{
    $animal->extension_imagen = substr($_FILES["imagen"]["type"],6);
    //Subo la imagen a la carpeta del servidor
   $ruta="../../assets/images/mascotas/".$_POST['especie']."/". $_POST['microchip'].".".$ext_img;
   $resu=@move_uploaded_file($_FILES["imagen"]["tmp_name"],$ruta);
    
}


//Inserto los datos en la base de datos
$update=guardarcambiosAnimal($animal);

//Muestro un mensaje dependiendo de si se ha MODIFICADO correctamente o no
if ($upadate) {
 
  //$_SESSION["mensaje_actualización"]="Cambios guardados";
  header("Location: ../content/desplegable_usuario/edicion_animales.php?animal=".$animal->microchip);
  
} else {
   
  //$_SESSION["mensaje_error_actualización"]="Error al actualizar los datos en la base de datos";
  header("Location: ../content/desplegable_usuario/edicion_animales.php?animal=".$animal->microchip);
}


function checkImagen(array $imagen){


  $msg="";
  $limitebytes=1000000;
 if($imagen["size"]>0){

     if($imagen["error"]>0){
         $msg.= "Error, no se subió la imagen";
     }   

    if($imagen["size"]>$limitebytes){
        $msg.="error, la imagen debe pesar menos de 1000kb";
    }
    


 }
 
  
  return $msg;
}

?>