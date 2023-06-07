<?php
// Inicializa la sesión
session_start();

// Elimina la variable de sesión que deseas
unset($_SESSION["mensaje_error"]);
//header("Location: ../content/inicio/carrusel_inicio.php");


?>