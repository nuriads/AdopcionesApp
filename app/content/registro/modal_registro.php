<?php
//Para que incluya el index también después de procesar el formulario
if (
  strpos($_SERVER['REQUEST_URI'], '/AdopcionesApp_3.0/app/helpers/procesar_form_usuario') !== false ||
  strpos($_SERVER['REQUEST_URI'], '/AdopcionesApp_3.0/app/helpers/procesar_form_refugios') !== false
) {
  include '../index.php';
} elseif ($_SERVER['REQUEST_URI'] == '/AdopcionesApp_3.0/app/content/registro/registro.php') {
  include '../../index.php';
}
?>

<style>
  .registro-inicio-sesion {
    margin-bottom: 10px;
  }

  .registro-inicio-sesion span {
    display: inline-block;
    padding: 5px 10px;
    margin-right: 10px;
    cursor: pointer;
  }

  .registro-inicio-sesion span:hover {
   color: #8970d2;
  }


  .registro-inicio-sesion .registro-tab {
    border-bottom: 2px solid #00afa1;
  }

  .registro-inicio-sesion .inicio-sesion-tab {
    border-bottom: 2px solid transparent;
  }
  
  .botonInicioSesion{
    background-color: #00afa1;
    color: white;
    border-color: #00afa1;
    box-shadow: 2px 2px 5px #00afa1;
  }
  #error_inicio_sesion{
  padding: 5%;
  border-radius: 5px;
  background-color: rgba(247, 111, 111, 0.15);
  color: red;
  font-size:0.9rem;
}
</style>


<div class="modal fade" id="formularioModal" tabindex="-1" aria-labelledby="formularioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
      <div class='menus-contacto'>
  <div>
 
    <h3>¡Bienvenido/a!</h3>

    <?php if (isset($_SESSION['mensaje_error'])) : ?>
    <div id="error_inicio_sesion">
      <p>&#9888<?=$_SESSION['mensaje_error']?></p>
    </div>
  <?php endif; ?>
    
    <div class="registro-inicio-sesion">
      <span class="registro-tab">Registro</span>
      <span class="inicio-sesion-tab">Inicio de sesión</span>
    </div>
    <!-- Formulario Registro -->
    <div id="formRegistro">
      <div class="form-check form-switch" style="color: #00afa1">
        <input class="form-check-input" type="checkbox" id="usuarioSwitch" name="tipoUsuario" value="usuario" checked>
        <label class="form-check-label" for="usuarioSwitch">Quiero adoptar</label>
      </div>

      <div class="form-check form-switch" style="color: #00afa1">
        <input class="form-check-input" type="checkbox" id="refugioSwitch" name="tipoUsuario" value="refugio">
        <label class="form-check-label" for="refugioSwitch">Soy un refugio o asociación</label>
      </div>
      <!-- Formulario para usuarios -->
      <form id="usuarioForm" style="display:none;" action="../../helpers/procesar_form_usuario.php" method="POST">
        <!-- elementos del formulario para usuarios -->

        <h4 style="margin-top:15px">Registro de usuarios</h4>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="nombre" name="nombre" class="form-control" id="nombre" placeholder="Introduce tu nombre">
        </div>
        <div class="form-group">
          <label for="apellidos">Apellidos</label>
          <input type="apellidos" name="apellidos" class="form-control" id="apellidos" placeholder="Introduce tus apellidos">
        </div>
        <div class="form-group">
          <label for="nick">Nick</label>
          <input type="nick" name="nick" class="form-control" id="nick" placeholder="Introduce tu nick">
        </div>
        <!-- <div class="form-group">
    <label for="contrasena">Password</label>
    <input type="contrasena" class="form-control" id="contrasena" placeholder="Password">
    <small id="contrasena_help" name="contrasena"  class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div> -->
        <div class="form-group">
          <label for="contrasena">Contraseña:</label>
          <input type="password" name="contrasena" class="form-control" id="contrasena" required><br>
        </div>
        <div class="form-group">
          <label for="intereses">Intereses</label>
          <input type="intereses" name="intereses" class="form-control" id="intereses" placeholder="Introduce tu nick">
        </div>
        <button type="submit" class="btn btn-primary" value="Registrarse">Submit</button>
      </form>

      <!-- Formulario para refugios -->
      <form id="refugioForm" style="display:none;" action="../../helpers/procesar_form_refugios.php" method="POST">
        <!-- elementos del formulario para refugios -->
        <h4 style="margin-top:15px">Registro de refugios</h4>

        <div class="form-group">
          <label for="nom_refugio">Nombre Refugio</label>
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

     <!-- Formulario Inicio de sesión -->
     <div id="formSesion" style="display:none;">
                <form id="sesionForm" action="../../helpers/procesar_inicio_sesion.php" method="POST">
                   
                   <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="contrasena">Contraseña:</label>
          <input type="password" name="contrasena" class="form-control" id="contrasena" required><br>
        </div>
        
        <button type="submit" class='btn botonInicioSesion' value="Registrarse">Submit</button>
                </form>
            </div>
  </div>
</div>

  <script src="../../js/registro.js"></script>

  <script>
        // Registro e inicio de sesión
        const registroTab = document.querySelector('.registro-tab');
        const inicioSesionTab = document.querySelector('.inicio-sesion-tab');
        const registroForm = document.getElementById('formRegistro');
        const sesionForm = document.getElementById('formSesion');

        registroTab.addEventListener('click', () => {
            registroForm.style.display = 'block';
            sesionForm.style.display = 'none';
            inicioSesionTab.style.borderBottom ="2px solid transparent";
            registroTab.style.borderBottom ="2px solid #00afa1";
            
        });

        inicioSesionTab.addEventListener('click', () => {
            registroForm.style.display = 'none';
            sesionForm.style.display = 'block';
            inicioSesionTab.style.borderBottom ="2px solid #00afa1";
            registroTab.style.borderBottom ="2px solid transparent";
        });
    </script>


        <form>
          <!-- elementos del formulario -->
        </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

</body>
</html>