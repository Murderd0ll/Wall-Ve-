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


   <link rel="stylesheet" href="Css/estilosReportes.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   

<link rel="stylesheet" href="css/estilosAntiguo.css"/>  

    <title>Gestión de reportes | Wall-VE</title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Reportes </a></li>            
        </ul>
    </header>


             <script>

                         
                        //!Obtener id de a donde se va a mandar con el botón

                        // Obtener la cadena de búsqueda
                        const queryString = window.location.search;

                        // Eliminar el signo de interrogación inicial
                        const paramsString = queryString.substring(1); // "?Id=0" -> "Id=0"

                        // Convertir la cadena en un objeto 
                        const params = new URLSearchParams(paramsString);

                        // Obtener el valor del parámetro 'Id'
                        const id = params.get('id');

                        console.log(id); 


                function enviarFechas(){
                   
                    var desdeFecha = document.getElementById("desdeFecha").value;
                    var hastaFecha = document.getElementById("hastaFecha").value;

                    if(id==0){
                        
                    window.location.href = "Admin_GenRepVenta.php?desdeFecha=" + desdeFecha + "&hastaFecha=" + hastaFecha;
                    }
                    if(id==1){
                        
                        window.location.href = "Admin_GenRepTicket.php?desdeFecha=" + desdeFecha + "&hastaFecha=" + hastaFecha;
                    }
                    if(id==2){
                    
                    window.location.href = "Admin_GenRepAudit.php?desdeFecha=" + desdeFecha + "&hastaFecha=" + hastaFecha;
                    }

                }
            </script>



   
    <div class="todo" id="todo">
        <div id="subtitulo">
            <p>Seleccione una fecha o un rango de fechas para generar su reporte. </p>
        </div>
        
        <div class="calendario" id="desde">
            <h2>Desde</h2>
            <p>Seleccione una fecha</p>
    
                <form>
                        <input type="date" class="form-control" id="desdeFecha">
                </form>
    
                
        </div>
    
        <div class="calendario" id="hasta">
            <h2>Hasta</h2>
            <p>Seleccione una fecha</p>
    
                <form>
                        <input type="date" class="form-control" id="hastaFecha">
                </form>
    
        </div>
    
       

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

    <div class="botonAccion">
        <button type="button" class="botones" id="generar" onClick="enviarFechas()">
            <i class="fa fa-download" aria-hidden="true"></i>
            <span>Generar reporte</span>
        </button>
        
    </div>






    <!-- Esto es para obtener las fechas cada que se cambia un valor -->
            <script>



                    //Obtener fechas cada que se cambia valor


                        const desdeFechaInput = document.querySelector('#desdeFecha');
                        const hastaFechaInput = document.querySelector('#hastaFecha');

                    desdeFechaInput.addEventListener('change', (evento) => {
                    const desdeFecha = evento.target.value;

                    // Ejemplo de uso
                    console.log(`Fecha desde: ${desdeFecha}`);
                    });

                    hastaFechaInput.addEventListener('change', (evento) => {
                    const hastaFecha = evento.target.value;

                    // Ejemplo de uso
                    console.log(`Fecha hasta: ${hastaFecha}`);
                    });
            </script>


</body>
</html>