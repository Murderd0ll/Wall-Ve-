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
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

   <link rel="stylesheet" href="css/estilosmodal.css">
   <link rel="stylesheet" href="css/progress.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- Google icons -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


   <link rel="stylesheet" href="css/estilos.css"/>
   <link rel="stylesheet" href="css/tarjetas.css">

  


    <title>Venta de energía | Wall-VE </title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Ventas Electrolinera</a></li>            
        </ul>
    </header>
   
    <div id="subtitulo">
        <p id="seleccione">Seleccione una opción para comenzar.</p>
    </div>

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

            <li class="activo">
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
                <a href="Admin_Perfil.html">
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

include("connection/conexion.php");

$folio = $_GET["folio"];



$sql = "SELECT 
v.folioVenta AS Folio,
v.idEstacion AS IDEstacion,
u.nombreEmp AS EmpleadoACargo,
DATE_FORMAT(v.fechaVenta, '%d/%m/%y %H:%i') AS Fecha,
v.cantWatts AS CantidadWats,
v.totalVenta AS Total,	
v.efectivoVenta AS efectivo,
v.cambioVenta AS cambio

 FROM tVenta v

 INNER JOIN 
tusuario u ON v.idEmp = u.idEmp

WHERE v.folioVenta ='$folio'";



$resultado = mysqli_query($conexion, $sql);


if ($resultado) {
    // Verifica si se obtuvieron resultados
    if (mysqli_num_rows($resultado) > 0) {
        // Obtén la primera fila de resultados
        $row = mysqli_fetch_assoc($resultado);

        // Asigna los valores a variables individuales
        $folio = $row['Folio'];
        $IDEstacion = $row['IDEstacion'];
        $EmpleadoACargo = $row['EmpleadoACargo'];
        $Fecha = $row['Fecha'];
        $CantidadWats = $row['CantidadWats'];
        $Total = $row['Total'];
        $efectivo = $row['efectivo'];
        $cambio = $row['cambio'];

      
    } else {
        echo "No se encontraron resultados para el folio: $folio";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

  ?>

 




        <div class="container" id="container">

  
            
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true" ID="">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="headerCaja">
                            
                        <h5 id="ticketCompraModal">Ticket de compra</h5>
                        <h5 id="estacionModal">Estación: <?php echo $row["IDEstacion"] ?>
                    
   
</h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick="redireccion()"></button>
                    </div>
                    <div class="modal-body">

<p class="txtModal">Folio: <?php echo $folio; ?> </p>
<p class="txtModal">Fecha: <?php echo  $Fecha ?></p>
<p class="txtModal">Cantidad de watts: <?php echo $CantidadWats ?> </p>
<p class="txtModal">Nombre del empleado: <?php echo $EmpleadoACargo ?> </p>
<p class="txtModal">Total: $<?php echo $Total ?>MXN</p>
<p class="txtModal">Efectivo: $<?php echo $efectivo ?>MXN</p>
<p class="txtModal">Cambio: $<?php echo $cambio ?>MXN</p>

                    </div>
                    <div class="modal-footer" id="removeFooter">
                        
                    <div class="footerModal">
                        <h2 id="gracias">¡Gracias por su compra!</h2>
                        <button class="btn btn-success" onClick="imprimirTicket(exampleModal)" id="ticketImpri">Imprimir ticket de compra</button>
                        <button class="btn btn-success" onClick="redireccion()" id="ticketImpri">Buscar otro ticket</button>
                    </div>

                    </div>
                </div>
                </div>
            </div>

      </div>



      <script>
    function redireccion(){
        window.location.href = "./Admin_GenRepTicketIndvdl.php"
    }
</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Mostrar el modal al cargar la página
        $('#exampleModal').modal('show');
    });
</script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>