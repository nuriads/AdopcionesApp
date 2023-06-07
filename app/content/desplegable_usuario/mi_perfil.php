<?php include '../../index.php'; 
echo $_SESSION['rol'];
//Borro el mensaje de error si anteriormente existia
if(isset($_SESSION["mensaje_error"])){
  unset($_SESSION["mensaje_error"]);
}

?>
<?php if ($_SESSION['rol']==''|| !isset($_SESSION['rol'])) : ?>
  <h1>INICIA SESIÓN</h1>
  <?php endif; ?>
<?php if ($_SESSION['rol']=='usuario') : ?>
  
  <h1>USUARIO</h1>
  <div class="container">
    <div class="row">
      
      <div class="col-md-6">
        <h2>Mi cuenta</h2>
        <?php if (isset($_SESSION['mensaje'])) : ?>
    
      <p><?=$_SESSION['mensaje']?></p>
  
      <?php endif; ?>
  
        <div class="text-center">
          <img src="ruta/foto-de-perfil.jpg" class="rounded-circle" alt="Foto de perfil" style="width: 150px; height: 150px;">
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
      </div>
      <div class="col-md-6">
        <h2>Opciones de cuenta</h2>
        <ul class="list-group">
          <li class="list-group-item">Cambiar contraseña</li>
          <li class="list-group-item">Actualizar información</li>
          <li class="list-group-item">Cerrar sesión</li>
          <li class="list-group-item">Mis mascotas</li>
          <li class="list-group-item">Mis solicitudes de adopción</li>
          <li class="list-group-item">Mis favoritos</li>
        </ul>
      </div>
    </div>
  </div>


</body>
</html>
<?php endif; ?>

<?php if ($_SESSION['rol']=='refugio') : ?>
  <h1>REFUGIO</h1>
  <?php endif; ?>




