<?php
session_start();
session_destroy();
header('location:../inicio/carrusel_inicio.php');

?>