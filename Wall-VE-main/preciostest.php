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
   <link rel="stylesheet" href="css/estilosAdminPrecios.css"/>
    <title>Gestión de precios | Wall-VE</title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Modificar precios</a></li>            
        </ul>
    </header>
   

    <div class="barralateral">
        <div class="logo"></div>

        <ul class="menu" id="dropdown">

            <li class="list_btn">
                <a href="#">
                    <i class="fa-solid fa-chevron-up"></i>
                    <span>Opciones </span>
                </a>
            </li>

            <li>
                <a href="Admin_Ventas.php">
                    <i class="fa-solid fa-dollar-sign" title="Ir a la sección de ventas."></i>
                    <span title="Ir a la sección de ventas.">Ventas</span>
                </a>
            </li>

            <li class="activo">
                <a href="Admin_Precios.php?idEstacion=1">
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

            <li>
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
    
    
    
    <?php
    if (isset($_POST['editarUsuario'])) {

        $idEstacion = $_POST['idEstacion'];
        $precioProd = $_POST['precioProd'];


        $sql = "update tproducto set precioProd='" . $precioProd . "'where idEstacion ='" . $idEstacion . "'";

        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "<script language ='JavaScript'> 
                alert('Se actualizó el usuario correctamente.'); 
                location.assign('preciostest.php?idEstacion=1');
                </script>";
        } else {
            echo "<script language ='JavaScript'> 
                alert('No se actualizó el usuario.'); 
                location.assign('preciostest.php?idEstacion=1'); 
                </script>";
        }
        mysqli_close($conexion);
    } else {

        $idEstacion = $_GET['idEstacion'];
        $sql = "select * from tproducto where idEstacion ='" . $idEstacion . "'";

        $resultado = mysqli_query($conexion, $sql);

        $filas = mysqli_fetch_assoc($resultado);

        $precioProd = $filas["precioProd"];

        mysqli_close($conexion);

    ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" autocomplete="off" method="POST">
            <br>
            <div class="TEditar">

                <div class="Did">
                    <label>ID del usuario: <?php echo $idEstacion; ?></label><br><br>
                </div>

                <div class="DNombre">
                    <label>Nombre </label>
                    <input title="Ingrese su(s) nombre(s) completo(s)." type="text" name="precioProd" value="<?php echo $precioProd; ?>"> <br>
                </div>
                </div>

                <input type="hidden" name="idEstacion" value="<?php echo $idEstacion; ?>">

                

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