
<?php
include '../../index.php';
 ?>
 <!-- <div id="contenido">
 <div class="voluntariado">
<div class="row">
  <div class="col-md-6">
    <h3>Requisitos para ser voluntario</h3>
    <ul class="list-unstyled">
      <li>Debes tener al menos 18 años de edad, o tener la autorización por escrito de un padre o tutor legal.</li>
      <li>Debes tener una actitud positiva y amor por los animales.</li>
      <li>Debes poder trabajar en equipo y seguir las instrucciones dadas por el personal del refugio.</li>
      <li>Debes completar el formulario de solicitud de voluntario y asistir a una sesión de orientación para voluntarios.</li>
    </ul>
  </div>
  <div class="col-md-6">
    <h3>Tipos de trabajo voluntario</h3>
    <ul class="list-unstyled">
      <li>Paseadores de perros</li>
      <li>Cuidadores de gatos</li>
      <li>Trabajadores de eventos</li>
      <li>Ayuda administrativa</li>
      <li>Ayuda en mantenimiento</li>
    </ul>
    <p>Si estás interesado en ser voluntario en nuestro refugio, por favor completa nuestro formulario de solicitud de voluntariado. Después de enviar tu solicitud, nos pondremos en contacto contigo para programar una sesión de orientación para voluntarios. ¡Gracias por tu interés en ayudar a nuestros animales!</p>
    <a href="#" class="boton-animales">Solicitud de voluntariado</a>
  </div>
</div>
</div>
</div> -->


<div class="container">
  <div class="row">
  <div class="column-header col display-6">
  Requisitos para ser voluntario
          </div>
          <div class="column-header col display-6">
          Tipos de trabajo voluntario
          </div>
  </div>
</div>


<div class="row">
  <div class="column-body body-1 col">
  <ul>
    <li>Debes tener al menos 18 años de edad, o tener la autorización por escrito de un padre o tutor legal.</li>
    <li>Debes tener una actitud positiva y amor por los animales.</li>
    <li>Debes poder trabajar en equipo y seguir las instrucciones dadas por el personal del refugio.</li>
    <li>Debes completar el formulario de solicitud de voluntario y asistir a una sesión de orientación para voluntarios.</li>
  </ul>
  </div>
  <div class="column-body body-2 col">
 <ul>
  <li>Paseadores de perros</li>
  <li>Cuidadores de gatos</li>
  <li>Trabajadores de eventos</li>
  <li>Ayuda administrativa</li>
  <li>Ayuda en mantenimiento</li>
 </ul>
  </div>


  <div class="row">
    <div class="column-body body-3 col">
    Si estás interesado en ser voluntario en nuestro refugio, ponte en contacto con nosotros a través del formulario de adopciones y déjanos un mensaje. Después de enviar tu mensaje, nos pondremos en contacto contigo para programar una sesión de orientación para voluntarios. ¡Gracias por tu interés en ayudar a nuestros animales!</p>
    <a href="adopta.php" class="boton-animales">Solicitud de voluntariado</a>
    </div>
  </div>
 
</div>



<style>

        .container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.row {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.column-header,
.column-body {
  margin: 3px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
#img-abuelito{
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
.column-header {
  padding: 35px;
  background-color: #fff;
  color: #000;
  text-align: center;
  border: solid 3px #d97bb2;
}

.body-1 {
  background-color: #FEF6FF;
  color: #333;
  padding: 20px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

.body-2 {
  background-color: #9B89B3;
  color: #333;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

.body-3 {
  background-color: #FEFEDF;
  color: #333;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}
.body-4 {
  background-color: #E4C1F9;
  color: #333;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
  
}



.row .col {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 10px;

}


.row img {
  width: 350px;
  height: 350px;
  object-fit: cover;
  border-radius: 10px;
}

</style>
















<div class="container-fluid ">
	<?php 

	include_once '../inicio/footer.php';

	?>
	</div>

