<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <!-- Fuentes  -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/estilos.css"/>
   <link rel="stylesheet" href="css/estilosPerfilAdmin.css"/>
    <title>Perfil | Wall-VE</title>
</head>
<body>
    <header>
        <ul class="navig">
            <li><a>Perfil</a></li>            
        </ul>
    </header>
   

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

                    <span
                        title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad.">Copia
                        de seguridad</span>
                </a>
            </li>

            <li class="activo">
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

    <div>
        <span id="containerPerfilAd"></span>
    </div>
    <div class="textbox" id="textboxNomA">
        <input type="Nombre" placeholder="Nombres Completos">
    </div>
    <span id="NombreAP">Nombre</span>
    <div class="textbox" id="textboxAP">
        <input type="Nombre" placeholder="Apellido Paterno">
    </div>
    <span id="ApellidoPAP">Apellido Paterno</span>
    <div class="textbox" id="textboxAM">
        <input type="Nombre" placeholder="Apellido Materno">
    </div>
    <span id="ApellidoMAP">Apellido Materno</span>

    <div class="textbox" id="textboxTelPer">
        <input type="Nombre" placeholder="Telefono">
    </div>
    <span id="TelefonoPer">Telefono</span>


    <div class="textbox" id="textboxCiudad">
        <input type="Nombre" placeholder="Ciudad">
    </div>
    <span id="CuidadPer">Cuidad</span>
    <div class="textbox" id="textboxDir">
        <input type="Nombre" placeholder="Direccion">
    </div>
    <span id="DireccionPer">Direccion</span>
    <div class="textbox" id="textboxEmail">
        <input type="Nombre" placeholder="Email">
    </div>
    <span id="EmailPer">Email</span>

    <span id="FechaNacPer">Fecha Nacimiento</span>
    <div class="textbox" id="textboxFechaN">
        <input type="Nombre" placeholder="Agus 26">
    </div>

    <span id="GeneroPer">Genero</span>


    <span id="TurnoPer">Turno</span>
    <div class="textbox" id="textboxTurnoP">
        <input type="Nombre" placeholder="Turno">
    </div>

    <span id="NombreUsuPer">Nombre de Usuario</span>
    <div class="textbox" id="textboxNusu">
        <input type="Nombre" placeholder="Turno">
    </div>
    <span id="ContraPer">Contraseña</span>
    <div class="textbox" id="textboxContra">
        <input type="Nombre" placeholder="***********">
    </div>

    <span id="LogotipoPer">Logotipo</span>

    <span id="ExaminarPerfilAdmin">Examinar</span>

    <span id="LineaAbajoPerAd"></span>
    
    <p id="MensajeInferiorPA">Al presionar "Cancelar" se descartaran todos los cambios que no han sido<br>
        previamente guardados</p>
    
    <p id="BtnCancelarPA">Cancelar</p>
    <p id="BtnGuardarPA">Guardar</p>

</body>
</html>