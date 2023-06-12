<?php
include './mascotas.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/crud/funcionesCrud.php';


$microchip = $_POST['microchip'];;
$mascota = getAnimal($microchip);
$fechaActual = getdate();
$ano = substr($mascota->fecha_nac, 0, 4);
$mes = substr($mascota->fecha_nac, 5, 2);
$dia = substr($mascota->fecha_nac, 8, 2);
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
                <div style="padding-bottom: 0px;" class="card-header">

                    <h2 class="display-6" style="float:left "><?= $mascota->nombre ?></h2>
                   
                    <div style="margin-top: 1px;" class="diviconorrss">
                        <a style="text-decoration:none" href="https://twitter.com/intent/tweet?text=¡Ayuda a cambiar la vida de un animal necesitado! <?=$mascota->nombre?> está en busca de un hogar, visita nuestra página y conócela&url=http%3A%2F%2Flocalhost%2FAdopcionesApp_3.0%2Fapp%2Fcontent%2Fmascotas%2Fficha_mascota.php&via=adopcionesApp&hashtags=Adopción,Mascotas" target="_blank">
                            <img class="iconorrss" src="../../../assets/images/logos/rrss/twitter.png" alt="">
                            <a style="text-decoration:none" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FAdopcionesApp_3.0%2Fapp%2Fcontent%2Fmascotas%2Fficha_mascota.php&display=popup" target="_blank">
  <img class="iconorrss" src="../../../assets/images/logos/rrss/facebook.png" alt="">
</a>
<a href="whatsapp://send?text=¡Ayuda a cambiar la vida de un animal necesitado! <?=$mascota->nombre?> está en busca de un hogar, visita nuestra página y conócela%0A%0Ahttp%3A%2F%2Flocalhost%2FAdopcionesApp_3.0%2Fapp%2Fcontent%2Fmascotas%2Fficha_mascota.php" target="_blank">

<img style="text-decoration:none;  width: 27px; height: 27px;" class="iconorrss" src="../../../assets/images/logos/rrss/whatsapp.png" alt="">
</a><div style="margin-bottom: 1px;" class=""> <p style="margin-bottom: 4px;font-size:12.5px;color:#00afa1" class="">¡Comparte y ayuda a encontrar <br>un hogar a <?= $mascota->nombre ?>!</p></div>

                    </div>
                    <br>
                    
                    
                </div>
                
                <div class="card-body">
                    <div class="animal-image">
                        <img style="height:500px;" src="<?php echo "../../../assets/images/mascotas/" . $mascota->especie . "/" . $mascota->microchip . "." . $mascota->extension_imagen ?>" class="card-img" alt="Imagen del Animal">
                    </div>



                    <div class="mb-3">
                        <label class="fw-bold">Edad:</label>
                        <span><?= $fechaActual["year"] - $ano ?> años</span>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Género:</label>
                        <span><?= $mascota->sexo ?></span>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Descripción:</label>
                        <p><?= $mascota->descripcion ?></p>
                    </div>
                    <a style="font-size:19px;" class="boton-animales" href="../colabora/adopta.php?peticion=adoptar&mascota=<?= $mascota->nombre ?>">¡Adóptame!</a>

                    </form>
                </div>
                <div class="card-footer"><a href="./<?php 
                                                        if($mascota->especie=='hurón'){echo "hurones";
                                                        }elseif($mascota->especie=='gato'|| $mascota->especie=='perro')
                                                        {
                                                            echo $mascota->especie."s";
                                                        }else{
                                                            echo "otros-animales";}?>.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
</svg>&nbsp;Atrás</a></div>
            </div>
        </div>
    </div>
    </div>

    <!-- Enlace al archivo de JavaScript de Bootstrap (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php include_once '../inicio/footer.php' ?>

</html>