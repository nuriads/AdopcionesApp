<?php include '../../index.php'; 
echo $_SESSION['rol'];
//Borro el mensaje de error si anteriormente existia
if(isset($_SESSION["mensaje_error"])){
  unset($_SESSION["mensaje_error"]);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil del Usuario</title>
  <!-- Enlaces a los archivos de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .profile-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
    }
  </style>
</head>
<body>
<?php if (isset($_SESSION['mensaje'])) : ?>
    
    <p><?=$_SESSION['mensaje']?></p>
  
<?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="text-center mt-4">Perfil del Usuario</h1>
        <hr>
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <img src="ruta/a/la/foto_de_usuario.jpg" alt="Foto de Usuario" class="profile-img mb-3">
            </div>
            <h5 class="card-title">Información de Usuario</h5>
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" value="Nombre del usuario" disabled>
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico:</label>
              <input type="email" class="form-control" id="email" value="usuario@example.com" disabled>
            </div>
            <!-- Agrega más campos según sea necesario -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Enlaces a los archivos de JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>