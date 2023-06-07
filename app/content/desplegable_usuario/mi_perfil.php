<?php 
include '../../index.php';

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
              <input type="text" class="form-control" id="nombre" value="John Doe" readonly>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" value="johndoe@example.com" readonly>
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="phone" class="form-control" id="telefono" value="1234-567-89" readonly>
            </div>
            <div class="form-group">
              <label for="rol">Rol</label>
              <input type="phone" class="form-control" id="telefono" value="<?php if ($_SESSION['rol'] = "usuario") { echo "Adoptante"; } ?>" readonly>
            </div>
          </div>
          <div class="card-footer"><button type="submit" class="btn btn-primary">Editar</button></div>
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
              <img src="../../../assets/images/users/pngwing.com.png" class="rounded-circle" alt="Foto de perfil" style="width: 150px; height: 150px;">
            </div>
            <br>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" value="John Doe" readonly>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" value="johndoe@example.com" readonly>
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="phone" class="form-control" id="telefono" value="1234-567-89" readonly>
            </div>
            <div class="form-group">
              <label for="rol">Rol</label>
              <input type="phone" class="form-control" id="telefono" value="<?= $_SESSION['rol'] ?>" readonly>
            </div>
          </div>
          <div class="card-footer"><button type="submit" class="btn btn-primary">Editar</button></div>
        </div>

      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Mascotas en adopción</div>
          <div class="card-body">

          </div>
          <div class="card-footer"><button type="submit" class="btn btn-primary">Gestionar</button></div>
        </div>

      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">Opciones de cuenta</div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">Cambiar contraseña</li>
              <li class="list-group-item">Actualizar información</li>
              <li class="list-group-item">Gestionar Mascotas en adopción</li>
              <li class="list-group-item">Mis mascotas</li>
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