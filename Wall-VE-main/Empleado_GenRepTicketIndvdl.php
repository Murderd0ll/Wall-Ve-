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
           <!-- Fuentes  -->
<link rel="stylesheet" href="css/tweaksreportes.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" >

<link rel="stylesheet" href="Css/estilosReportes.css">
<link rel="stylesheet" href="css/estilos_emp.css"/>

<script src="./scripts/jspdf.debug.js"></script>

    <title>Gestión de reportes | <?php echo $_SESSION ['empresa']?></title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Reporte de búsqueda de ticket</a></li>            
        </ul>
    </header>


    <script>
    function validarFormulario() {
        var folioVenta = document.getElementsByName("folioVenta")[0].value.trim();

        if (folioVenta === "") {
            alert("Por favor ingrese un folio.");
            return false;
        }
        return true;
        // Llama a la función mandarFolio y retorna su resultado
      //  return mandarFolio(folioVenta);
    }

    function mandarFolio(folio) {
        // Construye la URL con el folio pasado como parámetro
        var url = "./Empleado_MostrarTicket.php?folio=" + folio;
        // Redirige a la nueva URL
        window.location.href = url;
        return false; // Esta línea es opcional dependiendo de cómo quieras manejar el evento submit
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
    if (isset($_POST['busqueda'])) {
        
        include("connection/conexion.php");

        $valorABuscar = $_POST['folioVenta'];
        $sql = "SELECT COUNT(*) FROM tventa WHERE folioVenta = '$valorABuscar'";
       

        // Ejecutar la consulta
        $resultado = mysqli_query($conexion, $sql);


        // Verificar si el valor existe
        if ($resultado) { 
            $row = mysqli_fetch_assoc($resultado);
    
            // Obtener el valor de count
            $count = $row['COUNT(*)'];
            if ($count > 0) {
                

                
                //echo "El valor '$valorABuscar' existe en la tabla. Total de registros encontrados: $count";
                header('location: Empleado_MostrarTicket.php?folio='.$valorABuscar.'');

            } else {
                //echo "El valor '$valorABuscar' no existe en la tabla.";
                
                echo "<script language ='JavaScript'>
                    alert('Error: El folio no existe, intente con otro folio por favor.');
                    location.assign('Empleado_GenRepTicketIndvdl.php');
                    </script>";
            }
        } else {
            echo "Error al ejecutar la consulta.";
        }
        
    }
    ?>



    <div class="formCarga">
    <h3 class="ventaPor">Ingrese el número de folio del ticket a buscar</h2>
        <form class="row g-3" autocomplete="off" onsubmit="return validarFormulario()" method = "post" >
            <div class="col-md-6">
                <label for="inputFolioBusqueda" class="form-label">Folio</label>
                <input type="number" class="form-control" id="inputFolioBusqueda" name="folioVenta" placeholder="Ingrese un folio aqui" >

                <button type="submit" class="botones" name="busqueda"  >
                    <i class="fa fa-plus" aria-hidden="true"></i>
                     <span>Realizar búsqueda</span>
                </button>
            </div>

        </form>


</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>