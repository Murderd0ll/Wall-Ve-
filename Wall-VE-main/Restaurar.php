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
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/est.css" />
    <link rel="stylesheet" href="css/copiaseguridad.css" />
    <title>Copias de seguridad | <?php echo $_SESSION ['empresa']?></title>
</head>

<body>
    <header>
        <ul class="navig">
            <li><a>Copia de seguridad</a></li>
        </ul>
    </header>

    <section class="content sau">
        <h3 class="titulo">Seleccione un punto de restauración.</h3>

        <div class="box-container">

        <form id="restoreForm" action="Restore.php" method="POST" onsubmit="return validarFormulario()">
                <label>Puntos de restauración previamente creados.</label><br><br>
                <select name="restorePoint">
                    <option value="" disabled="" selected="">Seleccione un punto de restauración</option>
                    <?php
                        include_once 'Conectar.php';
                        $ruta=BACKUP_PATH;
                        if(is_dir($ruta)){
                            if($aux=opendir($ruta)){
                                while(($archivo = readdir($aux)) !== false){
                                    if($archivo!="."&&$archivo!=".."){
                                        $nombrearchivo=str_replace(".sql", "", $archivo);
                                        $nombrearchivo=str_replace("-", ":", $nombrearchivo);
                                        $ruta_completa=$ruta.$archivo;
                                        if(is_dir($ruta_completa)){
                                        }else{
                                            echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
                                        }
                                    }
                                }
                                closedir($aux);
                            }
                        }else{
                            echo $ruta." No es ruta válida";
                        }
                    ?>
                </select>
                <button type="submit" class="btnbuscar" id="btnBuscarr">Restaurar</button>
            </form>
            <div class="BotonCan">
                <a href="Admin_CopiasSeg.php">
                    <span>Regresar</span>
                </a>
            </div>
        </div>
    </section>


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

            <li class="activo">
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
    <script>
        function validarFormulario() {
            var restorePoint = document.forms["restoreForm"]["restorePoint"].value;
            if (restorePoint === "") {
                alert("Por favor, seleccione un punto de restauración.");
                return false;
            }
            return true;
        }
    </script>

</body>

</html>