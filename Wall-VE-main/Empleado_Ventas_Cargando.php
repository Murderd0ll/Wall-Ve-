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


   <link rel="stylesheet" href="css/estilos_emp.css"/>
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


    

   
  <?php
  //Aquí se obtienen los datos del form
  $carga = $_POST['carga'];
  $empleado = $_POST['empleado'];
  $tiempo = $_POST['tiempo'];
  $fecha = $_POST['fecha'];
  $efectivo = $_POST['efectivo'];
  $cambio = $_POST['cambio'];
  $total = $_POST['total'];
  $estacion = $_SESSION['estacion'];
  $folio = rand(1, 1000);


  //Y si aquí pongo la consulta SQL y en el botón solo la mando a llamar?

  ?>

 


        <p id="porcentaje"></p>

        <div class="progress">
            <div class="progress-done"></div>
        </div>




        <div class="container" id="container">

  

            <!-- Button trigger modal -->
         
                <button type="buttun" id="btnCancelar" onClick="cancelar()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Finalizar
                </button>
    
            
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" ID="">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="headerCaja">
                            
                        <h5 id="ticketCompraModal">Ticket de compra</h5>
                        <h5 id="estacionModal">Estación: # <?php echo $estacion; ?>
                    
   
</h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <p class="txtModal">Folio: <?php echo $folio ?></p>
                    <p class="txtModal">Fecha: <?php echo $fecha; ?></p>
                    <p class="txtModal">Cantidad de watts: <?php echo $carga; ?> </p>
                    <p class="txtModal">Nombre del empleado: <?php echo $empleado; ?></p>
                    <p class="txtModal">Total: $<?php echo $total; ?>MXN</p>
                    <p class="txtModal">Efectivo: $<?php echo $efectivo; ?>MXN</p>
                    <p class="txtModal">Cambio: $<?php echo $cambio; ?>MXN</p>

                    </div>
                    <div class="modal-footer" id="removeFooter">
                        
                    <div class="footerModal">
                        <h2 id="gracias">¡Gracias por su compra!</h2>
                        <button class="btn btn-success" onClick="imprimirTicket(container)" id="ticketImpri">Imprimir ticket de compra</button>
                    </div>

                    </div>
                </div>
                </div>
            </div>

      </div>





    <script >




        const progress = document.querySelector(".progress-done");
const texto = document.querySelector("#porcentaje");

let finalValue = 0;
let max = 100;
let intervalId = null; // Esto es para quitar el intervalo

function changeWidth() {
  // Clamp finalValue to the range between 0 and max
  finalValue = Math.max(0, Math.min(finalValue, max)); //Revisa si está dentro de los limites

  progress.style.width = `${(finalValue / max) * 100}%`;
  texto.innerText  = `${Math.ceil((finalValue / max) * 100)}%`;
  //progress.innerText = `${Math.ceil((finalValue / max) * 100)}%`;
}

function sumarUno() {
  if (finalValue < max) { // Revisa si es menor al maximo para evitar overflow
    const numeroAleatorio = Math.floor(Math.random() * 10); 
    finalValue += numeroAleatorio;
    changeWidth();
    console.log(finalValue);
    
  } else { //Si llegó al máximo
    clearInterval(intervalId); // Lo detiene el intervalo

    //!AQUI DEBE DE MANDAR A LA BASE DE DATOS Y HACER QUE APAREZCA EL MODAL AUTOMATICAMENTE
    /*const modal = document.getElementById('exampleModal')
    const modalInstance = bootstrap.Modal.getOrCreateInstance(modal)
    modalInstance.show()
    */

  }
}


function cancelar(){
    clearInterval(intervalId);
    alert("Se ha detenido la carga del vehículo.");
   

}

changeWidth();
intervalId = setInterval(sumarUno, 1000);


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>