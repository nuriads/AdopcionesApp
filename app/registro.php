<?php
include 'Index.html';
?>

<div class='menus-contacto'>
  <div>
    <?php
    if(isset($msj)){
      echo "<h2>$msj</h2>";
    }
    ?>
    <h3 >¡Bienvenido/a!</h3>
    <div class="form-check form-switch" style="color: #00afa1">
      <input class="form-check-input" type="checkbox" id="usuarioSwitch" name="tipoUsuario" value="usuario" checked >
      <label class="form-check-label" for="usuarioSwitch">Quiero adoptar</label>
    </div>

    <div class="form-check form-switch" style="color: #00afa1">
      <input class="form-check-input" type="checkbox" id="refugioSwitch" name="tipoUsuario" value="refugio" >
      <label class="form-check-label" for="refugioSwitch">Soy un refugio o asociación</label>
    </div>
    <!-- Formulario para usuarios -->
    <form id="usuarioForm" style="display:none;" action="procesar_form_usuario.php" method="POST">
      <!-- elementos del formulario para usuarios -->

      <h3 >Registro de usuarios</h3>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="nombre" name="nombre" class="form-control" id="nombre" placeholder="Introduce tu nombre">
      </div>
      <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="apellidos" name="apellidos" class="form-control" id="apellidos" placeholder="Introduce tus apellidos">
      </div>
      <div class="form-group">
        <label for="nick">Nick</label>
        <input type="nick" name="nick" class="form-control" id="nick" placeholder="Introduce tu nick">
      </div>
      <!-- <div class="form-group">
    <label for="contrasena">Password</label>
    <input type="contrasena" class="form-control" id="contrasena" placeholder="Password">
    <small id="contrasena_help" name="contrasena"  class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div> -->
      <div class="form-group">
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" class="form-control" id="contrasena" required><br>
      </div>
      <div class="form-group">
        <label for="intereses">Intereses</label>
        <input type="intereses" name="intereses" class="form-control" id="intereses" placeholder="Introduce tu nick">
      </div>
      <button type="submit" value="Registrarse">Submit</button>
    </form>

    <!-- Formulario para refugios -->
    <form id="refugioForm" style="display:none;" action="procesar_form_refugios.php" method="POST">
      <!-- elementos del formulario para refugios -->
      <h3 >Registro de refugios</h3>

      <div class="form-group">
        <label for="nom_refugio">Nombre Refugio</label>
        <input type="nom_refugio" name="nom_refugio" class="form-control" id="nom_refugio" placeholder="Introduce el nombre del refugio">
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduce el email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="nif">Nif</label>
        <input type="nif" name="nif" class="form-control" id="nif" placeholder="Introduce el nif del refugio">
      </div>
      <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="direccion" name="direccion" class="form-control" id="direccion" placeholder="Introduce la dirección" required><br>
      </div>

      <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="telephone" name="telefono" class="form-control" id="telefono" placeholder="Introduce el teléfono" required><br>
      </div>
      
      <div class="form-group">
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Introduce la contraseña" required><br>
      </div>

      <button type="submit" class='btn btn-primary' value="Registrarse">Submit</button>

    </form>
  </div>
  <script>
    const usuarioSwitch = document.getElementById("usuarioSwitch");
    const refugioSwitch = document.getElementById("refugioSwitch");
    const usuarioForm = document.getElementById("usuarioForm");
    const refugioForm = document.getElementById("refugioForm");

    usuarioSwitch.addEventListener("change", () => {
      if (usuarioSwitch.checked) {
        refugioSwitch.checked = false;
        usuarioForm.style.display = "block";
        refugioForm.style.display = "none";
      } else {
        usuarioForm.style.display = "none";
      }
    });

    refugioSwitch.addEventListener("change", () => {
      if (refugioSwitch.checked) {
        usuarioSwitch.checked = false;
        refugioForm.style.display = "block";
        usuarioForm.style.display = "none";
      } else {
        refugioForm.style.display = "none";
      }
    });
  </script>