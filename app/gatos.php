<?php
include 'mascotas.php';
include './models/AccesoDatos.php';
include './models/Animal.php';
include './models/crud/funcionesCrud.php';

$array_gatos=getAnimales('gato');
$fechaActual=getdate();
?>


<section id="mascotas">
	<div class="container">
		<div class="row">

			<!-- Tarjeta de animal bucle -->
			<?php foreach ($array_gatos as $gato) : ?>
			<?php 	$ano= substr($gato->fecha_nac,0,4);
					$mes= substr($gato->fecha_nac,5,2);
					$dia= substr($gato->fecha_nac,8,2);?>
			<div class="col-md-4 mb-4 gatocard">
				<div class="card">
					<img src="<?php echo "../assets/mascotas/".$gato->especie."/".$gato->microchip.".avif"?>" class="card-img-top" alt=<?=$gato->nombre?>>
					<div class="card-body">
						<h5 class="card-title"><?= $gato->nombre?></h5>
						<p class="card-text">Edad: <?=$fechaActual["year"]-$ano?> años</p>
						<p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
						<a href="#" class="boton-animales">Adóptame!</a>
					</div>
				</div>
			</div>
			<?php endforeach ?>
       </div>
    </div>
