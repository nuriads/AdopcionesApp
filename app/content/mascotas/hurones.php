<?php
include './mascotas.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/crud/funcionesCrud.php';

$array_hurones=getAnimales('hurón');
$fechaActual=getdate();
?>

<section id="mascotas">
	<div class="container">
		<div class="row">

				<!-- Tarjeta de animal bucle -->
				<?php foreach ($array_hurones as $huron) : ?>
				<!-- Obtengo los datos de la fecha por separado para calcular la edad -->
				<?php 	$ano= substr($huron->fecha_nac,0,4);
					$mes= substr($huron->fecha_nac,5,2);
					$dia= substr($huron->fecha_nac,8,2);?>
			<div class="col-md-4 mb-4">
				<div class="card">
				<img src="<?php echo "../../../assets/images/mascotas/".$huron->especie."/".$huron->microchip.".".$huron->extension_imagen?>" class="card-img-top" alt=<?=$huron->nombre?>>
					<div class="card-body">
						<h5 class="card-title"><?= $huron->nombre?></h5>
						<p class="card-text">Edad: <?=$fechaActual["year"]-$ano?> años</p>
						<p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
						<a href="#" class="boton-animales">Adóptame!</a>
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