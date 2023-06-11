<?php
include './mascotas.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/crud/funcionesCrud.php';

//porhacer--> $_GET['microchip'];
$microchip='024173129510892';
$mascota= getAnimal($microchip);
$fechaActual = getdate();
$ano= substr($mascota->fecha_nac,0,4);
$mes= substr($mascota->fecha_nac,5,2);
$dia= substr($mascota->fecha_nac,8,2);
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
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header"><h2><?=$mascota->nombre?></h2></div>
          <div class="card-body">
            <div class="animal-image">
              <img style= "height:500px;" src="<?php echo "../../../assets/images/mascotas/".$mascota->especie."/".$mascota->microchip.".".$mascota->extension_imagen?>" class="card-img"alt="Imagen del Animal">
            </div>
            <div class="mb-3">
              <label class="fw-bold">Comparte</label>
              <span><a target="_blank" href="" class="btnFacebook"></a> <a target="_blank" href="" class="btnTwitter"></a>&nbsp;&nbsp;&nbsp;<a href="" & class="btnInstagram" target="_blank">email</a></span>
            </div>
            <div class="mb-3">
              <label class="fw-bold">Edad:</label>
              <span><?=$fechaActual["year"]-$ano?> años</span>
            </div>
            <div class="mb-3">
              <label class="fw-bold">Género:</label>
              <span><?=$mascota->sexo?></span>
            </div>
            <div class="mb-3">
              <label class="fw-bold">Descripción:</label>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada mauris nec dignissim ultrices.</p>
            </div>
            <!-- Agrega más información del animal aquí -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Enlace al archivo de JavaScript de Bootstrap (opcional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
