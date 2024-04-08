<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <!-- Fuentes  -->
        
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
            <li><a>Reporte de Tickets</a></li>            
        </ul>
    </header>



    <script>
    

    function imprimirReporte() {
        
        var contenido = document.getElementById("reporte").innerHTML;
        var contenidoOriginal = document.body.innerHTML;
    
        document.body.innerHTML = contenido;
    
        window.print();
    
        document.body.innerHTML = contenidoOriginal;
    }
    
 // Definir la función generarPDF()
 function generarPDF() {

            var contenido = document.getElementById("reporte").innerHTML;

        var doc = new jsPDF({
        orientation: 'landscape', // Ajusta la orientación si es necesario
        unit: 'pt', // Puedes ajustar la unidad según tus necesidades
        format: [1000, 600], // Establece el tamaño de la página en puntos (en este caso, ancho: 1000pt, alto: 600pt)
        
    });
    

    doc.fromHTML(contenido, 15, 15); // No es necesario especificar el ancho

    doc.setFontSize(9);
    doc.save('reporte.pdf');
    
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
                    <a href="Empleado_Ventas.html">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <span>Ventas</span>
                    </a>
                </li>            
                
                <li class="activo">
                    <a href="Empleado_Reportes.html">
                        <i class="fa-regular fa-file-lines"></i>
                        <span>Reportes</span>
                    </a>
                </li>

                <li>
                    <a href="Empleado_Perfil.html">
                        <i class="fa-regular fa-id-card"></i>
                        <span>Perfil</span>
                    </a>
                </li>

                <button class="regresar">
                    <a href="./usuarioMenu.php">
                        <i class="fa-solid fa-arrow-left"></i>
                        <span>Regresar</span>
                    </a>

            </ul>
    </div>

<!-- 
    De aquí hasta lo indicado es todo lo que tiene que ver con la tabla
 -->


<div id="toditito">
    <div class="container" id="reporte">
        <?php
        if (isset($_GET["msg"])) {
        $msg = $_GET["msg"];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        ' . $msg . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
        ?>
   
    <table class="table table-hover text-center" id="tablita">
      <thead class="table-dark">
        <tr>
          <th scope="col">Folio</th>
          <th scope="col" id="estacion">IDEstacion</th>
          <th scope="col">Empleados</th>
          <th scope="col" id="fecha">Fecha y Hora</th>
          <th scope="col" id="watts">Cantidad Watts</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
      <tbody>

   


        <?php

include("connection/conexion.php");
        
$desdeFecha = $_GET["desdeFecha"];
$hastaFecha = $_GET["hastaFecha"];



    $sql = "SELECT 
    v.folioVenta AS Folio,
    v.idEstacion AS IDEstacion,
    u.nombreEmp AS EmpleadoACargo,
    DATE_FORMAT(v.fechaVenta, '%d/%m/%y %H:%i') AS Fecha,
    v.cantWatts AS CantidadWats,
    v.totalVenta AS Total

     FROM tVenta v

     INNER JOIN 
    tusuario u ON v.idEmp = u.idEmp

    WHERE v.fechaVenta BETWEEN '$desdeFecha' 
    AND '$hastaFecha'";




    $resultado = mysqli_query($conexion, $sql);
  
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
          <tr>
            <td><?php echo $row["Folio"] ?></td>
            <td><?php echo $row["IDEstacion"] ?></td>
            <td><?php echo $row["EmpleadoACargo"] ?></td>
            <td><?php echo $row["Fecha"] ?></td>
            <td><?php echo $row["CantidadWats"] ?></td>
            <td><?php echo $row["Total"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>




</div>
<!-- Hasta acá llega la tabla -->
<div class="botonAccion">
        
        <button type="button" class="botones" id="descargar" onClick="generarPDF()">
            <i class="fa fa-plus" aria-hidden="true"></i>
            <span>Descargar reporte</span>
            </button>

        <button type="button" class="botones" id="imprimir" onClick="imprimirReporte()">
           <i class="fa fa-print" aria-hidden="true"></i>
            <span>Imprimir reporte</span>
            </button>

        </button>
    </div>
</div>
<!-- O creo que era hasta acá que llega la tabla xdxdxd -->

</body>
</html>