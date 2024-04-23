<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(empty($_SESSION['user'])){
    header('location:Login.php');
}

// Verificar si el empleado ha iniciado sesión y tiene un ID de empleado en la sesión
if (isset($_SESSION['idEmp'])) {
  $idEmp = $_SESSION['idEmp'];

  // Consulta SQL para obtener los datos del empleado
  $sql = "SELECT * FROM nombre_de_tu_tabla WHERE idEmp = $idEmp"; // Cambia 'nombre_de_tu_tabla' según el nombre real de tu tabla

  $resultado = $conexion->query($sql);

  if ($resultado->num_rows > 0) {
    // Obtener los datos del empleado
    $empleado = $resultado->fetch_assoc();

    // Asignar los valores a variables para cada campo del formulario
    $nombreEmp = $empleado['nombreEmp'];
    $apellidoPEmp = $empleado['apellidoPEmp'];
    $apellidoMEmp = $empleado['apellidoMEmp'];
    $fechaNacEmp = $empleado['fechaNacEmp'];
    $telefonoEmp = $empleado['telefonoEmp'];
    $generoEmp = $empleado['generoEmp'];
    $ciudadEmp = $empleado['ciudadEmp'];
    $direccionEmp = $empleado['direccionEmp'];
    $emailEmp = $empleado['emailEmp'];
    $turnoEmp = $empleado['turnoEmp'];
    $rolEmp = $empleado['rolEmp'];
    $nusuarioEmp = $empleado['nusuarioEmp']; // Asumiendo que el campo en la base de datos es 'nusuarioEmp'
    // No se asigna las contraseñas porque no deben mostrarse en el formulario
  }
} else {
  // Redirigir al empleado a la página de inicio de sesión si no ha iniciado sesión
  header("Location: login.php");
  exit(); // Terminar la ejecución del script después de redirigir
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <!-- Fuentes  -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/estilos_emp.css"/>
   <link rel="stylesheet" href="css/estilos_emp_Perfil.css"/>
    <title>Perfil | Wall-VE</title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Perfil</a></li>            
        </ul>
    </header>
   

    <div class="barralateral">
        <div class="logo"></div>

        <ul class="menu" id ="dropdown">

            <li class="list_btn">
                <a href="#">
                    <i class="fa-solid fa-chevron-up"></i>
                    <span>Opciones</span>
                </a>
            </li>

            <li >
                <a href="Empleado_Ventas.php">
                    <i class="fa-solid fa-dollar-sign" title="Ir a la sección de ventas."></i>
                    <span title="Ir a la sección de ventas.">Ventas </span>
                </a>
            </li>            
            
            <li>
                <a href="Empleado_Reportes.html">
                    <i class="fa-regular fa-file-lines" title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas y tickets."></i>
                    <span title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas y tickets.">Reportes</span>
                </a>
            </li>

            <li class="activo">
                <a href="Empleado_Perfil.html">
                    <i class="fa-regular fa-id-card" title="Ir a su perfil. Encontrará lo necesario para modificar su información."></i>
                    <span title="Ir a su perfil. Encontrará lo necesario para modificar su información.">Perfil</span>
                </a>
            </li>

            <button class="regresar">
                <a href="./usuarioMenu.php">
                    <i class="fa-solid fa-arrow-left" title="Regresar al menú principal."></i>
                    <span title="Regresar al menú principal.">Regresar</span>
                </a>
            </button>

        </ul>
    </div>

    <div>
        <span id="Bienvenido">Bienvenido</span>
        <span id="usuario">USUARIO</span>
        <span id="signo">!</span>

        <p id="MarcoPerEmpl"></p>

        <p id="LineaAbajo"></p>

        <div class="textbox" id="textboxNombreEmp">
            <input type="text" placeholder="<?php echo $nombreEmpleado; ?>" readonly>
        </div>
        <p id="NombreEmp">Nombre</p>
        
        <div class="textbox" id="textboxAP">
            <input type="text" placeholder="<?php echo $apellidoPEmp; ?>" readonly>
        </div>
        <p id="ApellidoPEmp">Apellido Paterno</p>
        
        <div class="textbox" id="textboxAM">
            <input type="text" placeholder="<?php echo $apellidoMEmp; ?>" readonly>
        </div>
        <p id="ApellidoMEmp">Apellido Materno</p>
        
        <div class="textbox" id="textboxFechaNacEmp">
            <input type="text" placeholder="<?php echo $fechaNacEmp; ?>" readonly>
        </div>
        <p id="FechaNacEmp">Fecha Nacimiento</p>
        
        <div class="textbox" id="textboxTelefonoEmp">
            <input type="text" placeholder="<?php echo $telefonoEmp; ?>">
        </div>
        <p id="TelefonoEmp">Telefono</p>
        
        <div class="textbox" id="textboxGeneroEmp">
            <input type="text" placeholder="<?php echo $generoEmp; ?>">
        </div>
        <p id="GeneroEmp">Genero</p>
        
        <div class="textbox" id="textboxCiudad">
            <input type="text" placeholder="<?php echo $ciudadEmp; ?>" readonly>
        </div>
        <p id="CiudadEmp">Ciudad</p>
        
        <div class="textbox" id="textboxDireccion">
            <input type="text" placeholder="<?php echo $direccionEmp; ?>" readonly>
        </div>
        <p id="DireccionEmp">Direccion</p>
        
        <div class="textbox" id="textboxEmail">
            <input type="text" placeholder="<?php echo $emailEmp; ?>" readonly>
        </div>
        <p id="EmailEmp">Email</p>
        
        <div class="textbox" id="textboxTurno">
            <input type="text" placeholder="<?php echo $turnoEmp; ?>" readonly>
        </div>
        <p id="TurnoEmp">Turno</p>
        
        <div class="textbox" id="textboxRol">
            <input type="text" placeholder="<?php echo $rolEmp; ?>" readonly>
        </div>
        <p id="RolEmp">Rol</p>
        
        <div class="textbox" id="textboxNusuario">
            <input type="text" placeholder="<?php echo $nusuarioEmp; ?>">
        </div>
        <p id="NUsuarioEmp">Nombre de Usuario</p>
        
        <div class="textbox" id="textboxAContra">
            <input type="password" placeholder="Antigua Contraseña">
        </div>
        <p id="AContraEmp">Antigua Contraseña</p>
        
        <div class="textbox" id="textboxNContra">
            <input type="password" placeholder="Nueva Contraseña">
        </div>
        <p id="NContraEmp">Nueva Contraseña</p>

        <p id="NContraEmp">Nueva Contraseña</p>

        <p id="BtnCancelarPE">Cancelar</p>

        <p id="GuardarCamEP">Guardar Cambios</p>

        <p id="MensajeInferior">Al presionar "Cancelar"  se descartarán todos los cambios que no han sido <br>
            previamente guardados.</p>


    </div>
    
</body>
</html>