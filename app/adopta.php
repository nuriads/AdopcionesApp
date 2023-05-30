<?php
include 'index.html';

echo '<div style="text-align: center; margin-top: 50px; color: #00afa1">';
echo '<h4 > Si estás interesado en ponerte en contacto con algún refugio como adoptante, rellena el siguiente formulario y nosotros haremos todo el trabajo!</h4>';
echo '</div>';
?>

<div class="container-fluid ">
  <div class='menus-contacto'>
<form action="procesar_form_adopta.php" id="formulario-adopta" method="POST" >

  <div class="form-group">
    <label for="email"></label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Escribe tu email">
    <small id="emailHelp" class="form-text text-muted">No te preocupes, no compartiremos tu e-mail con terceros.</small>
  </div>
  <div class="form-group">
    <label for="telefono"></label>
    <input type="telefono" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
  </div>
  <div class="form-group">
    <label for="mensaje"></label>
    <textarea class="form-control" id="mensaje" rows="3" name="mensaje">Déjanos un mensaje, y nos pondremos en contacto contigo lo antes posible</textarea>
  </div>
  <div>
  &nbsp
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>

</form>


<!--Mostrar mensaje de exito cuando ha sido enviado correctamente-->
<div id="mensaje_exito" style="display:none">
      <p>Mensaje recibido. Muy pronto nos pondremos en contacto contigo!</p>
</div>
</div>

<!--Mensaje de error-->
<div id="mensaje_error" style="display:none">
      <p>Ha habido un error al enviar el mensaje. Inténtalo de nuevo.</p>
</div>
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


