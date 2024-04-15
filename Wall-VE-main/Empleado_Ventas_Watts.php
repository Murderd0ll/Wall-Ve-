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

   <!-- Google icons -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

   <link rel="stylesheet" href="css/forms.css">


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" >


   <link rel="stylesheet" href="css/estilos_emp.css"/>

  


    <title>Venta de energía | Wall-VE </title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Ventas Electrolinera</a></li>            
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

                <li >
                    <a href="Empleado_Ventas.html">
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
                    <a href="Empleado_Perfil.html">
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



<div class="formCarga">
    <h2 class="ventaPor">Venta por cantidad de Watts.</h2>
        <form class="row g-3" autocomplete="off"  action="./Empleado_Ventas_Cargando.php" method="post">

        <div class="col-md-6">
            <label for="inputCarga" class="form-label">Cantidad de carga en Watts</label>
            <input type="float" class="form-control" id="inputCarga" name="carga" onkeyup="calculo()">
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
            <label for="inputTiempoAprox" class="form-label">Tiempo aproximado</label>
            <input type="text" class="form-control" id="inputTiempoAprox" name="tiempo" readonly>
        </div>



        <div class="col-md-6">
            <label for="inputFecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="inputFecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly>
 

        </div>
        <div class="col-md-6">
            <label for="inputEfectivo" class="form-label">Efectivo(MXN)</label>
            <input type="text" class="form-control" name="efectivo" id="inputEfectivo" onkeyup="dinero()">
        </div>
        <div class="col-md-6">
            <label for="inputCambio" class="form-label">Cambio(MXN)</label>
            <input type="text" class="form-control" name="cambio" id="inputCambio" onkeyup="dinero()">
        </div>


        <div class="col-md-6">
            <label for="inputTotal" class="form-label">Total a pagar(MXN)</label>
            <input type="text" class="form-control" name="total" id="inputTotal">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Autorizar carga</button>
        </div>
        </form>


</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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


    var totalValor = 0;	
    
    var valorWatt = <?php echo $precio; ?>;
    
    
    carga = document.getElementById('inputCarga').value;
    totalValor = parseFloat(valorWatt)*parseFloat(carga);
	//Cambio el valor total
    inputTotal.value = totalValor;
 
    tiempo = document.getElementById('inputTiempoAprox').value;


     // Convertir del cargador, watts a kilovatios (kW)
     var potenciaDeCargador = 5000;
     var potenciaEnKW = potenciaDeCargador / 1000;

    // Calcular el tiempo de carga en horas
    var tiempoEnHoras = carga / potenciaEnKW;

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