<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(empty($_SESSION['user'])){
    header('location:Login.php');
}




   
include("connection/conexion.php");


// Consulta SQL
$consulta = "SELECT rutaLogo FROM tlogo WHERE idLogo = 1";

// Ejecutar la consulta
$resultado2 = mysqli_query($conexion, $consulta);

// Guardar el resultado en una variable PHP
if ($fila = mysqli_fetch_assoc($resultado2)) {
$rutaLogo = $fila["rutaLogo"];
} else {
$rutaLogo = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fuentes  -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="Css/estilosReportes.css">
    <link rel="stylesheet" href="css/estilosAntiguo.css" />

    <script src="./scripts/jspdf.debug.js"></script>

    <title>Gestión de reportes | <?php echo $_SESSION ['empresa']?></title>
</head>

<body>
    <header>
        <ul class="navig">
            <li><a>Reporte de auditoría</a></li>
        </ul>
    </header>


<script>
      
    function crear() {
    const contenedor = document.getElementById('reporteAudit');
    const elementoTabla = document.getElementById('tablita');

    const imagen = document.createElement('img');
    imagen.id = 'logoImagenTicket';
    imagen.src = '<?php echo $rutaLogo;?>';
    imagen.style.display="inline";
    imagen.style.width ="160px";
    imagen.style.height="53px";

    // Agregar evento de carga para la imagen
    imagen.onload = function() {
        imprimirReporte();
    };

    contenedor.insertBefore(imagen, elementoTabla);
    }



    function imprimirReporte() {

        var contenido = document.getElementById("reporteAudit").innerHTML;
        

        var contenidoOriginal = document.body.innerHTML;
    
        document.body.innerHTML = contenido;
    
        window.print();
        
        document.body.innerHTML = contenidoOriginal;
        
        const elementoAEliminar = document.getElementById('logoImagenTicket');
        elementoAEliminar.remove();
       /*  var imagenLogo = document.getElementById('logoImagenTicket');
        imagenLogo.style.display="none";*/

    }
    
 // Definir la función generarPDF()
 function generarPDF() {


        var contenido = document.getElementById("reporteAudit").innerHTML;

        var img = new Image()
        img.src= "./img/logo/logo.jpg"


        var doc = new jsPDF({
        orientation: 'landscape', // Ajusta la orientación si es necesario
        unit: 'pt', // Puedes ajustar la unidad según tus necesidades
        format: [1000, 600], // Establece el tamaño de la página en puntos (en este caso, ancho: 1000pt, alto: 600pt)
        
    });
    doc.addImage(img,'PNG' ,830, 10, 160, 53)   

        
    

    doc.fromHTML(contenido, 15, 15); // No es necesario especificar el ancho

    doc.setFontSize(9);

  doc.save('reporte.pdf');
    
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

    <!-- 
    De aquí hasta lo indicado es todo lo que tiene que ver con la tabla
 -->


    <div id="toditito">
        <div class="container" id="reporteAudit">
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
                        <th scope="col" id="idR">Id</th>
                        <th scope="col" id="estacion">Tipo de proceso</th>
                        <th scope="col" id="descripcion">Descripción</th>
                        <th scope="col" id="usuarioR">Usuario</th>
                        <th scope="col" id="fecha">Fecha y Hora</th>

                    </tr>
                </thead>
                <tbody>



                    <?php

include("connection/conexion.php");
        
$desdeFecha = $_GET["desdeFecha"];
$hastaFecha = $_GET["hastaFecha"];

$desdeFechaConHora = $desdeFecha. " 00:00:00";
$hastaFechaConHora = $hastaFecha. " 23:59:59";


//Se hizo cambio, el anterior era:
/*
   $sql = "SELECT 
    a.idAudit AS 'Id',
    a.tipoProceso AS 'Tipo de proceso',
    a.descAudit AS 'Descripción',
    a.empleado AS 'Usuario',
    a.fechaAudit AS 'Fecha y hora'

     FROM tauditorias a


    WHERE a.fechaAudit BETWEEN '$desdeFechaConHora' 
    AND '$hastaFechaConHora'
    ORDER BY a.fechaAudit asc";
     */

$sql = "SELECT
  a.idAudit AS 'Id',
  a.tipoProceso AS 'Tipo de proceso',
  a.descAudit AS 'Descripción',
  a.empleado AS 'Usuario',
  DATE_FORMAT(a.fechaAudit, '%d/%m/%y %H:%i') AS 'Fecha y hora'
FROM tauditorias a
WHERE a.fechaAudit BETWEEN '$desdeFechaConHora' AND '$hastaFechaConHora'
ORDER BY a.fechaAudit asc";





    $resultado = mysqli_query($conexion, $sql);
  
        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
                    <tr>
                        <td><?php echo $row["Id"] ?></td>
                        <td><?php echo $row["Tipo de proceso"] ?></td>
                        <td><?php echo $row["Descripción"] ?></td>
                        <td><?php echo $row["Usuario"] ?></td>
                        <td><?php echo $row["Fecha y hora"] ?></td>
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

            <button type="button" class="botones" id="imprimir" onClick="crear()">
                <i class="fa fa-print" aria-hidden="true"></i>
                <span>Imprimir reporte</span>
            </button>

            </button>
        </div>
    </div>
    <!-- O creo que era hasta acá que llega la tabla xdxdxd -->

</body>

</html>