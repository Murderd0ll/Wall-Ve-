<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(empty($_SESSION['user'])){
    header('location:Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/tweaksreportes.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" >

<link rel="stylesheet" href="Css/estilosReportes.css">
<link rel="stylesheet" href="css/estilos_emp.css"/>

<script src="./scripts/jspdf.debug.js"></script>

    <title>Gestión de reportes | Wall-VE</title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Reporte de búsqueda de ticket</a></li>            
        </ul>
    </header>


    <script>
        
    function imprimirTicket(divName) {
        var elem = document.getElementById(divName)
    
    var domClone = divName.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.style = "width: 100%;";
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
    }
    </script>



    
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
                
                <li class="activo">
                    <a href="Empleado_Reportes.html">
                        <i class="fa-regular fa-file-lines" title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas y tickets."></i>
                        <span title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas y tickets.">Reportes</span>
                    </a>
                </li>

                <li>
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
$where="";

if(isset($_GET['enviar'])){
$busqueda = $_GET['busqueda'];


if (isset($_GET['busqueda']))
{
    
    $where="WHERE idEmp LIKE'%".$busqueda."%' OR nombreEmp  LIKE'%".$busqueda."%' OR apellidoPEmp  LIKE'%".$busqueda."
    %' OR emailEmp  LIKE'%".$busqueda."%' OR direccionEmp  LIKE'%".$busqueda."%'OR telEmp  LIKE'%".$busqueda."
    %' OR fIngreso  LIKE'%".$busqueda."%' OR turnoEmp  LIKE'%".$busqueda."%' OR rolEmp  LIKE'%".$busqueda."%'";
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
            <th>Opciones</th>
            </tr>
            </thead>
                    
            <tbody>

            <?php

include("Connection/conexion.php");              
$SQL="SELECT idEmp, nombreEmp,apellidoPEmp, emailEmp,direccionEmp,telEmp,fIngreso,turnoEmp, rolEmp FROM tusuario $where";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
while($fila=mysqli_fetch_array($dato)){

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
            <td>
            <i class="fa-solid fa-ellipsis-vertical"></i>
                        <span>          </span>
                    
                    <?php echo "<a href='Admin_EditarUsuario.php?idEmp=".$fila['idEmp']. "'>Editar</a>"; ?>
                     |
                    <?php echo "<a href='Admin_EliminarUsuario.php?idEmp=".$fila['idEmp']. "' onclick='return confirmar()'>Eliminar</a>"; ?>

</td>
</tr>

<?php
}
}else{
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