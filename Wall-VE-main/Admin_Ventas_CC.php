<?php
// Iniciar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario está autenticado
if (empty($_SESSION['user'])) {
    header('location: Login.php'); // Redirigir al usuario a la página de inicio de sesión
    exit; // Asegurarse de que el script se detenga después de la redirección
}

// Procesar el formulario cuando se envía
if (isset($_POST['agregarVenta'])) {
    // Obtener los datos del formulario
    $carga = $_POST['carga'];
    $empleado = $_POST['empleado'];
    $estacion = $_SESSION['estacion'];
    $folio = rand(1, 1000);
    $_SESSION['folio'] = $folio;
    $efectivo = $_POST['efectivo'];
    $cambio = $_POST['cambio'];
    $total = $_POST['total'];

    // Obtener el ID del empleado actual
    $idEmpleado = $_SESSION['user'];
    include("connection/conexion.php");

    // Consultar el ID del empleado en la base de datos
    $sql = "SELECT idEmp FROM `tusuario` WHERE idLoginEmp= '$idEmpleado'";
    $result = mysqli_query($conexion, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $idEmpleado = $row['idEmp'];

        // Realizar la inserción en la tabla tventa
        $sql2 = "INSERT INTO tventa (folioVenta, idProd, idEstacion, idEmp, fechaVenta, cantWatts, efectivoVenta, cambioVenta, totalVenta) 
                 VALUES ('$folio', '1', '$estacion', '$idEmpleado', NOW(), '$carga', '$efectivo', '$cambio', '$total')";
        $resultado = mysqli_query($conexion, $sql2);

        if ($resultado) {
            // Establecer las variables de sesión para los datos de la venta
            $_SESSION['carga'] = $carga;
            $_SESSION['empleado'] = $empleado;
            $_SESSION['fecha'] = date('Y-m-d H:i:s');
            $_SESSION['efectivo'] = $efectivo;
            $_SESSION['cambio'] = $cambio;
            $_SESSION['total'] = $total;

            // Redirigir a la página de carga exitosa
            header('location: Admin_Ventas_Cargando.php');
            exit; // Asegurarse de que el script se detenga después de la redirección
        } else {
            echo "Error al insertar en la tabla tventa: " . mysqli_error($conexion);
        }
    } else {
        echo "Error al obtener el ID del empleado: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <!-- Fuentes  -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

   <!-- Google icons -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

   <link rel="stylesheet" href="css/forms.css">


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" >


   <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/precios.css">
   <link rel="stylesheet" href="css/tarjetaoverflow.css">
  


    <title>Venta de energía | <?php echo $_SESSION ['empresa']?> </title>

    <script>
            function validarFormulario() {
                var carga = document.getElementsByName("carga")[0].value.trim();
                var efectivo = document.getElementsByName("efectivo")[0].value.trim();
                var total = document.getElementsByName("total")[0].value.trim();

                if (carga === "" || efectivo === "" ) {
                    alert("Por favor llene todos los campos.");
                    return false;
                }
                if(efectivo < total){
                    alert("El pago es inferior al total a pagar, ingrese más dinero");
                    return false;
                }

                return true;
            }
        </script>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Ventas Electrolinera</a></li>            
        </ul>
    </header>
   <!-- 
    
    <div id="subtitulo">
        <p id="seleccione">Se obtuvieron los siguientes datos</p>
    </div>
    -->


    <div class="barralateral">
        <div class="logo"></div>

            <ul class="menu" id="dropdown">

            <li class="list_btn">
                <a href="#">
                    <i class="fa-solid fa-chevron-up"></i>
                    <span>Opciones</span>
                </a>
            </li>

            <li class="activo">
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

                    <span title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad.">Copia
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



<div class="formCarga">
    <h2 class="ventaPor">Venta por carga completa.</h2>
    <form class="row g-3" autocomplete="off"  action="<?= $_SERVER['PHP_SELF'] ?>" onsubmit="return validarFormulario()" method="post">


<div class="col-md-6">
    <label for="inputCarga" class="form-label">Carga actual en el automovil</label>
    <input type="number" class="form-control" id="inputCarga" name="cargaActual" value="<?php echo $cargaCompleta = rand(1, 1000);?>">
</div>
<div class="col-md-6">
    <label for="inputCargaMax" class="form-label">Carga máxima en el automovil</label>
    <input type="number" class="form-control" id="inputCargaMax" name="cargaMax" onkeyup="calculo()">
</div>


<div class="col-md-6">

    <?php 

    

 include("connection/conexion.php");

 
    $idEs="";
     if (isset($_SESSION['estacion'])) {
        $idEs = $_SESSION['estacion'];
    } 
    
    $usuario = $_SESSION['user'];
    
    $sql = "SELECT CONCAT(nombreEmp,' ',apellidoPEmp,' ',apellidoMEmp) AS nombre_Completo
     from tusuario where idloginEmp='$usuario'";

    $resultado = mysqli_query($conexion, $sql);
    $nombre="";
    while ($consulta = mysqli_fetch_array($resultado) ) {
        $nombre= $consulta['nombre_Completo'];
    }


    
    $sql = "SELECT precioProd from tproducto where idEstacion='$idEs'";


    $resultado = mysqli_query($conexion, $sql);

    $precio="";

    while ($consulta = mysqli_fetch_array($resultado) ) {
        $precio= $consulta['precioProd'];
    }

    ?>
    <label for="inputEstacion" class="form-label">IDEstación</label>
    <input type="text" class="form-control" id="inputEstacion" value="<?php echo $idEs; ?>" readonly>
</div>

<div class="col-md-6">
    <label for="inputEmpleado" class="form-label">Empleado a cargo</label>
    <input type="text" class="form-control" id="inputEmpleado" name="empleado" value="<?php echo $nombre;?>" readonly>
</div>

<div class="col-md-6">
    <label for="inputWatts" class="form-label">Cantidad de Watts</label>
    <input type="number" class="form-control" id="inputWatts" name="carga" readonly>
</div>

<div class="col-md-6">
    <label for="inputTiempoAprox" class="form-label">Tiempo aproximado</label>
    <input type="text" class="form-control" id="inputTiempoAprox" name="tiempo" readonly>
</div>



<div class="col-md-6">
    <label for="inputFecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="inputFecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly>


</div>
<div class="col-md-6">
    <label for="inputEfectivo" class="form-label">Efectivo(MXN)</label>
    <input type="number" class="form-control" name="efectivo" id="inputEfectivo" onkeyup="dinero()">
</div>
<div class="col-md-6">
    <label for="inputCambio" class="form-label">Cambio(MXN)</label>
    <input type="text" class="form-control" name="cambio" id="inputCambio" onkeyup="dinero()" readonly>
</div>


<div class="col-md-6">
    <label for="inputTotal" class="form-label">Total a pagar(MXN)</label>
    <input type="text" class="form-control" name="total" id="inputTotal" readonly>
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary" name="agregarVenta">Autorizar carga</button>
</div>
</form>


</div>


<?php

include("connection/conexion.php"); 
$sql = "select * from tproducto where idEstacion =1";

$resultado = mysqli_query($conexion, $sql);

$filas = mysqli_fetch_assoc($resultado);

$precioProd = $filas["precioProd"];


?>
<Span id="CuadroInferior"></Span>

<p id="PrecioAct">Precio Actual</p>
<p id="PreActNum">$<?php echo $precioProd ?></p>
<p id="Watt">/Watt</p>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

</script>


<script>

function dinero(){
    var totalDinero = 0;
    efectivo = document.getElementById('inputEfectivo').value;
    cambioo = document.getElementById('inputCambio').value;
    pago = document.getElementById('inputTotal').value;
    cambioTotal = parseFloat(efectivo)-parseFloat(pago);
    console.log(cambioTotal);
    inputCambio.value = cambioTotal;
    

}
function calculo(){

    var inputCargaMax = document.getElementById('inputCargaMax').value;

    console.log(inputCargaMax);
    var inputTotall = document.getElementById('inputTotal');
    var inputWatts = document.getElementById('inputWatts');


var totalValor = 0;	

var valorWatt = <?php echo $precio; ?>;


carga = document.getElementById('inputCarga').value; //Valor de carga actual

var valorTotaaal = inputCargaMax-carga; //Lo que falta para que llenes el tanque

inputWatts.value = valorTotaaal; //

//inputTotall.value = carga;

totalValor = parseFloat(valorWatt)*parseFloat(valorTotaaal);
inputTotall.value=totalValor;
//Cambio el valor total
//inputWatts.value = totalValor;

//totalValor.value = carga;



tiempo = document.getElementById('inputTiempoAprox').value;




// Convertir del cargador, watts a kilovatios (kW)
var potenciaDeCargador = 5000;
var potenciaEnKW = potenciaDeCargador / 1000;

// Calcular el tiempo de carga en horas
var tiempoEnHoras = valorTotaaal / potenciaEnKW;

// Calcular minutos y segundos
var tiempoTotalEnMinutos = tiempoEnHoras * 60;
var horas = Math.floor(tiempoTotalEnMinutos / 60);
var minutos = Math.floor(tiempoTotalEnMinutos % 60);
var segundos = Math.floor((tiempoTotalEnMinutos * 60) % 60);

var tTotal = `Aproximadamente ${horas} hrs, ${minutos} min, ${segundos} seg`;

inputTiempoAprox.value = tTotal;


}
</script>

</body>
</html>