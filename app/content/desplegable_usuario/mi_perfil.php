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
<?php endif; ?>

<?php if ($_SESSION['rol']=='refugio') : ?>
  <h1>REFUGIO</h1>
  <?php endif; ?>

<?php if (isset($_SESSION['mensaje'])) : ?>
    
    <p><?=$_SESSION['mensaje']?></p>
  
<?php endif; ?>
  