<?php
include 'index.html';
?>
<?php echo " $msj"?>
<div class='formulario_usuarios'>
  <form action="procesar_form_refugios.php" method="POST">
    <div class='menus-registro'>

  
  <h3>Registro de refugios</h3>
  <div class="form-group">
    <label for="nif">NIF</label>
    <input type="nif" name="nif" class="form-control" id="nif" aria-describedby="nifHelp" placeholder="Enter nif">
    <small id="nifHelp" class="form-text text-muted">We'll never share your nif with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="nom_refugio">Nombre del refugio</label>
    <input type="nom_refugio" name="nom_refugio" class="form-control" id="nom_refugio"  placeholder="Introduce tu nom_refugio">
  </div>
  <div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="direccion" name="direccion" class="form-control" id="direccion"  placeholder="Introduce tus direccion">
  </div>
  <div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="telefono" name="telefono" class="form-control" id="telefono"  placeholder="Introduce tu telefono">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <button type="submit" value="Registrarse">Registrar refugio</button>
</form>
</div>

</div>
