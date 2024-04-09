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

    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Desea eliminar? No se podrán revertir los cambios.');
        }
        </script>

           <!-- Fuentes  -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   
   <link rel="stylesheet" href="css/est.css"/>
   <link rel="stylesheet" href="css/estilos.css"/>
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

            <ul class="menu" id ="dropdown">

                <li class="list_btn">
                    <a href="#">
                        <i class="fa-solid fa-chevron-up"></i>
                        <span>Opciones</span>
                    </a>
                </li>

                <li>
                    <a href="Admin_Ventas.html">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <span>Ventas</span>
                    </a>
                </li>
                
                <li>
                    <a href="Admin_Precios.html">
                        <i class="fa-solid fa-tags"></i>
                        <span>Precios</span>
                    </a>
                </li>

                <li  class="activo">
                    <a href="Admin_Usuarios.php">
                        <i class="fa-solid fa-user-group"></i>
                        <span>Usuarios</span>
                    </a>
                </li>

                <li>
                    <a href="Admin_Reportes.html">
                        <i class="fa-regular fa-file-lines"></i>
                        <span>Reportes</span>
                    </a>
                </li>

                <li>
                    <a href="Admin_CopiasSeg.html">
                        <i class="fa-solid fa-download"></i>

                        <span>Copia de seguridad</span>
                    </a>
                </li>

                <li>
                    <a href="Admin_Perfil.html">
                        <i class="fa-regular fa-id-card"></i>
                        <span>Perfil</span>
                    </a>
                </li>

                <button class="regresar">
                    <a href="adminMenu.php">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Regresar</span>
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