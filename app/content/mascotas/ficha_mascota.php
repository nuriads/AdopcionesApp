<?php
include './mascotas.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/crud/funcionesCrud.php';

//porhacer--> $microchip=$_GET['microchip'];
$mascota= getAnimal($microchip);
$fechaActual = getdate();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Perfil de Animal</title>
  <!-- Enlace a los archivos de CSS de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    /* Estilos adicionales */
    body {
      padding-top: 20px;
    }
    .animal-image {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">Nombre del Animal</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="animal-image">
          <img src="ruta_de_la_imagen_del_animal.jpg" class="img-fluid" alt="Imagen del Animal">
        </div>
        <div class="mb-3">
          <label class="fw-bold">Edad:</label>
          <span>3 años</span>
        </div>
        <div class="mb-3">
          <label class="fw-bold">Género:</label>
          <span>Macho</span>
        </div>
        <div class="mb-3">
          <label class="fw-bold">Descripción:</label>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada mauris nec dignissim ultrices.</p>
        </div>
        <div class="mb-3">
          <label class="fw-bold">Descripción:</label>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada mauris nec dignissim ultrices.</p>
        </div>
        
      </div>
    </div>
  </div>


