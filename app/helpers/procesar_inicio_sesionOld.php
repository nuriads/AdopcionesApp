<?php

include_once('../models/crud/funcionesCrud.php');
include_once('../models/Usuario.php');
include_once('../models/Refugio.php');
include_once('../models/Animal.php');
include_once('../models/AccesoDatos.php');


session_start();
//$_SESSION['intentos']=0;
$_SESSION['mensaje']="holasoy mensaje";
$_SESSION['mensaje_error']="";
$_SESSION['rol']=".";
$limite=5;

if (  !empty( $_POST['email']) && !empty($_POST['contrasena'])){
    //Obtenemos el rol del usuario.
    $rol=getUserRol($_POST['email']);
    //Si rol es una cadena vacía es que el email no está en la BBDD
    if($rol==''){
        $_SESSION['mensaje_error']='El email no se encuentra en nuestra BBDD';
    }
    if ( userOk($_POST['email'],$_POST['contrasena'],$rol)&& $rol!=''){
      $_SESSION['intentos']=0;
      $_SESSION['rol']=$rol;
      include_once ('../content/desplegable_usuario/mi_perfil.php');
    } 
    // userOK falso
    else {
      $_SESSION['mensaje_error'] = "El número de usuario y la contraseña no son válidos";
       //$_SESSION['intentos']++;
      // if($_SESSION['intentos']==$limite){
       // $_SESSION['mensaje_error']= "Superado el máximo número de intentos <br><hr> Reinicie el navegador para intentarlo de nuevo";
          //session_destroy();
        //  die();
        //}
       
        header("Location: ../content/inicio/carrusel_inicio.php");
    }
} else {
    $_SESSION['mensaje_error'] = " Introduzca su número de usuario y su contraseña";
   
    echo "<script> alert('".$_SESSION['mensaje_error']."');
    window.location.href = '../content/inicio/carrusel_inicio.php';
    </script>
    ";
}


?>

