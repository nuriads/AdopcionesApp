<?php
include './mascotas.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/crud/funcionesCrud.php';

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
					<img src="<?php echo "../../../assets/images/mascotas/".$gato->especie."/".$gato->microchip.".".$gato->extension_imagen?>" class="card-img-top" alt=<?=$gato->nombre?>>
					<div class="card-body">
						<h5 class="card-title"><?= $gato->nombre?></h5>
						<p class="card-text">Edad: <?=$fechaActual["year"]-$ano?> años <br>
						Género: <?=$gato->sexo?>  <br>
						Raza: <?=$gato->raza?>  
						 </p>
						<form action="./ficha_mascota.php" method="POST">
							<input type="hidden" name="microchip" value="<?=$gato->microchip?>">
							<button class="btn boton-animales" type="submit">Adóptame!</button>
						</form> 
					</div>
				</div>
			</div>
			<?php endforeach ?>
       </div>
	   
    </div>


	<div class="container-fluid ">
	<?php 

	include_once '../inicio/footer.php';

	?>
	</div>
	




