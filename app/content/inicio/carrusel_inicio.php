<?php
if (
  strpos($_SERVER['REQUEST_URI'], '/AdopcionesApp_3.0/app/helpers/procesar_form_usuario') !== false ||
  strpos($_SERVER['REQUEST_URI'], '/AdopcionesApp_3.0/app/helpers/procesar_form_refugios') !== false
) {
      require_once '../index.php';
      require_once '../models/AccesoDatos.php';
      require_once '../models/Animal.php';
      require_once '../models/crud/funcionesCrud.php';
} elseif ($_SERVER['REQUEST_URI'] == '/AdopcionesApp_3.0/app/content/inicio/carrusel_inicio.php') {
      require_once '../../index.php';
      require_once '../../models/AccesoDatos.php';
      require_once '../../models/Animal.php';
      require_once '../../models/crud/funcionesCrud.php';
}


$array_carrusel = randomAnimals();
$num = 0;
$estado_itemcarrusel = "active";

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

    <?php
    
    if(isset($msj)){
      echo "<h2>$msj</h2>";
    }
    ?>
    
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <ul class="carousel-indicators" style="font-size:large;list-style:disc; color:blueviolet">
        <li data-bs-target="#demo" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#demo" data-bs-slide-to="1"></li>
        <li data-bs-target="#demo" data-bs-slide-to="2"></li>
      </ul>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner" style="height: 500px;">

        <?php for ($i = 0; $i <= 2; $i++) : ?>
          <!--Carraousel item-->
          <?php if ($num != 0) {
            $estado_itemcarrusel = "";
          }
          ?>
          <?php //echo $estado_itemcarrusel 
          ?>
          <div class="carousel-item <?php echo $estado_itemcarrusel ?> ">

            <div class="row">
              <div class="col">
                <div class="card">
                  <img src="<?php echo "../../../assets/images/mascotas/" . $array_carrusel[$num]->especie . "/" . $array_carrusel[$num]->microchip . ".avif" ?>" class="card-img-top" alt="<?= $array_carrusel[$num]->nombre ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= $array_carrusel[$num]->nombre ?></h5>
                    <p class="card-text">Edad: <?= $array_carrusel[$num]->fecha_nac ?></p>
                    <p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
                    <a href="#" class="boton-animales">Adóptame!</a>
                  </div>
                </div>
              </div>
              <?php $num = $num + 1 ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo "../../../assets/images/mascotas/" . $array_carrusel[$num]->especie . "/" . $array_carrusel[$num]->microchip . ".avif" ?>" class="card-img-top" alt="<?= $array_carrusel[$num]->nombre ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= $array_carrusel[$num]->nombre ?></h5>
                    <p class="card-text">Edad: <?= $array_carrusel[$num]->fecha_nac ?></p>
                    <p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
                    <a href="#" class="boton-animales">Adóptame!</a>
                  </div>
                </div>
              </div>
              <?php $num = $num + 1 ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo "../../../assets/images/mascotas/" . $array_carrusel[$num]->especie . "/" . $array_carrusel[$num]->microchip . ".avif" ?>" class="card-img-top" alt="<?= $array_carrusel[$num]->nombre ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?= $array_carrusel[$num]->nombre ?></h5>
                    <p class="card-text">Edad: <?= $array_carrusel[$num]->fecha_nac ?></p>
                    <p class="desc-animal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, quas.</p>
                    <a href="#" class="boton-animales">Adóptame!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $num = $num + 1 ?>
          <?php echo "" . $num ?>
        <?php endfor ?>
      </div>
      <!-- Left and right controls/icons -->
      <a class="carousel-control-prev" href="#demo" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#demo" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </a>
    </div>
  </div>
</div>

<br>
<br>

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
        <img src="../../../assets/images/mascotas/adopciones/Buddy.avif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Buddy</h5>
          <p class="card-text">Raza: Labrador Retriever</p>
          <a href="#" class="btn btn-primary">Más información</a>
        </div>
      </div>
      <div class="card mb-3">
        <img src="../../../assets/images/mascotas/adopciones/Luna.avif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Luna</h5>
          <p class="card-text">Raza: Siamese</p>
          <a href="#" class="btn btn-primary">Más información</a>
        </div>
      </div>
      <div class="card mb-3">
        <img src="../../../assets/images/mascotas/adopciones/prince.avif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Prince & Barbara</h5>
          <p class="card-text">Raza: Pareja de agapornis</p>
          <a href="#" class="btn btn-primary">Más información</a>
        </div>
      </div>
    </div>
  </div>
</div><!--Fin contenido index-->
<script src="../../js/registro.js"></script>
// Verificar si existe la variable de sesión 'mensaje_error'
<?php if (isset($_SESSION['mensaje_error'])) : ?>
<script>

    // Abrir el modal
 
    $(document).ready(function() {
  $('#formularioModal').modal('show');
  //Obtengo el elemento de cierre del modal
  var closeBtn = document.getElementsByClassName("btn-close")[0];

  // Agrego un evento de click al botón de cierre del modal
closeBtn.addEventListener("click", function() {
  // Envía una solicitud AJAX para eliminar la variable de sesión
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "../../helpers/eliminar_variable_sesion.php", true);
  // Compruebo que la eliminación de la variable de sesión se haya realizado correctamente y si es así, refresco la página.
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // La variable de sesión se ha eliminado correctamente
        location.reload(); // Refresca la página
      } else {
        // Ocurrió un error al eliminar la variable de sesión
        console.error("Error al eliminar la variable de sesión.");
      }
    }
  };

  
  xhr.send();
});

  
});

</script>
<?php endif; 


?>





<div class="container-fluid ">
<?php 

include_once '../inicio/footer.php';

?>
</div>
</body>

</html>


