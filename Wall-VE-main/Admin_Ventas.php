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

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <!-- Google icons -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


   <link rel="stylesheet" href="css/estilos.css"/>
   <link rel="stylesheet" href="css/tarjetas.css">
   <link rel="stylesheet" href="css/tarjetaoverflow.css">

  


    <title>Venta de energía | <?php echo $_SESSION ['empresa']?> </title>
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

    <?php 
    
    
    include("connection/conexion.php");
    
    //! Cambiar idEs aquí en caso de que sea otra idEstacion
    $idEs=1;

    //? Con esto el idEstacion podrá usarse más adelante
    $_SESSION['estacion'] = $idEs;
       

    $sql = "SELECT precioProd from tproducto where idEstacion='$idEs'";


    $resultado = mysqli_query($conexion, $sql);

    $valor="";

    while ($consulta = mysqli_fetch_array($resultado) ) {
        $valor= $consulta['precioProd'];
    }


    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm ">
            
            <div class="card-body border border-primary" >
                <h5 class="card-title ">Cantidad en watts</h5>
                <p class="card-text ">
                    
                $<?php echo $valor ?>
                
                <span class="pWatt">MXN/Watt</span></p>
                <a href="./Admin_Ventas_Watts.php" class="btn btn-primary">Seleccionar</a>

            </div>

        </div>
        <div class="col-sm">
            
            <div class="card-body border border-primary" >
                <h5 class="card-title">Cantidad en moneda</h5>
                <p class="card-text ">
                    
                    $<?php echo $valor ?>
                    
                    <span class="pWatt">MXN/Watt</span></p>
                     <a href="./Admin_Ventas_Moneda.php" class="btn btn-primary">Seleccionar</a>

            </div>

        </div>
            <div class="col-sm">
            
            <div class="card-body border border-primary" id="completa" >
            <h5 class="card-title"></h5>
                <h5 class="card-title" id="cCompleta">Carga completa</h5>
                
                <a href="./Admin_Ventas_Cargando_CC.php" class="btn btn-primary">Seleccionar</a>


            </div>

        </div>
    </div>
</div>


<!--
    !

 <li class="material-symbols-outlined" id="active" id="rb1">
            radio_button_checked <p class="rbP">Selección de carga</p>
    </li> 
    <li class="material-symbols-outlined" id="rb2">
    radio_button_unchecked <p class="rbP">Detalles de pago</p>
    </li>
    <li class="material-symbols-outlined" id="rb3">
    radio_button_unchecked <p class="rbP">Proceso de carga</p>
    </li>



      <hr>

  -->
   





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>