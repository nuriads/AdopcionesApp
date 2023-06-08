<?php
include '../../index.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/Refugio.php';
include '../../models/crud/funcionesCrud.php';

$email=$_SESSION['email'];
$refugio=getRefugio($email);

$array_animales = getAnimalesRefugio($refugio->nif);
$fechaActual = getdate();

?>
<div class="container">
    <h2>Mi cuenta</h2>
    
        <div style ="height:100%" class="card ">
            <div class="card-header">Gestión de Mascotas</div>
            <div class="card-body">

                <div class="container">
                    <div class="row">
                    <div style="height: 250px; margin-bottom:25px" class="col-md-2 gatocard">
                               <div style=" height: 250px" class="card">
                               <a style=' margin-top:35px; align-self:center; color: #00afa1; font-size:100px;' href="./registro_animales.php">  +</a> 
                                </div>
                    </div>
                        <!-- Tarjeta de animal bucle -->
                        <?php foreach ($array_animales as $animal) : ?>
                            <?php $ano = substr($animal->fecha_nac, 0, 4);
                            $mes = substr($animal->fecha_nac, 5, 2);
                            $dia = substr($animal->fecha_nac, 8, 2); ?>
                            <div style="height: 250px; margin-bottom:25px" class="col-md-2 gatocard">
                                <div style="height: 100%" class="card">
                                    <img style="height: 50%;" src="<?php echo "../../../assets/images/mascotas/" . $animal->especie . "/" . $animal->microchip . ".avif" ?>" class="card-img-top" alt=<?= $animal->nombre ?>>
                                    <div style="height: 100px;" class="card-body">
                                        <h5 class="card-title"><?= $animal->nombre ?></h5>
                                        <p class="card-text">Edad: <?= $fechaActual["year"] - $ano ?> años</p>
                                        <a href="#" class="boton-animales">Editar info</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

            


            </div>
        </div>

    <div class="card-footer"><a href="./mi_perfil.php">Volver</a></div>
</div>
</div>




</div>
<div class="container-fluid ">
    <?php

    include_once '../inicio/footer.php';

    ?>
</div>
</div>