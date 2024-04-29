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
   <link rel="stylesheet" href="css/estilos.css"/>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" >
   <link rel="stylesheet" href="css/perfilUser.css"/>
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
                    <span title="Regresar al menú principal.">Volver</span>
                </a>
            </button>

        </ul>
    </div>

    <form method="POST" class="row g-2" id="formulario" >
    

    <div class="col-md-6" id="textboxNomA">
        <span id="NombreAP">Nombre</span>
        <input type="Nombre" class="izquierdo" placeholder="Nombres" name="nombreEmp"  value="<?php echo $nombreEmp ?>" readonly>
    </div>

    <div class="col-md-6 derecho" id="textboxAP">
       <span id="ApellidoPAP">Apellido Paterno</span>
        <input type="Nombre" placeholder="Apellido Paterno" name="apellidoPEmp"  value="<?php echo $apellidoPEmp ?>" readonly>
    </div>
    <div class="col-md-6" id="textboxAM">
        
        <span id="ApellidoMAP">Apellido Materno</span>
        <input type="Nombre" class="izquierdo" placeholder="Apellido Materno" name="apellidoMEmp"  value="<?php echo $apellidoMEmp ?>" readonly>
    </div>

    <div class="col-md-6 derecho" id="textboxTelPer">
      <span id="TelefonoPer">Telefono</span>
        <input type="Nombre" placeholder="Telefono" name="telefono"  value="<?php echo $telEmp ?>">
    </div>


    <div class="col-md-6" id="textboxCiudad">
    <span id="CuidadPer">Ciudad</span>
        <input type="Nombre" class="izquierdo" placeholder="Ciudad" name="ciudadEmp"  value="<?php echo $ciudadEmp ?>" readonly>
    </div>
    <div class="col-md-6 derecho" id="textboxDir">
    <span id="DireccionPer">Direccion</span>
        <input type="Nombre" placeholder="Direccion" name="direccionEmp"  value="<?php echo $direccionEmp ?>" readonly>
    </div>
    <div class="col-md-6" id="textboxEmail">
    <span id="EmailPer">Email</span>
        <input type="Nombre" class="izquierdo" placeholder="Email" name="emailEmp"  value="<?php echo $emailEmp ?>" readonly>
    </div>

    <div class="col-md-6 derecho" id="textboxFechaN">
    <span id="FechaNacPer">Fecha Nacimiento</span>
        <input type="Nombre" placeholder="Agus 26" name="fechaNacEmp"  value="<?php echo $fechaNacEmp ?>" readonly>
    </div>

    <div class="col-md-6" id="textboxGeneroEmp">
    <span id="GeneroPer">Genero</span>
                <input type="text" class="izquierdo" name="generoEmp"  value="<?php echo $generoEmp; ?>" readonly>
    </div>

    <div class="col-md-6 derecho" id="textboxTurnoP">
    <span id="TurnoPer">Turno</span>
        <input type="Nombre" placeholder="Turno" name="turnoEmp"  value="<?php echo $turnoEmp ?>" readonly>
    </div>

    <div class="col-md-6" id="textboxNusu">
    <span id="NombreUsuPer">Nombre de Usuario</span>
        <input type="Nombre" class="izquierdo" placeholder="Turno" name="nombreUsuario"  value="<?php echo $idloginEmp ?>">
    </div>

    <div class="col-md-6 derecho"  id="textboxAContra">
    <span id="AContraEmp">Antigua Contraseña</span>
        <input type="password" name="contraseniaActual" placeholder="Antigua Contraseña">
    </div>
   

    <div class="col-md-6 izquierdo"  id="textboxNContra">
    <span id="NContraEmp">Nueva Contraseña</span>
        <input type="password" id="nuevaContrasenia" name="nuevaContrasenia" placeholder="Nueva Contraseña">
    </div>

    <div class="col-md-6 derecho">
    <button  type="submit" id="GuardarCamEP">Guardar Cambios</button>
    </div>
            <!-- Botón para guardar los cambios -->
            
        </form>
        
        <p id="MensajeInferior">Al cambiar el nombre de usuario, se le pedirá que vuelva a iniciar sesión.
           </p>


<script>
    
    const passwordInput = document.getElementById('nuevaContrasenia');
    const contraseniaActualInput = document.getElementById('contraseniaActual');

    const submitButton = document.getElementById('GuardarCamEP');
    const form = document.getElementById('formulario');

    
submitButton.addEventListener('click', function(event) {
    if(contraseniaActualInput!=null){
        console.log(contraseniaActualInput);
        console.log(contraseniaActualInput.value);
                            // Verificar si la contraseña está vacía
            if (passwordInput.value === '') {
                // Prevenir el envío del formulario
                event.preventDefault();
                // Mostrar un mensaje de error
                alert('La contraseña no puede estar vacía.');
            } else {
                
                
                form.action = 'Empleado_actualizar_perfil.php'; // Reemplazar con la URL real
                // Enviar el formulario
                form.submit();
            }
    }else{

        form.action = 'Empleado_actualizar_perfil.php'; // Reemplazar con la URL real
    // Enviar el formulario
    form.submit();
    }


});
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>