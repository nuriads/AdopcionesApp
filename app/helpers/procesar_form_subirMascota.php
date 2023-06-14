<?php
include '../models/AccesoDatos.php';
include '../models/Animal.php';
include '../models/Refugio.php';
include '../models/crud/funcionesCrud.php';

// Inicio de sesión o recuperación de la sesión si ya está iniciada
session_start();
// Borro el mensaje de error si anteriormente existía
$_SESSION["mensaje_error"] = "";
$_SESSION["mensaje_error_subida"] = "";
$_SESSION["mensaje_subida"] = "";

// Recupero el email de la sesión y obtengo el objeto refugio para poder acceder al NIF del refugio
$email = $_SESSION['email'];
$refugio = getRefugio($email);

// Creo objeto ANIMAL
$animal = new Animal();

// Procesar datos del formulario
$animal->nif_refugio = $refugio->nif;
$animal->microchip = $_POST['microchip'];
$animal->nombre = $_POST['nombre'];
$animal->especie = $_POST['especie'];
$animal->raza = $_POST['raza'];
$animal->fecha_nac = $_POST['fecha'];
$animal->sexo = $_POST['sexo'];
$animal->tamano = $_POST['tamano'];
$animal->peso = $_POST['peso'];
$animal->descripcion = $_POST['descripcion'];

// Comprobar la extensión de la imagen
$extensiones_permitidas = array('jpg', 'jpeg');
$nombre_archivo = $_FILES["imagen"]["name"];
$extension_archivo = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

if (!in_array($extension_archivo, $extensiones_permitidas)) {
    $_SESSION["mensaje_error_subida"] = "Error, la imagen debe ser .jpg o .jpeg";
    header("Location: ../content/desplegable_usuario/registro_animales.php");
    exit;
}

// Inserto los datos en la base de datos
$insert = insertanimal($animal);

// Muestro un mensaje dependiendo de si se ha insertado correctamente o no
if ($insert) {
    $_SESSION["mensaje_subida"] = "Animal registrado correctamente en nuestra Base de Datos";

    // Subo la imagen a la carpeta del servidor
    $ruta = "../../assets/images/mascotas/" . $_POST['especie'] . "/" . $_POST['microchip'] . "." . $extension_archivo;
    $resu = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);

    if ($resu) {
        header("Location: ../content/desplegable_usuario/registro_animales.php");
        exit;
    } else {
        $_SESSION["mensaje_error_subida"] = "Error al subir la imagen";
    }
} else {
    $_SESSION["mensaje_error_subida"] = "Error al insertar los datos en la base de datos, el microchip del animal ya existe";
}

header("Location: ../content/desplegable_usuario/registro_animales.php");
exit;
?>
