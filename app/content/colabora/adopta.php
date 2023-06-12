<?php
 include '../../index.php';
?>
<!--Script para recuperar la información del animal-->

<div class="container">
<div style="text-align: center; margin-top: 50px; color: #00afa1">
<h4 > Si estás interesado en ponerte en contacto con algún refugio como adoptante, rellena el siguiente formulario y nosotros haremos todo el trabajo!</h4>
</div>
<br>
  <div class='menus-contacto'>
  <h3 id="miParrafo">Formulario de adopción  &#x1f415;&#128008;</h3>
  <p>Cuéntanos por qué estás interesado en adoptar a uno de nuestros adorables animales. Queremos conocer más sobre ti y asegurarnos de encontrar el hogar perfecto para nuestros peludos amigos. <br>Por favor, comparte detalles como tu experiencia con mascotas, el tipo de hogar en el que viviría el animal adoptado y cualquier otra información que consideres relevante. Estamos emocionados de saber más sobre ti y cómo podrías brindarle un amoroso hogar a uno de nuestros animales. ¡Gracias por considerar la adopción!</p>
<form action="../../helpers/procesar_form_adopta.php" id="formulario-adopta" method="POST" >
<input type="hidden" name="microchip_adopcion" value="">

  <div class="form-group">
    <label for="email"> </label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Escribe tu email">
    <small id="emailHelp" class="form-text text-muted">No te preocupes, no compartiremos tu e-mail con terceros.</small>
  </div>
  <div class="form-group">
    <label for="telefono"></label>
    <input type="telefono" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
  </div>
  <div class="form-group">
    <label for="telefono"></label>
    <input type="telefono" class="form-control" name="adoptar" id="adoptar" placeholder="¿A quién estás interesado en adoptar?">
  </div>
  <div class="form-group">
    <label for="mensaje"></label>
    <textarea class="form-control" id="mensaje" rows="3" name="mensaje"  placeholder="Déjanos un mensaje, y nos pondremos en contacto contigo lo antes posible"></textarea>
  </div>
  <div>
  &nbsp
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>

</form>

<script>
  // Obtenego el valor del parámetro de URL
var queryString = window.location.search;
var urlParams = new URLSearchParams(queryString);
var objetoRecuperado = null;

// Verifico el identificador
if (urlParams.get("peticion") === "adoptar") {
  var animal=document.getElementById('adoptar');
animal.value=urlParams.get("mascota");

var parrafo = document.getElementById("miParrafo");
parrafo.innerHTML = "Formulario de adopción para <br>" +urlParams.get("mascota") +" &#x1f415;&#128008;";
}
</script>

<!--Mostrar mensaje de exito cuando ha sido enviado correctamente-->
<div id="mensaje_exito" style="display:none">
      <p style="color:#00afa1">Mensaje recibido. Muy pronto nos pondremos en contacto contigo!</p>
</div>
</div>

<!--Mensaje de error-->
<div id="mensaje_error" style="display:none">
      <p style="color:red">Ha habido un error al enviar el mensaje. Inténtalo de nuevo.</p>
</div>
</div>

<div class="container-fluid ">
	<?php 

	include_once '../inicio/footer.php';

	?>
	</div>

<!--Procesar mensaje de éxito o error-->
<script>
  document.getElementById("formulario-adopta").addEventListener("submit", function(event) {
    event.preventDefault();
    var form_data = new FormData(event.target);

    fetch(event.target.action, {
      method: 'POST',
      body: form_data
    })
    .then(response => {
      if (response.ok) {
        document.getElementById("formulario-adopta").style.display = "none";
        document.getElementById("mensaje_exito").style.display = "block";
        setTimeout(function() {
          document.getElementById("formulario-adopta").style.display = "block";
          document.getElementById("mensaje_exito").style.display = "none";
        }, 3000);
      } else {
        //throw new Error('Error al enviar el formulario');
        document.getElementById("formulario-adopta").style.display = "none";
        document.getElementById("mensaje_error").style.display = "block";
        setTimeout(function() {
          document.getElementById("formulario-adopta").style.display = "block";
          document.getElementById("mensaje_error").style.display = "none";
        }, 3000);
      }
    })
    .catch(error => console.error(error));
  });
</script>



