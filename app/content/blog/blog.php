<?php

include '../../index.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Blog de Adopciones</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
  .article-card {
    height: 100%;
  }

  .card-text {
    font-size: 0.9rem; 
    height: 85px; 
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
  
</head>


<body>


  <div class="container mt-4">
    <h1 class="display-5 ">Consejos </h1>
    <div class="row">
      <div class="col-lg-6">
        <div class="card article-card">
          <img class="card-img-top" src="../../../assets/images/articulos/otras/beneficios-dieta-raw.jpg" alt="Dieta BARF">
          <div class="card-body">
            <h4 class="card-title">Dieta BARF para Mascotas</h4>
            <p class="card-text">La dieta BARF (Biologically Appropriate Raw Food) es una forma de alimentación para mascotas que consiste en ofrecerles alimentos crudos y naturales, similares a los que consumirían en estado salvaje. Esta dieta se basa en la idea de que los perros y gatos son carnívoros y se benefician de una alimentación más cercana a su naturaleza. En este artículo, exploraremos los beneficios de la dieta BARF, cómo comenzar a implementarla y algunos consejos útiles para una transición exitosa.</p>
            <a href="#" class="btn boton-animales">Leer más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card article-card">
          <img class="card-img-top" src="../../../assets/images/articulos/otras/tecnicas_de_adiestramiento_canino_21135_orig.jpg" alt="Adiestramiento Canino">
          <div class="card-body">
            <h4 class="card-title">Adiestramiento Canino: Consejos y Técnicas</h4>
            <p class="card-text">El adiestramiento canino es fundamental para el bienestar y la convivencia armoniosa con nuestras mascotas. En este artículo, te proporcionaremos consejos y técnicas efectivas para adiestrar a tu perro. Aprenderás sobre el refuerzo positivo, la importancia de la consistencia, cómo establecer límites claros y cómo abordar problemas de comportamiento comunes. ¡Descubre cómo fortalecer el vínculo con tu perro a través del adiestramiento!</p>
            <a href="#" class="btn boton-animales">Leer más</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <h1 class="display-5 ">Nuevo hogar, una nueva vida</h1>
    <div class="row">
      <div class="col-lg-6">
        <div class="card article-card">
          <img class="card-img-top" src="../../../assets/images/articulos/Mascotas/Kala.jpeg" alt="Dieta BARF">
          <div class="card-body">
            <h4 class="card-title">Kala</h4>
            <p class="card-text"> Hace algunos meses, Kala fue rescatada de un refugio de animales, donde esperaba ansiosamente a ser adoptado. Con una mirada tierna y ojos llenos de esperanza, conquistó el corazón de una familia que decidió darle una oportunidad y brindarle un hogar lleno de amor. Desde ese momento, la vida del perro adoptado cambió para siempre.</p>
            <a href="../blog/articulos/articulo_kala.php" class="btn boton-animales">Leer más</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card article-card">
          <img class="card-img-top" src="ruta-de-la-imagen2.jpg" alt="Adiestramiento Canino">
          <div class="card-body">
            <h4 class="card-title">Animal 2</h4>
            <p class="card-text"></p>
            <a href="#" class="btn boton-animales">Leer más</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid ">
	<?php 

	include_once '../inicio/footer.php';

	?>
	</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>