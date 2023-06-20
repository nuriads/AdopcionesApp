<?php
include '../../index.php';
include '../../models/AccesoDatos.php';
include '../../models/Animal.php';
include '../../models/Refugio.php';
include '../../models/Usuario.php';
include '../../models/crud/funcionesCrud.php';

$email = $_SESSION['email'];
$user = getUser($email);
$fechaActual = getdate();
$auto = $_SERVER['PHP_SELF'];

//Borro el mensaje de error si anteriormente existia
if (isset($_SESSION["mensaje_error"])) {
  unset($_SESSION["mensaje_error"]);
}
?>
<!--Si no está iniciada la sesión-->
<?php if (!isset($_SESSION['rol']) || $_SESSION['rol'] == '') : ?>
  <h1>INICIA SESIÓN</h1>
<?php endif; ?>

<!--Perfil de Usuario Adoptante-->
<?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'usuario') : ?>
  <?php

  ?>
  <div class="container">
    <h2>Mi cuenta</h2>
    <?php if (isset($_SESSION['mensaje'])) : ?>

      <p><?= $_SESSION['mensaje'] ?></p>

    <?php endif; ?>
    <div class="row">
      <div class="col-md-4" style="height: 600px">
        <div class="card" style="height: 600px">
          <div class="card-header">Mis Datos</div>
          <div class="card-body">
            <div class="text-center">
              <img src="../../../assets/images/users/foto-user.jpg" class="rounded-circle" alt="Foto de perfil" style="width: 150px; height: 150px;">
            </div>
            <br>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" value="<?= $user->nombre ?>" readonly>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" value="<?= $user->email ?>" readonly>
            </div>
            <div class="form-group">
              <label for="telefono">Nick</label>
              <input type="phone" class="form-control" id="telefono" value="<?= $user->nick ?> " readonly>
            </div>
            <div class="form-group">
              <label for="rol">Rol</label>
              <input type="phone" class="form-control" id="telefono" value="<?php if ($_SESSION['rol'] = "usuario") {
                                                                              echo "Adoptante";
                                                                            } ?>" readonly>
            </div>
          </div>
          <div class="card-footer"><button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
              </svg>&nbsp;Editar</button></div>
        </div>

      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Mascotas favoritas</div>
          <div class="card-body">




          </div>
          <div class="card-footer"></div>
        </div>

      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">Opciones de cuenta</div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">Cambiar contraseña</li>
              <li class="list-group-item">Actualizar información</li>
              <li class="list-group-item">Mis mascotas</li>
              <li class="list-group-item">Mis solicitudes de adopción</li>
              <li class="list-group-item">Mis favoritos</li>
              <li class="list-group-item">Cerrar sesión</li>
            </ul>



          </div>
          <div class="card-footer"></div>
        </div>

      </div>

      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Preferencias de adopción</div>
          <div class="card-body">

          </div>
          <div class="card-footer"></div>
        </div>

      </div>

    </div>

  </div>
  </div>

<?php endif; ?>

<?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'refugio') : ?>
  <?php
  $refugio = getRefugio($email);
  $array_animales = getAnimalesRefugio($refugio->nif);
  if(isset($_GET["orden"])){
    $orden = $_GET["orden"];
  }

  ?>

  <div class="container">
    <h2>Mi cuenta</h2>
    <?php if (isset($_SESSION['mensaje'])) : ?>

      <p><?= $_SESSION['mensaje'] ?></p>

    <?php endif; ?>
    <div class="row">
      <div class="col-md-4" style="height: 600px">
        <div class="card" style="height: 670px">
          <div class="card-header">Mis Datos</div>
          <div class="card-body">
            <div class="text-center">
              <img src="../../../assets/images/users/pngwing.com.png" class="rounded-circle" alt="Foto de perfil" style="width: 150px; height: 150px;">
            </div>
            <br>
            <form action="" method="GET">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" value="<?= $refugio->nom_refugio ?>" <?= (!isset($orden) || $orden != "Modificar") ? "readonly" : "" ?>>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="<?= $refugio->email ?>" readonly>
              </div>
              <div class="form-group">
                <label for="rol">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" value="<?= $refugio->contrasena ?>" <?= (!isset($orden) || $orden != "Modificar") ? "readonly" : "" ?>>
              </div>
              <div class="form-group">
                <label for="rol">Web</label>
                <input class="form-control" id="web" value="<?= $refugio->web ?>" <?= (!isset($orden) || $orden != "Modificar") ? "readonly" : "" ?>>
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="phone" class="form-control" id="telefono" value="<?= $refugio->telefono ?>" <?= (!isset($orden) || $orden != "Modificar") ? "readonly" : "" ?>>
              </div>
              <div class="form-group">
                <label for="rol">Rol</label>
                <input type="phone" class="form-control" id="telefono" value="<?= $_SESSION['rol'] ?>" readonly>
              </div>
          </div>

          <div class="card-footer"><a <?php echo "href=\"" . $auto . "?orden=Modificar&id=$refugio->nif\""; ?> class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>&nbsp;Editar</a>
                <?php if (isset($orden) && $orden == "Modificar") : ?>
                <button type="submit" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save2-fill" viewBox="0 0 16 16">
                  <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z" />
                </svg>&nbsp;Guardar cambios</button>


                <?php endif; ?>
            </form>
          </div>
        </div>

      </div>
      <!---->
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Mascotas en adopción</div>
          <div class="card-body">
            <div class="container">
              <div class="row">

                <!-- Tarjeta de animal bucle -->
                <?php foreach ($array_animales as $animal) : ?>
                  <?php $ano = substr($animal->fecha_nac, 0, 4);
                  $mes = substr($animal->fecha_nac, 5, 2);
                  $dia = substr($animal->fecha_nac, 8, 2); ?>
                  <div style="height: 150px; margin-bottom:25px" class="col-md-2 gatocard">
                    <div style="height: 100%" class="card">
                      <img style="height: 100px;" src="<?php echo "../../../assets/images/mascotas/" . $animal->especie . "/" . $animal->microchip . "." . $animal->extension_imagen ?>" class="card-img-top" alt=<?= $animal->nombre ?>>
                      <div class="card-body">
                        <h5 style="font-size:1rem" class="card-title"><?= $animal->nombre ?></h5>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
            <div class="card-footer"><a href="./gestion_animales.php"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-database-fill-gear" viewBox="0 0 16 16">
                  <path d="M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z" />
                  <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Zm3.631-4.538c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>&nbsp;Gestionar</a></div>
          </div>

        </div>

      </div>
    </div>
  </div>



  </div>


  </div>

<?php endif;


?>
<div class="container-fluid ">
  <?php

  include_once '../inicio/footer.php';

  ?>
</div>