<?php 
include '../../index.php';
//Inicio sesion o recupero la sesion si ya está iniciada
?>



<?php if ((isset($_SESSION['rol'])&&($_SESSION['rol'])=='usuario')||!isset($_SESSION['rol'])): ?>
<h1>Zona exclusiva de refugios</h1>
<?php endif; ?>

    <!--Si no está iniciada sesión se muestra el formulario de registro para refugios o asociaciones.-->
    <?php if (!isset($_SESSION['rol'])) : ?>
   

    <?php endif; ?>
    <!--Si está iniciada sesión se muestra el formulario para que puedan subir las mascotas a la base de datos.-->
    <?php if (isset($_SESSION['rol'])&&$_SESSION['rol']=='refugio') : ?>

      <div class="container">
    <h2>Mi cuenta</h2>
    
        <div style ="height:100%" class="card ">
            <div class="card-header">Gestión de Mascotas</div>
            <div class="card-body">
            <div class='menus-contacto'>
<!-- Formulario para animales -->
<form id="refugioForm"  action="../../helpers/procesar_form_subirMascota.php" method="POST">
        <!-- elementos del formulario para animales -->
        <h4 style="margin-top:15px">Registro de Animales</h4>

        <div class="form-group">
          <label for="nom_refugio">Nombre mascota</label>
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
    <?php endif; ?>
    </div>

    <div class="container-fluid ">
	<?php 

	include_once '../inicio/footer.php';

	?>
	</div>
  </div>
  </div>
  </div>

</body>
</html>


