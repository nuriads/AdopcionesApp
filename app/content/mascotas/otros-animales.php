<?php
include './mascotas.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/crud/funcionesCrud.php';

$array_otros1=getAnimales('ave');
$array_otros2=getAnimales('conejo');
$array_resu=array_merge($array_otros1,$array_otros2);
$fechaActual=getdate();
?>

<section id="mascotas">
	<div class="container">
		<div class="row">

			<!-- Tarjeta de animal bucle -->
			<?php foreach ($array_resu as $animal) : ?>
			<?php 	$ano= substr($animal->fecha_nac,0,4);
					$mes= substr($animal->fecha_nac,5,2);
					$dia= substr($animal->fecha_nac,8,2);?>
			<div class="col-md-4 mb-4 gatocard">
				<div class="card">
					<img src="<?php echo "../../../assets/images/mascotas/".$animal->especie."/".$animal->microchip.".".$animal->extension_imagen?>" class="card-img-top" alt=<?=$animal->nombre?>>
					<div class="card-body">
						<h5 class="card-title"><?= $animal->nombre?></h5>
						<p class="card-text">Edad: <?=$fechaActual["year"]-$ano?> años <br>
						Género: <?=$animal->sexo?>  <br>
						Raza: <?=$animal->raza?>  
						 </p>
						<form action="./ficha_mascota.php" method="POST">
							<input type="hidden" name="microchip" value="<?=$animal->microchip?>">
							<button class="btn boton-animales" type="submit">Adóptame!</button>
						</form> 
					</div>
				</div>
			</div>
			<?php endforeach ?>
       </div>
	   
    </div>
	<?php 

	include_once '../inicio/footer.php';

	?>
	</div>