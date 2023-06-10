<?php
include '../../index.php';
//Inicio sesion o recupero la sesion si ya está iniciada
?>



<?php if ((isset($_SESSION['rol']) && ($_SESSION['rol']) == 'usuario') || !isset($_SESSION['rol'])) : ?>
  <h1>Zona exclusiva de refugios</h1>
<?php endif; ?>

<!--Si no está iniciada sesión se muestra el formulario de registro para refugios o asociaciones.-->
<?php if (!isset($_SESSION['rol'])) : ?>


<?php endif; ?>
<!--Si está iniciada sesión se muestra el formulario para que puedan subir las mascotas a la base de datos.-->
<?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'refugio') : ?>

  <div class="container">
    <h2>Mi cuenta</h2>

    <div style="height:100%" class="card ">
      <div class="card-header">Gestión de Mascotas</div>
      <div class="card-body">
        <div class='menus-contacto'>
          <?php if (isset($_SESSION["mensaje_error_subida"]) && $_SESSION["mensaje_error_subida"]!="")  : ?>
             <p><?= $_SESSION['mensaje_error_subida']; ?></p>
           
            <?php endif; ?>
          <?php if (isset($_SESSION["mensaje_subida"]) && $_SESSION['mensaje_subida']!="") : ?>

            <p><?= $_SESSION['mensaje_subida']; ?></p>

          <?php endif; ?>
          <!-- Formulario para animales -->
          <form id="refugioForm" action="../../helpers/procesar_form_subirMascota.php" method="POST" enctype="multipart/form-data">
            <!-- elementos del formulario para animales -->
            <h4 style="margin-top:15px">Registro de Animales</h4>

            <div class="form-group">
              <label for="nombre">Nombre mascota</label>
              <input type="text" name="nombre" class="form-control" id="nom_animal" placeholder="Nombre del animal">
            </div>
            <div class="form-group">
              <label for="microchip">Microchip</label>
              <input type="text" name="microchip" class="form-control" id="microchip" maxlength="15" placeholder="">
            </div>
            <div class="form-group">
              <label for="">Especie</label>
              <select onclick="ver()" class="btn btn-secondary dropdown-toggle" name="especie" id="sexo">
                <option class="dropdown-item" name="especie" value="perro">Perro</option>
                <option class="dropdown-item" name="especie" value="gato">Gato</option>
                <option class="dropdown-item" name="especie" value="conejo">Conejo</option>
                <option class="dropdown-item" name="especie" value="hurón">Hurón</option>
                <option class="dropdown-item" name="especie" value="ave">Ave</option>
                <option class="dropdown-item" name="especie" value="otro">Otro</option>
              </select>
            </div>
            <div class="form-group">
              <label for="raza">raza</label>
              <input type="text" name="raza" class="form-control" id="raza" placeholder="Raza">
            </div>
            <br>
            <div class="form-group">
              <label for="raza">Fecha de nacimiento:</label>
              <input type="" id="datepicker" name="fecha" width="276" />
              <script>
                $('#datepicker').datepicker({
                  uiLibrary: 'bootstrap5'
                });

                function ver() {
                  console.log(document.getElementById('datepicker').value);
                  console.log(typeof(document.getElementById('datepicker').value));
                };
              </script>
            </div>

            <div class="form-group dropdown">
              <label for="sexo">Sexo:</label><br>
              <select onclick="ver()" class="btn btn-secondary dropdown-toggle" name="sexo" id="sexo">
                <option class="dropdown-item" name="sexo" value="hembra">Hembra</option>
                <option class="dropdown-item" name="sexo" value="macho">Macho</option>
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
              <label for="tamano">Peso:</label><br>
              <input type="number" name="peso" min="1" placeholder="Kg (aprox)">
            </div>
            <br>
            <div class="form-group">
          <label for="formFileSm" class="form-label">Subir foto:</label>
          <input  type="file" class="form-control form-control-sm" name="imagen" id="formFileSm" accept="image/jpeg"/>
</div>
            <br>
            <div class="form-group">
              <label for="tamano">Descripción:</label><br>
              <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
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