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
          <input type="nom_refugio" name="nom_refugio" class="form-control" id="nom_refugio" placeholder="Nombre del animal">
        </div>
        <div class="form-group">
          <label for="">Especie</label>
          <input type="especie" name="especie" class="form-control" id="especie" aria-describedby="especieHelp" placeholder="Especie">
        </div>
        <div class="form-group">
          <label for="raza">raza</label>
          <input type="raza" name="raza" class="form-control" id="raza" placeholder="Raza">
        </div>
        <br>
        <div class="form-group">
        <label for="raza">Fecha de nacimiento:</label>
        <input id="datepicker" width="276" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
        </div>
        
        <div class="form-group dropdown">
          <label for="sexo">Sexo:</label><br>
          <select class="btn btn-secondary dropdown-toggle" name="sexo" id="sexo">
          <option class="dropdown-item" value="hembra">Hembra</option>
        <option class="dropdown-item" value="macho">Macho</option>
          </select> 
        </div>
        
       
       
        <div class="form-group">
        <label for="tamano">Tamaño:</label><br>
          <select class="btn btn-secondary dropdown-toggle" name="tamano" id="sexo">
          <option class="dropdown-item" value="mini">Mini</option>
        <option class="dropdown-item" value="pequeño">Pequeño</option>
        <option class="dropdown-item" value="mediano">Mediano</option>
        <option class="dropdown-item" value="grande">Grande</option>
        <option class="dropdown-item" value="grande">Gigante</option>
          </select> 
        </div>
        <br>

        <div class="form-group">
        <label for="tamano">Descripción:</label><br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <br>
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


