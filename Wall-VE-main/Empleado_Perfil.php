<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(empty($_SESSION['user'])){
    header('location:Login.php');
}
include("connection/conexion.php");

// Verificar si el empleado ha iniciado sesión y tiene un ID de empleado en la sesión
if (isset($_SESSION['idloginEmp'])) {
    $idEmp = $_SESSION['idloginEmp'];

    // Consulta SQL para obtener los datos del empleado
    $sql = "SELECT * FROM tusuario WHERE idloginEmp = '$idEmp'";

    $resultado = mysqli_query($conexion,$sql);

    if ($resultado) { // Verificar si la consulta se ejecutó correctamente
        if (mysqli_num_rows($resultado) > 0) {
        // Obtener los datos del empleado
        $empleado = mysqli_fetch_assoc($resultado);

        // Asignar los valores a variables para cada campo del  formulario
        $nombreEmp = $empleado['nombreEmp'];
        $apellidoPEmp = $empleado['apellidoPEmp'];
        $apellidoMEmp = $empleado['apellidoMEmp'];
        $fechaNacEmp = $empleado['fechaNacEmp'];
        $telEmp = $empleado['telEmp'];
        $generoEmp = $empleado['generoEmp'];
        $ciudadEmp = $empleado['ciudadEmp'];
        $direccionEmp = $empleado['direccionEmp'];
        $emailEmp = $empleado['emailEmp'];
        $turnoEmp = $empleado['turnoEmp'];
        $rolEmp = $empleado['rolEmp'];
        $idloginEmp = $empleado['idloginEmp'];
        }
    }


    
    $sql = "SELECT telEmp,passEmp FROM tusuario WHERE idloginEmp = '$idEmp'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
    
        // Guardar el valor de passEmp en una variable
        $telEmp = $row["telEmp"];
        $passEmp = $row["passEmp"];
    } else {
        echo "No se encontraron resultados de telefono";
    }


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
                <a href="Empleado_Perfil.php">
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
        <span id="usuario">Editar perfil</span>

        <p id="MarcoPerEmpl"></p>

        <p id="LineaAbajo"></p>

        <div class="textbox" id="textboxNombreEmp">
            <input type="text" value="<?php echo $nombreEmp; ?>" readonly>
        </div>
        <p id="NombreEmp">Nombre</p>
        
        <div class="textbox" id="textboxAP">
            <input type="text" value="<?php echo $apellidoPEmp; ?>" readonly>
        </div>
        <p id="ApellidoPEmp">Apellido Paterno</p>
        
        <div class="textbox" id="textboxAM">
            <input type="text" value="<?php echo $apellidoMEmp; ?>" readonly>
        </div>
        <p id="ApellidoMEmp">Apellido Materno</p>
        
        <div class="textbox" id="textboxFechaNacEmp">
            <input type="text" value="<?php echo $fechaNacEmp; ?>" readonly>
        </div>
        <p id="FechaNacEmp">Fecha Nacimiento</p>
        
        <div class="textbox" id="textboxCiudad">
            <input type="text" value="<?php echo $ciudadEmp; ?>" readonly>
        </div>
        <p id="CiudadEmp">Ciudad</p>
        
        <div class="textbox" id="textboxDireccion">
            <input type="text" value="<?php echo $direccionEmp; ?>" readonly>
        </div>
        <p id="DireccionEmp">Direccion</p>
        
        <div class="textbox" id="textboxEmail">
            <input type="text" value="<?php echo $emailEmp; ?>" readonly>
        </div>
        <p id="EmailEmp">Email</p>
        
        <div class="textbox" id="textboxTurno">
            <input type="text" value="<?php echo $turnoEmp; ?>" readonly>
        </div>
        <p id="TurnoEmp">Turno</p>
        
        <div class="textbox" id="textboxRol">
            <input type="text" value="<?php echo $rolEmp; ?>" readonly>
        </div>
        <p id="RolEmp">Rol</p>

        <p id="BtnCancelarPE">Cancelar</p>

        <form method="POST" action="Empleado_actualizar_perfil.php">
            <!-- Nombre de Usuario (editable) -->
            <div class="textbox" id="textboxNusuario">
                <input type="text" name="nombreUsuario" value="<?php echo $idloginEmp; ?>">
            </div>
            <p id="NUsuarioEmp">Nombre de Usuario</p>

            <!-- Contraseña Actual (necesaria para validar cambios) -->
            <div class="textbox" id="textboxAContra">
                <input type="password" name="contraseniaActual" placeholder="Antigua Contraseña">
            </div>
            <p id="AContraEmp">Antigua Contraseña</p>

            <!-- Nueva Contraseña (editable) -->
            <div class="textbox" id="textboxNContra">
                <input type="password" name="nuevaContrasenia" placeholder="Nueva Contraseña">
            </div>
            <p id="NContraEmp">Nueva Contraseña</p>

            <!-- Teléfono (editable) -->
            <div class="textbox" id="textboxTelefonoEmp">
                <input type="text" name="telefono" value="<?php echo $telEmp; ?>">
            </div>
            <p id="TelefonoEmp">Teléfono</p>

            <!-- Género (editable) -->
            <div class="textbox" id="textboxGeneroEmp">
                <input type="text" name="genero" value="<?php echo $generoEmp; ?>" readonly>
            </div>
            <p id="GeneroEmp">Genero</p>

            <!-- Botón para guardar los cambios -->
            <button type="submit" id="GuardarCamEP">Guardar Cambios</button>
        </form>
        
        <p id="MensajeInferior">Al cambiar el nombre de usuario, se le pedirá que vuelva a iniciar sesión.<br>
            Al presionar "Cancelar"  se descartarán todos los cambios que no han sido 
            previamente guardados.</p>



    </div>
    
</body>
</html>