<?php 
include '../../index.php';
// Inicio de sesión o recuperación de la sesión si ya está iniciada
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class='menus-contacto'>
<?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'usuario') : ?>
    <h1>Zona exclusiva de refugios</h1>
<?php endif; ?>

<?php if (!isset($_SESSION['rol'])) : ?>
    <!-- Formulario para refugios -->
    <form id="refugioForm" action="../../helpers/procesar_form_refugios.php" method="POST">
        <!-- elementos del formulario para refugios -->
        <h4 style="margin-top:15px">Registro de refugios</h4>

        <div class="form-group">
            <label for="nom_refugio">Nombre Refugio</label>
            <input type="text" name="nom_refugio" class="form-control" id="nom_refugio" placeholder="Introduce el nombre del refugio">
        </div>
        <!-- Resto de los campos del formulario -->

        <button type="submit" class='btn btn-primary' value="Registrarse">Submit</button>
    </form>
<?php endif; ?>

<?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'refugio') : ?>
    <!-- Formulario para animales -->
    <form id="refugioForm" action="../../helpers/procesar_form_subirMascota.php" method="POST" enctype="multipart/form-data">
        <!-- elementos del formulario para animales -->
        <h4 style="margin-top:15px">Registro de Animales</h4>

        <div class="form-group">
            <label for="microchip">Microchip</label>
            <input type="text" name="microchip" class="form-control" id="microchip" placeholder="Introduce el número de microchip">
        </div>
        <!-- Resto de los campos del formulario -->

        <div class="form-group">
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" class="form-control" id="imagen" required><br>
        </div>

        <button type="submit" class='btn btn-primary' value="Registrarse">Submit</button>
    </form>
<?php endif; ?>
</div>

<div class="container-fluid">
    <?php include_once '../inicio/footer.php'; ?>
</div>

</body>
</html>
