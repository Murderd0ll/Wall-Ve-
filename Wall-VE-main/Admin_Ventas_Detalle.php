
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

  


    <title>Venta de energía | Wall-VE </title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Ventas Electrolinera</a></li>            
        </ul>
    </header>
   
    <div id="subtitulo">
        <p id="seleccione">Rellene los datos para continuar</p>
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

            <li>
                <a href="Admin_Reportes.html">
                    <i class="fa-regular fa-file-lines"
                        title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas, tickets y auditorias."></i>
                    <span
                        title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas, tickets y auditorias.">Reportes</span>
                </a>
            </li>

            <li>
                <a href="Admin_CopiasSeg.html">
                    <i class="fa-solid fa-download"
                        title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad."></i>

                    <span title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad.">Copia
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



<div class="formCarga">
        <form class="row g-3">

        <div class="col-md-6">
            <label for="inputCarga" class="form-label">Cantidad de carga en Watts</label>
            <input type="float" class="form-control" id="inputCarga">
        </div>
        
        <div class="col-md-6">
            <label for="inputEstacion" class="form-label">IDEstación</label>
            <input type="number" class="form-control" id="inputEstacion">
        </div>

        <div class="col-md-6">
            <label for="inputEmpleado" class="form-label">Empleado a cargo</label>
            <input type="text" class="form-control" id="inputEmpleado" readonly>
        </div>

        <div class="col-md-6">
            <label for="inputTiempoAprox" class="form-label">Tiempo aproximado</label>
            <input type="text" class="form-control" id="inputTiempoAprox" readonly>
        </div>



        <div class="col-md-6">
            <label for="inputFecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="inputFecha" readonly>
        </div>


        <div class="col-md-6">
            <label for="inputCity" class="form-label">Total a pagar</label>
            <input type="text" class="form-control" id="inputCity">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Autorizar carga</button>
        </div>
        </form>


</div>


    <!--  
    <div class="TAgregar">

<form action="<?= $_SERVER['PHP_SELF'] ?>" autocomplete="off" method="post">

            <div class="DNombre">
                <label>Cantidad de carga en Watts </label>
                <input type="text" name="nombreEmp" placeholder="Nombres Completos"><br>
            </div>



            <div class="DTel">
                <label>Teléfono </label>
                <input type="text" name="telEmp" placeholder="Teléfono"><br>
            </div>


            <div class="DgeneroLab">
                <label>Género </label>
                <input list="generoEmp" name="generoEmp">
                <datalist id="generoEmp" name="generoEmp">
                    <option value="Masculino">
                    <option value="Femenino">
                </datalist>
            </div>


            <div class="Dciudad">
                <label>Ciudad </label>
                <input type="text" name="ciudadEmp" placeholder="Ciudad"><br>
            </div>


            <div class="DDire">
                <label>Dirección </label>
                <input type="text" name="direccionEmp" placeholder="Dirección"><br>
            </div>


            <div class="DEmail">
                <label>E-Mail </label>
                <input type="text" name="emailEmp" placeholder="E-Mail"><br>
            </div>




            <div class="botones">                    
                <div class="BotonCan">
                <a href="Admin_Usuarios.php">
                <span>Cancelar</span>
                </a>                    
                </div>
        
        <button class="BotonAgg" type="submit" name="agregarUsuario" value="Crear">
            <a>
                <span class="crear">Crear</span>                            
                <i class="fa-solid fa-user-plus"></i>
            </a>     
        </button>                   
    </div>

</form>
</div>



    -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>