<?php
include '../../index.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/Refugio.php';
include '../../models/Usuario.php';
include '../../models/crud/funcionesCrud.php';

//Obtengo los datos del animal
$animal = getAnimal($_GET['animal']);
?>



<?php if ((isset($_SESSION['rol']) && ($_SESSION['rol']) == 'usuario') || !isset($_SESSION['rol'])) : ?>
  <h1>Zona exclusiva de refugios</h1>
<?php endif; ?>

<!--Si está iniciada sesión se muestra el formulario para que puedan subir las mascotas a la base de datos.-->
<?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'refugio') : ?>

  <div class="container">
    <h2>Mi cuenta</h2>

    <div style="height:100%" class="card ">
      <div class="card-header">Gestión de Mascotas</div>
      <div class="card-body">
        <div class='menus-contacto'>


          <!--Muestro el mensaje si se ha actualizado el perfil-->
          <?php if (isset($_SESSION["mensaje_actualización"]) && $_SESSION["mensaje_actualización"] != " ") : ?>
            <p style=" padding: 1%;
           border-radius: 5px;
           background-color: rgba(0, 255, 0, 0.15);
           color: green;
           font-size:0.9rem"><?= $_SESSION["mensaje_actualización"] ?></p>
            <!-- Borro de la sesion el mensaje para que no aparezca todo el rato-->
            <?= $_SESSION["mensaje_actualización"] = " " ?>
          <?php endif; ?>

          <!--Muestro el mensaje si NO se ha actualizado el perfil-->
          <?php if (isset($_SESSION["mensaje_error_actualización"]) && $_SESSION["mensaje_error_actualización"] != " ") : ?>
            <p style=" padding: 1%;
           border-radius: 5px;
           background-color: rgba(247, 111, 111, 0.15);
           color: red;
           font-size:0.9rem"><?= $_SESSION["mensaje_error_actualización"] ?></p>
            <!-- Borro de la sesion el mensaje para que no aparezca todo el rato-->
            <?= $_SESSION["mensaje_error_actualización"] = " " ?>
          <?php endif; ?>
          <!-- Formulario edición anumales -->
          <form id="edicionform" action="../../helpers/procesar_form_modificar_mascota.php" method="POST" enctype="multipart/form-data">
            <!-- elementos del formulario para la edición de los animales -->
            <h5 style="margin-top:15px">&#128221;Editando información de <?= $animal->nombre ?></h5><br>
            <img style="height: 50%;" src="<?php echo "../../../assets/images/mascotas/" . $animal->especie . "/" . $animal->microchip . "." . $animal->extension_imagen ?>" class="card-img-top" alt=<?= $animal->nombre ?>>

            <div class="form-group">
              <label for="nombre">Nombre mascota</label>
              <input type="text" name="nombre" class="form-control" id="nom_animal" value="<?= $animal->nombre ?>" placeholder="Nombre del animal">
            </div>
            <div class="form-group">
              <label for="microchip">Microchip</label>
              <input type="text" name="microchip" class="form-control" id="microchip" maxlength="15" value="<?= $animal->microchip ?>" readonly>
            </div>
            <div class="form-group">
              <label for="">Especie</label>
              <select onclick="ver()" class="btn btn-secondary dropdown-toggle" name="especie" id="sexo">
                <option class="dropdown-item" name="especie" value="perro" <?php if ($animal->especie == 'perro') {
                                                                              echo 'selected';
                                                                            } ?>>Perro</option>
                <option class="dropdown-item" name="especie" value="gato" <?php if ($animal->especie == 'gato') {
                                                                            echo 'selected';
                                                                          } ?>>Gato</option>
                <option class="dropdown-item" name="especie" value="conejo" <?php if ($animal->especie == 'conejo') {
                                                                              echo 'selected';
                                                                            } ?>>Conejo</option>
                <option class="dropdown-item" name="especie" value="hurón" <?php if ($animal->especie == 'hurón') {
                                                                              echo 'selected';
                                                                            } ?>>Hurón</option>
                <option class="dropdown-item" name="especie" value="ave" <?php if ($animal->especie == 'ave') {
                                                                            echo 'selected';
                                                                          } ?>>Ave</option>
                <option class="dropdown-item" name="especie" value="otro" <?php if ($animal->especie == 'otro') {
                                                                            echo 'selected';
                                                                          } ?>>Otro</option>
              </select>
            </div>
            <div class="form-group">
              <label for="raza">raza</label>
              <input type="text" name="raza" class="form-control" id="raza" value="<?= $animal->raza ?>" placeholder="Raza">
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
                <option class="dropdown-item" name="sexo" value="hembra" <?php if ($animal->sexo == 'hembra') {
                                                                            echo 'selected';
                                                                          } ?>>Hembra</option>
                <option class="dropdown-item" name="sexo" value="macho" <?php if ($animal->sexo == 'macho') {
                                                                          echo 'selected';
                                                                        } ?>>Macho</option>
              </select>
            </div>



            <div class="form-group">
              <label for="tamano">Tamaño:</label><br>
              <select class="btn btn-secondary dropdown-toggle" name="tamano" id="sexo">
                <option class="dropdown-item" value="mini" <?php if ($animal->tamano == 'mini') {
                                                              echo 'selected';
                                                            } ?>>Mini</option>
                <option class="dropdown-item" value="pequeño" <?php if ($animal->tamano == 'pequeño') {
                                                                echo 'selected';
                                                              } ?>>Pequeño</option>
                <option class="dropdown-item" value="mediano" <?php if ($animal->tamano == 'mediano') {
                                                                echo 'selected';
                                                              } ?>>Mediano</option>
                <option class="dropdown-item" value="grande" <?php if ($animal->tamano == 'grande') {
                                                                echo 'selected';
                                                              } ?>>Grande</option>
                <option class="dropdown-item" value="gigante" <?php if ($animal->tamano == 'gigante') {
                                                                echo 'selected';
                                                              } ?>>Gigante</option>
              </select>
            </div>
            <br>

            <div class="form-group">
              <label for="tamano">Peso:</label><br>
              <input type="number" name="peso" min="1" value="<?= $animal->peso ?>" placeholder="Kg (aprox)">
            </div>
            <br>
            <div class="form-group">

              <label for="formFileSm" class="form-label">Subir foto:</label>
              <input type="file" class="form-control form-control-sm" name="imagen" id="formFileSm" accept="image/jpeg" />
              <p style="font-size: smaller;">(Dejar vacío si no se quiere cambiar)</p>
            </div>
            <br>
            <div class="form-group">
              <label for="tamano">Descripción:</label><br>
              <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"><?php echo $animal->descripcion; ?></textarea>
            </div>
            <br>
            <!--Envío la extensión de la imagen para que no se borre de la base de datos si no se sube una imagen nueva-->
            <input type="hidden" name="ext_img_old" value="<?= $animal->extension_imagen ?>">


            <a href="./gestion_animales.php" class="btn boton-animales "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
              </svg>&nbsp;Cancelar</a>
            <button type="submit" class='btn btn-primary' value="Registrarse"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
                <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z" />
              </svg>&nbsp;Guardar</button>

          </form>
        </div>
<?php endif; ?>

      </div>

      <div class="card-footer">
        <a href="./gestion_animales.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
            <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
          </svg>&nbsp;Atrás</a>
      </div>

    </div>

  </div>

  </div>
  <div class="container-fluid ">
    <?php

    include_once '../inicio/footer.php';

    ?>
  </div>

  </body>

  </html>