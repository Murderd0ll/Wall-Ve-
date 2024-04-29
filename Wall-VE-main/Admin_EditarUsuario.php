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
    <link rel="stylesheet" href="css/est.css">
    <link rel="stylesheet" href="css/estilos.css" />
    <title>Modificar Usuario| Wall-VE</title>
</head>

<body>
    <header>
        <ul class="navig">
            <li><a>Modificar Usuario</a></li>
        </ul>
    </header>


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
                <a href="Admin_Precios.php?idEstacion=1">
                    <i class="fa-solid fa-tags" title="Ir a la sección de modificación de precios."></i>
                    <span title="Ir a la sección de modificación de precios.">Precios</span>
                </a>
            </li>

            <li class="activo">
                <a href="Admin_Usuarios.php">
                    <i class="fa-solid fa-user-group" title="Ir a la sección de usuarios. Encontrará toda la información necesaria para agregar, editar o eliminar usuarios."></i>
                    <span title="Ir a la sección de usuarios. Encontrará toda la información necesaria para agregar, editar o eliminar usuarios.">Usuarios</span>
                </a>
            </li>

            <li>
                <a href="Admin_Reportes.html">
                    <i class="fa-regular fa-file-lines" title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas, tickets y auditorias."></i>
                    <span title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas, tickets y auditorias.">Reportes</span>
                </a>
            </li>

            <li>
                <a href="Admin_CopiasSeg.php">
                    <i class="fa-solid fa-download" title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad."></i>

                    <span title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad.">Copia de seguridad</span>
                </a>
            </li>

            <li>
                <a href="Admin_Perfil.php">
                    <i class="fa-regular fa-id-card" title="Ir a su perfil. Encontrará lo necesario para modificar su información y carga de los logos de su empresa."></i>
                    <span title="Ir a su perfil. Encontrará lo necesario para modificar su información y carga de los logos de su empresa.">Perfil</span>
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
    <?php
    if (isset($_POST['editarUsuario'])) {

        $idEmp = $_POST['idEmp'];
        $nombreEmp = $_POST['nombreEmp'];
        $apellidoPEmp = $_POST['apellidoPEmp'];
        $apellidoMEmp = $_POST['apellidoMEmp'];
        $fechaNacEmp = $_POST['fechaNacEmp'];
        $telEmp = $_POST['telEmp'];
        $generoEmp = $_POST['generoEmp'];
        $ciudadEmp = $_POST['ciudadEmp'];
        $direccionEmp = $_POST['direccionEmp'];
        $emailEmp = $_POST['emailEmp'];
        $turnoEmp = $_POST['turnoEmp'];
        $rolEmp = $_POST['rolEmp'];
        $idloginEmp = $_POST['idloginEmp'];
        $passEmp = $_POST['passEmp'];


        $sql = "update tusuario set nombreEmp='" . $nombreEmp . "',apellidoPEmp='" . $apellidoPEmp . "',apellidoMEmp='" . $apellidoMEmp . "',fechaNacEmp='" . $fechaNacEmp . "',telEmp='" . $telEmp . "
            ',generoEmp='" . $generoEmp . "',ciudadEmp='" . $ciudadEmp . "',direccionEmp='" . $direccionEmp . "',emailEmp='" . $emailEmp . "',turnoEmp='" . $turnoEmp . "
            ',rolEmp='" . $rolEmp . "',idloginEmp='" . $idloginEmp . "',passEmp='" . $passEmp . "'where idEmp ='" . $idEmp . "'";

        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "<script language ='JavaScript'> 
                alert('Se actualizó el usuario correctamente.'); 
                location.assign('Admin_Usuarios.php');
                </script>";
        } else {
            echo "<script language ='JavaScript'> 
                alert('No se actualizó el usuario.'); 
                location.assign('Admin_Usuarios.php'); 
                </script>";
        }
        mysqli_close($conexion);
    } else {

        $idEmp = $_GET['idEmp'];
        $sql = "select * from tusuario where idEmp ='" . $idEmp . "'";

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
        $rolEmp = $filas["rolEmp"];
        $idloginEmp = $filas["idloginEmp"];
        $passEmp = $filas["passEmp"];

        mysqli_close($conexion);

    ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" autocomplete="off" method="POST">
            <br>
            <div class="TEditar">

                <div class="Did">
                    <label>ID del usuario: <?php echo $idEmp; ?></label><br><br>
                </div>

                <div class="DNombre">
                    <label>Nombre </label>
                    <input title="Ingrese su(s) nombre(s) completo(s)." type="text" name="nombreEmp" value="<?php echo $nombreEmp; ?>"> <br>
                </div>

                <div class="DPAT">
                    <label>Apellido paterno </label>
                    <input title="Ingrese su apellido paterno." type="text" name="apellidoPEmp" value="<?php echo $apellidoPEmp; ?>"> <br>
                </div>

                <div class="DMAT">
                    <label>Apellido materno </label>
                    <input title="Ingrese su apellido materno." type="text" name="apellidoMEmp" value="<?php echo $apellidoMEmp; ?>"> <br>
                </div>

                <div class="DFecha">
                    <label>Fecha de nacimiento </label>
                    <input title="Ingrese su fecha de nacimiento." type="date" name="fechaNacEmp" value="<?php echo $fechaNacEmp; ?>"> <br>
                </div>

                <div class="DTel">
                    <label>Telefono </label>
                    <input title="Ingrese su número telefónico." type="text" name="telEmp" value="<?php echo $telEmp; ?>"> <br>
                </div>

                <div class="DgeneroLab">
                    <label>Genero </label>
                    <input title="Ingrese su genero. Para ver las demás opciones, borre la actual." list="generoEmp" name="generoEmp" placeholder="Genero" value="<?php echo $generoEmp; ?>">
                    <datalist id="generoEmp" name="generoEmp">
                        <option value="Femenino">
                        <option value="Masculino">
                    </datalist>
                </div>


                <div class="Dciudad">
                    <label>Ciudad </label>
                    <input title="Ingrese la ciudad donde reside." type="text" name="ciudadEmp" value="<?php echo $ciudadEmp; ?>"> <br>
                </div>

                <div class="DDire">
                    <label>Dirección </label>
                    <input title="Ingrese la dirección personal." type="text" name="direccionEmp" value="<?php echo $direccionEmp; ?>"> <br>
                </div>

                <div class="DEmail">
                    <label>E-Mail </label>
                    <input title="Ingrese un correo electrónico." type="text" name="emailEmp" value="<?php echo $emailEmp; ?>"> <br>
                </div>

                <div class="DTurno">
                    <label>Turno </label>
                    <input title="Ingrese su turno/horario de trabajo. Para ver las demás opciones, borre la actual." list="turnoEmp" name="turnoEmp" placeholder="Turno" value="<?php echo $turnoEmp; ?>">
                    <datalist id="turnoEmp" name="turnoEmp">
                        <option value="Matutino">
                        <option value="Vespertino">
                    </datalist>
                </div>

                <div class="DRol">
                    <label>Rol</label>
                    <input title="Ingrese su rol. Para ver las demás opciones, borre la actual." list="rolEmp" name="rolEmp" placeholder="Rol" value="<?php echo $rolEmp; ?>">
                    <datalist id="rolEmp" name="rolEmp">
                        <option value="Administrador">
                        <option value="Usuario">
                    </datalist>
                </div>

                <div class="DLogin">
                    <label>Nombre de usuario </label>
                    <input type="text" name="idloginEmp" value="<?php echo $idloginEmp; ?>"> <br>
                </div>

                <div class="DContra">
                    <label>Contraseña </label>
                    <div class="DContraINPUT">
                        <input type="password" name="passEmp" placeholder="Contraseña" id="password" value="<?php echo $passEmp; ?>">
                        <img src="img/eyeClosed.png" id="eyeicon">
                    </div>

                    <script>
                        let eyeicon = document.getElementById("eyeicon");
                        let password = document.getElementById("password");

                        eyeicon.onclick = function() {
                            if (password.type == "password") {
                                password.type = "text";
                                eyeicon.src = "img/eyeOpen.png"
                            } else {
                                password.type = "password";
                                eyeicon.src = "img/eyeClosed.png"
                            }
                        }
                    </script>
                </div>

                <input type="hidden" name="idEmp" value="<?php echo $idEmp; ?>">

                

                <div class="botones">                    
                    <div class="BotonRegresar">
                    <a href="Admin_Usuarios.php">
                    <span>Cancelar</span>
                    </a>                    
                    </div>
                    
                    <button class="BotonActualizar" type="submit" name="editarUsuario" value="Actualizar">
                        <a>
                            <span class="crear">Actualizar</span>                            
                            <i class="fa-solid fa-user-pen"></i>
                        </a>                        
                </div>

        </form>
        </div>


    <?php
    } ?>

</body>

</html>