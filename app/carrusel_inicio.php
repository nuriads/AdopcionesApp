<?php
include 'index.html';
include './models/AccesoDatos.php';
include './models/Animal.php';
include './models/crud/funcionesCrud.php';

$array_carrusel = randomAnimals();
$num = 0;
$estado_itemcarrusel="active";

?>


<!--contenido solo index-->
<div id="contenido-index">
  <div id="contenido">

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">¡Encuentra a tu nuevo mejor amigo peludo!</h1>
        <p class="lead">En Adopctaap, trabajamos con refugios y organizaciones de rescate para ayudar a los animales necesitados a encontrar hogares amorosos.</p>
      </div>
    </div>


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner" style="height: 500px;">
      
        <?php for ($i = 0; $i <= 2; $i++) : ?>
          <!--Carraousel item-->
          <?php if($num!=0){
              $estado_itemcarrusel="";
          }
          ?> 
          <?php //echo $estado_itemcarrusel ?>
          <div class="carousel-item <?php echo $estado_itemcarrusel ?> ">

          <div class="d-flex">
        <div class="col">
          <div class="card">
          <img src="<?php echo "../assets/mascotas/".$array_carrusel[$num]->especie."/".$array_carrusel[$num]->microchip.".avif"?>" class="card-img-top" alt="<?= $array_carrusel[$num]->nombre?>">
            <div class="card-body">
            <h5 class="card-title"><?= $array_carrusel[$num]->nombre?></h5>
						<p class="card-text">Edad: <?=$array_carrusel[$num]->fecha_nac?></p>
              <p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
              <a href="#" class="boton-animales">Adóptame!</a>
            </div>
          </div>
        </div>
        <?php  $num = $num+1 ?>
        <div class="col">
          <div class="card">
          <img src="<?php echo "../assets/mascotas/".$array_carrusel[$num]->especie."/".$array_carrusel[$num]->microchip.".avif"?>" class="card-img-top" alt="<?= $array_carrusel[$num]->nombre?>">
            <div class="card-body">
            <h5 class="card-title"><?= $array_carrusel[$num]->nombre?></h5>
						<p class="card-text">Edad: <?=$array_carrusel[$num]->fecha_nac?></p>
              <p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
              <a href="#" class="boton-animales">Adóptame!</a>
            </div>
          </div>
        </div>
        <?php  $num = $num+1 ?>
        <div class="col">
          <div class="card">
          <img src="<?php echo "../assets/mascotas/".$array_carrusel[$num]->especie."/".$array_carrusel[$num]->microchip.".avif"?>" class="card-img-top" alt="<?= $array_carrusel[$num]->nombre?>">
					<div class="card-body">
          <h5 class="card-title"><?= $array_carrusel[$num]->nombre?></h5>
						<p class="card-text">Edad: <?=$array_carrusel[$num]->fecha_nac?></p>
						<p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
						<a href="#" class="boton-animales">Adóptame!</a>
            </div>
          </div>
        </div>
      </div>
          </div>
          <?php  $num = $num+1 ?>
          <?php echo "".$num ?>
          <?php endfor ?>
         

         
      </div>

    </div>
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>



<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2>¿Quiénes somos?</h2>
      <p>Somos un equipo de amantes de los animales que trabaja en estrecha colaboración con refugios y organizaciones de rescate para ayudar a los animales necesitados a encontrar hogares amorosos.</p>
      <p>En Adopctaap, nos encargamos de publicar perfiles detallados de los animales disponibles para adopción, junto con información sobre su personalidad, historial médico y requisitos de cuidado. De esta manera, puedes encontrar fácilmente el compañero animal perfecto para ti y tu estilo de vida.</p>
      <p>Nos enorgullece ser una plataforma inclusiva que atiende a todos los tipos de animales y personas, desde perros y gatos hasta conejos y pájaros. Si estás buscando una mascota para compartir tu hogar y tu vida, estás en el lugar correcto. Además, si eres un refugio o una organización de rescate que busca promocionar animales en busca de hogar, Adopctaap es el lugar ideal para darles visibilidad y aumentar sus posibilidades de ser adoptados.</p>
      <p>Únete a nuestra comunidad de amantes de los animales y haz la diferenciaen la vida de un animal necesitado. ¡Empieza hoy tu búsqueda en Adopctaap y encuentra a tu nuevo compañero para toda la vida!</p>
    </div>
    <div class="col-md-4">
      <h2>Últimas adopciones</h2>
      <div class="card mb-3">
        <img src="../assets/mascotas/adopciones/Buddy.avif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Buddy</h5>
          <p class="card-text">Raza: Labrador Retriever</p>
          <a href="#" class="btn btn-primary">Más información</a>
        </div>
      </div>
      <div class="card mb-3">
        <img src="../assets/mascotas/adopciones/Luna.avif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Luna</h5>
          <p class="card-text">Raza: Siamese</p>
          <a href="#" class="btn btn-primary">Más información</a>
        </div>
      </div>
      <div class="card mb-3">
        <img src="../assets/mascotas/adopciones/prince.avif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Prince & Barbara</h5>
          <p class="card-text">Raza: Pareja de agapornis</p>
          <a href="#" class="btn btn-primary">Más información</a>
        </div>
      </div>
    </div>
  </div>
</div><!--Fin contenido index-->

</body>

</html>