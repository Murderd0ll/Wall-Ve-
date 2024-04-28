<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['user'])) {
    header('location:Login.php');
}
?>
<?php
include("connection/conexion.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <!-- Fuentes  -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/estilos.css"/>
   <link rel="stylesheet" href="css/estilosPerfilAdmin.css"/>
    <title>Perfil | Wall-VE</title>
</head>
<body>
    
    <header>
        <ul class="navig">
            <li><a>Perfil</a></li>            
        </ul>
    </header>
   

    <?php
    if (isset($_POST['editarUsuario'])) {

        $usuarioActual = $_SESSION['user'];
        

        $nombreEmp = $_POST['nombreEmp'];
        $apellidoPEmp = $_POST['apellidoPEmp'];
        $apellidoMEmp = $_POST['apellidoMEmp'];
        $fechaNacEmp = $_POST['fechaNacEmp'];
        $telEmp = $_POST['telEmp'];
        $generoEmp = $_POST['generoEmp']; //!esto 
        $ciudadEmp = $_POST['ciudadEmp'];
        $direccionEmp = $_POST['direccionEmp'];
        $emailEmp = $_POST['emailEmp'];
        $turnoEmp = $_POST['turnoEmp'];
        //$rolEmp = $_POST['rolEmp']; //!esto no se ocupa
        $idloginEmp = $_POST['idloginEmp'];//?esto 
        $passEmp = $_POST['passEmp'];//?esto 

        //! SI EL USER ACTUAL DEL SESSION ES DIFERENTE AL DEL CAMPO, SE CAMBIA TODO Y SE CIERRA SESIÓN
        
        if($idloginEmp != $usuarioActual){
                
        $sql = "update tusuario set nombreEmp='" . $nombreEmp . "',apellidoPEmp='" . $apellidoPEmp . "',apellidoMEmp='" . $apellidoMEmp . "',fechaNacEmp='" . $fechaNacEmp . "',telEmp='" . $telEmp . "
        ',generoEmp='" . $generoEmp . "',ciudadEmp='" . $ciudadEmp . "',direccionEmp='" . $direccionEmp . "',emailEmp='" . $emailEmp . "',turnoEmp='" . $turnoEmp . "
        ',idloginEmp='" . $idloginEmp . "',passEmp='" . $passEmp . "'where idloginEmp ='" . $usuarioActual . "';
        
        RENAME USER '$usuarioActual'@'%' TO '$idloginEmp'@'%';
        ";

         $resultado = mysqli_multi_query($conexion, $sql);
                    
                if ($resultado) {
                    echo "<script language ='JavaScript'> 
                        alert('Se actualizó el usuario correctamente.'); 
                        location.assign('logout.php');
                        </script>";
                } else {
                    echo "<script language ='JavaScript'> 
                        alert('No se actualizó el usuario.'); 
                        location.assign('Admin_Perfil.php'); 
                        </script>";
                }

        }
        //! SI EL USER ACTUAL DEL SESSION ES IGUAL AL DEL CAMPO, SE CAMBIA TODO EXCEPTO EL USER
        else{
               
        $sql = "update tusuario set nombreEmp='" . $nombreEmp . "',apellidoPEmp='" . $apellidoPEmp . "',apellidoMEmp='" . $apellidoMEmp . "',fechaNacEmp='" . $fechaNacEmp . "',telEmp='" . $telEmp . "
        ',generoEmp='" . $generoEmp . "',ciudadEmp='" . $ciudadEmp . "',direccionEmp='" . $direccionEmp . "',emailEmp='" . $emailEmp . "',turnoEmp='" . $turnoEmp . "',passEmp='" . $passEmp . "'where idloginEmp ='" . $idloginEmp . "'";

         $resultado = mysqli_query($conexion, $sql);
                    
                if ($resultado) {
                    echo "<script language ='JavaScript'> 
                        alert('Se actualizó el usuario correctamente.'); 
                        location.assign('Admin_Perfil.php');
                        </script>";
                } else {
                    echo "<script language ='JavaScript'> 
                        alert('No se actualizó el usuario.'); 
                        location.assign('Admin_Perfil.php'); 
                        </script>";
                }



        }


        mysqli_close($conexion);
    } else {
//! jaja esto creo que no va a hacer nada XD pero lo dejo por si acaso
        $idloginEmp = $_SESSION['user'];
        
        $sql = "select * from tusuario where idloginEmp ='" . $idloginEmp . "'";
        //echo $sql;
        $resultado = mysqli_query($conexion, $sql);

        $filas = mysqli_fetch_assoc($resultado);

        $nombreEmp = $filas["nombreEmp"];
        $apellidoPEmp = $filas["apellidoPEmp"];
        $apellidoMEmp = $filas["apellidoMEmp"];
        $fechaNacEmp = $filas["fechaNacEmp"];
        $telEmp = $filas["telEmp"];
        $generoEmp = $filas["generoEmp"];
        $ciudadEmp = $filas["ciudadEmp"];
        $direccionEmp = $filas["direccionEmp"];
        $emailEmp = $filas["emailEmp"];
        $turnoEmp = $filas["turnoEmp"];
        $idloginEmp = $filas["idloginEmp"];
        $passEmp = $filas["passEmp"];

        mysqli_close($conexion);

    ?>


    <div class="barralateral">
        <div class="logo"></div>

        <ul class="menu" id="dropdown">

            <li class="list_btn">
                <a href="#">
                    <i class="fa-solid fa-chevron-up"></i>
                    <span>Opciones</span>
                </a>
            </li>

            <li>
                <a href="Admin_Ventas.php">
                    <i class="fa-solid fa-dollar-sign" title="Ir a la sección de ventas."></i>
                    <span title="Ir a la sección de ventas.">Ventas</span>
                </a>
            </li>

            <li>
                <a href="Admin_Precios.html">
                    <i class="fa-solid fa-tags" title="Ir a la sección de modificación de precios."></i>
                    <span title="Ir a la sección de modificación de precios.">Precios</span>
                </a>
            </li>

            <li>
                <a href="Admin_Usuarios.php">
                    <i class="fa-solid fa-user-group"
                        title="Ir a la sección de usuarios. Encontrará toda la información necesaria para agregar, editar o eliminar usuarios."></i>
                    <span
                        title="Ir a la sección de usuarios. Encontrará toda la información necesaria para agregar, editar o eliminar usuarios.">Usuarios</span>
                </a>
            </li>

            <li>
                <a href="Admin_Reportes.html">
                    <i class="fa-regular fa-file-lines"
                        title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas, tickets y auditorias."></i>
                    <span
                        title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas, tickets y auditorias.">Reportes</span>
                </a>
            </li>

            <li>
                <a href="Admin_CopiasSeg.php">
                    <i class="fa-solid fa-download"
                        title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad."></i>

                    <span
                        title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad.">Copia
                        de seguridad</span>
                </a>
            </li>

            <li class="activo">
                <a href="Admin_Perfil.php">
                    <i class="fa-regular fa-id-card"
                        title="Ir a su perfil. Encontrará lo necesario para modificar su información y carga de los logos de su empresa."></i>
                    <span
                        title="Ir a su perfil. Encontrará lo necesario para modificar su información y carga de los logos de su empresa.">Perfil</span>
                </a>
            </li>

            <button class="regresar">
                <a href="adminMenu.php">
                    <i class="fa-solid fa-arrow-left" title="Regresar al menú principal."></i>
                    <span title="Regresar al menú principal.">Regresar</span>
                </a>
            </button>

        </ul>
    </div>






        <form action="<?= $_SERVER['PHP_SELF'] ?>" autocomplete="off" method="POST">
    <div>
        <span id="containerPerfilAd"></span>
    </div>
    <div class="textbox" id="textboxNomA">
        <input type="Nombre" placeholder="Nombres" name="nombreEmp"  value="<?php echo $nombreEmp ?>">
    </div>
    <span id="NombreAP">Nombre</span>
    <div class="textbox" id="textboxAP">
        <input type="Nombre" placeholder="Apellido Paterno" name="apellidoPEmp"  value="<?php echo $apellidoPEmp ?>">
    </div>
    <span id="ApellidoPAP">Apellido Paterno</span>
    <div class="textbox" id="textboxAM">
        <input type="Nombre" placeholder="Apellido Materno" name="apellidoMEmp"  value="<?php echo $apellidoMEmp ?>">
    </div>
    <span id="ApellidoMAP">Apellido Materno</span>

    <div class="textbox" id="textboxTelPer">
        <input type="Nombre" placeholder="Telefono" name="telEmp"  value="<?php echo $telEmp ?>">
    </div>
    <span id="TelefonoPer">Telefono</span>


    <div class="textbox" id="textboxCiudad">
        <input type="Nombre" placeholder="Ciudad" name="ciudadEmp"  value="<?php echo $ciudadEmp ?>">
    </div>
    <span id="CuidadPer">Ciudad</span>
    <div class="textbox" id="textboxDir">
        <input type="Nombre" placeholder="Direccion" name="direccionEmp"  value="<?php echo $direccionEmp ?>">
    </div>
    <span id="DireccionPer">Direccion</span>
    <div class="textbox" id="textboxEmail">
        <input type="Nombre" placeholder="Email" name="emailEmp"  value="<?php echo $emailEmp ?>">
    </div>
    <span id="EmailPer">Email</span>

    <span id="FechaNacPer">Fecha Nacimiento</span>
    <div class="textbox" id="textboxFechaN">
        <input type="Nombre" placeholder="Agus 26" name="fechaNacEmp"  value="<?php echo $fechaNacEmp ?>">
    </div>

    <span id="GeneroPer">Genero</span>
    <div class="textbox" id="textboxGeneroEmp">
                <input type="text" name="generoEmp"  value="<?php echo $generoEmp; ?>" readonly>
    </div>

    <span id="TurnoPer">Turno</span>
    <div class="textbox" id="textboxTurnoP">
        <input type="Nombre" placeholder="Turno" name="turnoEmp"  value="<?php echo $turnoEmp ?>">
    </div>

    <span id="NombreUsuPer">Nombre de Usuario</span>
    <div class="textbox" id="textboxNusu">
        <input type="Nombre" placeholder="Turno" name="idloginEmp"  value="<?php echo $idloginEmp ?>">
    </div>
    <span id="ContraPer">Contraseña</span>
    <div class="textbox" id="textboxContra">
        <input type="password" placeholder="****" name="passEmp" value="<?php echo $passEmp?>">
    </div>

    <span id="LogotipoPer">Logotipo</span>

    <span id="ExaminarPerfilAdmin">Examinar</span>

    <span id="LineaAbajoPerAd"></span>
    
    <p id="MensajeInferiorPA">Al cambiar el nombre de usuario, se le pedirá que vuelva a iniciar sesión.<br>
    Al presionar "Cancelar" se descartaran todos los cambios que no han sido
        previamente guardados</p>
    
    <p id="BtnCancelarPA">Cancelar</p>
    <button name="editarUsuario" type="submit" id="BtnGuardarPA">Guardar</button>

    </form>
    <?php
    } ?>

</body>
</html>