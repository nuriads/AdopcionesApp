<?php
include 'mascotas.php';
include './models/AccesoDatos.php';
include './models/Animal.php';
include './models/crud/funcionesCrud.php';

$array_perros=getAnimales('perro');
?>

<section id="mascotas">
	<div class="container">
		<div class="row">

		<!-- Tarjeta de animal bucle -->
		<?php foreach ($array_perros as $perro) : ?>
			<div class="col-md-4 mb-4">
				<div class="card">
					<img src="<?php echo "../assets/mascotas/".$perro->especie."/".$perro->microchip.".avif"?>" class="card-img-top" alt="<?= $perro->nombre?>">
					<div class="card-body">
						<h5 class="card-title"><?= $perro->nombre?></h5>
						<p class="card-text">Edad: <?=$perro->fecha_nac?></p>
						<p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
						<a href="#" class="boton-animales">Adóptame!</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
            
       </div>
    </div>
