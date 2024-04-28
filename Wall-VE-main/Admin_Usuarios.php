<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['user'])) {
    header('location:Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript">
        function confirmar() {
            return confirm('¿Desea eliminar? No se podrán revertir los cambios.');
        }
        function toggleOptions(button) {
            var dropdownContent = button.nextElementSibling;
            if (dropdownContent.style.display === "none") {
                dropdownContent.style.display = "block";
            } else {
                dropdownContent.style.display = "none";
            }
        }
        function redireccionar(editLink, esUsuarioPropio) {
            if (esUsuarioPropio) {
                // Mostrar mensaje de aviso solo si es el propio usuario
                alert("Estás intentando editar tu propio perfil. Serás redirigido a tu perfil.");
            }
            // Redirigir inmediatamente sin esperar si es el propio usuario o no
            window.location.href = editLink;
        }
    </script>

    <!-- Fuentes  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/est.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <title>Gestión de Usuarios | Wall-VE</title>


    
</head>

<body>
    <header>
        <ul class="navig">
            <li><a>Usuarios</a></li>
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
                <a href="Admin_Precios.html">
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

                    <span title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad.">Copia
                        de seguridad</span>
                </a>
            </li>

            <li>
                <a href="Admin_Perfil.html">
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
    include("Connection/conexion.php");
    $sql = "select * from tusuario";
    $resultado = mysqli_query($conexion, $sql);
    ?>


    <div class="Usuarios">
        <div class="botones">
            <button class="btnagregar">
                <a href="Admin_AgregarUsuario.php">
                    <i class="fa-solid fa-user-plus"></i>
                    <span>Agregar nuevo usuario</span>
                </a>
            </button>
            <div class="buscarBtn">
                <form class="d-flex">
                    <form action="" method="GET">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda">
                        <button class="btnbuscar" type="submit" name="enviar" id="btnBuscarr"> <b>Buscar </b> </button>
                    </form>
            </div>
        </div>



        <?php
        include("Connection/conexion.php");
        $where = "";

        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];


            if (isset($_GET['busqueda'])) {

                $where = "WHERE idEmp LIKE'%" . $busqueda . "%' OR nombreEmp  LIKE'%" . $busqueda . "%' OR apellidoPEmp  LIKE'%" . $busqueda . "
    %' OR emailEmp  LIKE'%" . $busqueda . "%' OR direccionEmp  LIKE'%" . $busqueda . "%'OR telEmp  LIKE'%" . $busqueda . "
    %' OR fIngreso  LIKE'%" . $busqueda . "%' OR turnoEmp  LIKE'%" . $busqueda . "%' OR rolEmp  LIKE'%" . $busqueda . "%'"%' OR idloginEmp  LIKE'%" . $busqueda . ";
            }
        }

        ?>
        <br>
        </form>

        <div class="tabla-wrapper">
            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Domicilio</th>
                        <th>Telefono</th>
                        <th>Fecha Ingreso</th>
                        <th>Turno</th>
                        <th>Rol</th>
                        <th>xd</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>

                    <?php

                    include("Connection/conexion.php");
                    $SQL = "SELECT idEmp, nombreEmp,apellidoPEmp, emailEmp,direccionEmp,telEmp,fIngreso,turnoEmp, rolEmp, idloginEmp FROM tusuario $where";
                    $dato = mysqli_query($conexion, $SQL);

                    if ($dato->num_rows > 0) {
                        while ($fila = mysqli_fetch_array($dato)) {
                            
                            // Comprobamos si el ID del usuario actual coincide con el ID del usuario en esta fila
                            $idUsuarioActual = $_SESSION['user']; // User es igual al idloginEmp en la bdd (es decir, el nombre de usuario)
                            $idUsuarioFila = $fila['idloginEmp'];

                        
                            $esUsuarioPropio = ($idUsuarioActual == $idUsuarioFila);

                            // Si es el propio usuario, redirigir a Admin_Perfil.php
                            // Si no lo es, redirigir a Admin_EditarUsuario.php
                            $editLink = $esUsuarioPropio ? 'Admin_Perfil.php' : 'Admin_EditarUsuario.php';

                    ?>
                            <tr>
                                <td> <?php echo $fila['idEmp'] ?> </td>
                                <td> <?php echo $fila['nombreEmp'] ?> </td>
                                <td> <?php echo $fila['apellidoPEmp'] ?> </td>
                                <td> <?php echo $fila['emailEmp'] ?> </td>
                                <td> <?php echo $fila['direccionEmp'] ?> </td>
                                <td> <?php echo $fila['telEmp'] ?> </td>
                                <td> <?php echo $fila['fIngreso'] ?> </td>
                                <td> <?php echo $fila['turnoEmp'] ?> </td>
                                <td> <?php echo $fila['rolEmp'] ?> </td>
                                <td> <?php echo $fila['idloginEmp'] ?> </td>
                                <td>
                                <div class="dropdow">
                                <button class="dropbtn" onclick="toggleOptions(this)">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <div class="dropdow-content" style="display: none;">
                                
                                <a href='#' onclick="redireccionar('<?php echo $editLink ?>?idEmp=<?php echo $fila['idEmp'] ?>', <?php echo $esUsuarioPropio ? 'true' : 'false'; ?>)"><i class="fa-solid fa-user-pen"></i></a>                                    <a class="elim" href='Admin_EliminarUsuario.php?idEmp=<?php echo $fila['idEmp'] ?>' onclick='return confirmar()'><i class="fa-solid fa-trash-can"></i></a>
                                </div>
                            </div>
                                </td>
                            </tr>

                        <?php
                        }
                    } else {
                        ?>
                        <tr class="text-center">
                            <td colspan="16">No existen registros</td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>

        </div>

    </div>

</body>

</html>