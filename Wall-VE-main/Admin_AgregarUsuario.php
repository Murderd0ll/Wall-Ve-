    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['user'])) {
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
        <link rel="stylesheet" href="css/est.css" />
        <link rel="stylesheet" href="css/estilos.css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <title>Agregar usuario | <?php echo $_SESSION ['empresa']?></title>
        <script>
            function validarFormulario() {
                var nombre = document.getElementsByName("nombreEmp")[0].value.trim();
                var apellidoP = document.getElementsByName("apellidoPEmp")[0].value.trim();
                var apellidoM = document.getElementsByName("apellidoMEmp")[0].value.trim();
                var fechaN = document.getElementsByName("fechaNacEmp")[0].value.trim();
                var telefon = document.getElementsByName("telEmp")[0].value.trim();
                var generoE = document.getElementsByName("generoEmp")[0].value.trim();
                var ciudadE = document.getElementsByName("ciudadEmp")[0].value.trim();
                var direccionE = document.getElementsByName("direccionEmp")[0].value.trim();
                var email = document.getElementsByName("emailEmp")[0].value.trim();
                var turnoE = document.getElementsByName("turnoEmp")[0].value.trim();
                var rolE = document.getElementsByName("rolEmp")[0].value.trim();
                var idlogin = document.getElementsByName("idloginEmp")[0].value.trim();
                var pass = document.getElementsByName("passEmp")[0].value.trim();

                if (nombre === "" || apellidoP === "" || apellidoM === "" || fechaN === "" || telefon === "" || generoE === "" || ciudadE === "" ||  direccionE === "" || email === "" || turnoE === "" || rolE === "" ||idlogin === "" || pass === "") {
                    alert("Por favor complete todos los campos obligatorios.");
                    return false;
                }
                return true;
            }
        </script>
        <script>
        function convMayus(input) {
            input.value = input.value.toUpperCase();
        }
    </script>
    </head>

    <body>
        <header>
            <ul class="navig">
                <li><a>Agregar Usuario</a></li>
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
                    <a href="Admin_Precios.php?idEstacion=1">
                        <i class="fa-solid fa-tags" title="Ir a la sección de modificación de precios."></i>
                        <span title="Ir a la sección de modificación de precios.">Precios</span>
                    </a>
                </li>

                <li class="activo">
                    <a href="Admin_Usuarios.php">
                        <i class="fa-solid fa-user-group" title="Ir a la sección de usuarios. Encontrará toda la información necesaria para agregar, editar o eliminar usuarios."></i>
                        <span title="Ir a la sección de usuarios. Encontrará toda la información necesaria para agregar, editar o eliminar usuarios.">Usuarios</span>
                    </a>
                </li>

                <li>
                    <a href="Admin_Reportes.html">
                        <i class="fa-regular fa-file-lines" title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas, tickets y auditorias."></i>
                        <span title="Ir a la sección de reportes. Encontrará lo necesario para generar, descargar e imprimir reportes de ventas, tickets y auditorias.">Reportes</span>
                    </a>
                </li>

                <li>
                    <a href="Admin_CopiasSeg.php">
                        <i class="fa-solid fa-download" title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad."></i>

                        <span title="Ir a la sección de copias de seguridad. Encontrará lo necesario para generar y subir copias de seguridad.">Copia
                            de seguridad</span>
                    </a>
                </li>

                <li>
                    <a href="Admin_Perfil.php">
                        <i class="fa-regular fa-id-card" title="Ir a su perfil. Encontrará lo necesario para modificar su información y carga de los logos de su empresa."></i>
                        <span title="Ir a su perfil. Encontrará lo necesario para modificar su información y carga de los logos de su empresa.">Perfil</span>
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
        if (isset($_POST['agregarUsuario'])) {

            $generoEmp = "";
            $nombreEmp = $_POST['nombreEmp'];
            $apellidoPEmp = $_POST['apellidoPEmp'];
            $apellidoMEmp = $_POST['apellidoMEmp'];
            $fechaNacEmp = $_POST['fechaNacEmp'];
            $telEmp = $_POST['telEmp'];
            $generoEmp = $_POST['generoEmp'];
            $ciudadEmp = $_POST['ciudadEmp'];
            $direccionEmp = $_POST['direccionEmp'];
            $emailEmp = $_POST['emailEmp'];
            $turnoEmp = $_POST['turnoEmp'];
            $rolEmp = $_POST['rolEmp'];
            $idloginEmp = $_POST['idloginEmp'];
            $passEmp = $_POST['passEmp'];
            if (isset($_POST['generoEmp'])) {
                $generoEmp = $_POST['generoEmp'];
            } else {
                $generoEmp = "";
            }

            include("connection/conexion.php");

            $sql = "insert into tusuario(nombreEmp,apellidoPEmp,apellidoMEmp,fechaNacEmp,telEmp,generoEmp,ciudadEmp,direccionEmp,emailEmp,
                turnoEmp,rolEmp,idloginEmp,passEmp, fIngreso) values ('" . $nombreEmp . "','" . $apellidoPEmp . "','" . $apellidoMEmp . "','" . $fechaNacEmp . "'
                ,'" . $telEmp . "','" . $generoEmp . "','" . $ciudadEmp . "','" . $direccionEmp . "','" . $emailEmp . "','" . $turnoEmp . "','" . $rolEmp . "'
                ,'" . $idloginEmp . "','" . $passEmp . "',NOW());
                
                CREATE USER '" . $idloginEmp . "'@'%' IDENTIFIED BY '';
                GRANT ALL PRIVILEGES ON *.* TO '" . $idloginEmp . "'@'%' WITH GRANT OPTION;
                ";

            $resultado = mysqli_multi_query($conexion, $sql);

            if ($resultado) {
                echo " <script language ='JavaScript'>
                    alert('Se ha agregado un nuevo usuario a la BDD.');
                    location.assign('Admin_Usuarios.php');
                    </script>";
            } else {
                echo "<script language ='JavaScript'>
                    alert('Error, NO se ha agregado un nuevo usuario a la BDD.');
                    location.assign('Admin_Usuarios.php');
                    </script>";
            }

            mysqli_close($conexion);
        } else {
        ?>
            <div class="TAgregar">

                <form action="<?= $_SERVER['PHP_SELF'] ?>" autocomplete="off" method="post" onsubmit="return validarFormulario()">

                    <div class="DNombre">
                        <label>Nombre </label>
                        <input type="text" name="nombreEmp" placeholder="Nombres Completos" oninput="convMayus(this)"><br>
                    </div>


                    <div class="DPAT">
                        <label>Apellido paterno </label>
                        <input type="text" name="apellidoPEmp" placeholder="Apellido Paterno" oninput="convMayus(this)"><br>
                    </div>


                    <div class="DMAT">
                        <label>Apellido materno </label>
                        <input type="text" name="apellidoMEmp" placeholder="Apellido Materno" oninput="convMayus(this)"><br>
                    </div>


                    <div class="DFecha">
                        <label>Fecha de nacimiento </label>
                        <input type="date" name="fechaNacEmp"><br>
                    </div>


                    <div class="DTel">
                        <label>Teléfono </label>
                        <input type="text" name="telEmp" placeholder="Teléfono"><br>
                    </div>


                    <div class="DgeneroLab">
                        <label>Género </label>
                        <input list="generoEmp" name="generoEmp">
                        <datalist id="generoEmp" name="generoEmp">
                            <option value="MASCULINO">
                            <option value="FEMENINO">
                        </datalist>
                    </div>


                    <div class="Dciudad">
                        <label>Ciudad </label>
                        <input type="text" name="ciudadEmp" placeholder="Ciudad" oninput="convMayus(this)"><br>
                    </div>


                    <div class="DDire">
                        <label>Dirección </label>
                        <input type="text" name="direccionEmp" placeholder="Dirección" oninput="convMayus(this)"><br>
                    </div>


                    <div class="DEmail">
                        <label>E-Mail </label>
                        <input type="text" name="emailEmp" placeholder="E-Mail" oninput="convMayus(this)"><br>
                    </div>


                    <div class="DTurno">
                        <label>Turno </label>
                        <input list="turnoEmp" name="turnoEmp">
                        <datalist id="turnoEmp" name="turnoEmp">
                            <option value="MATUTINO">
                            <option value="VESPERTINO">
                        </datalist>
                    </div>


                    <div class="DRol">
                        <label>Rol </label>
                        <input list="rolEmp" name="rolEmp">
                        <datalist id="rolEmp" name="rolEmp">
                            <option value="Administrador">
                            <option value="Usuario">
                        </datalist>
                    </div>


                    <div class="DLogin">
                        <label>Nombre de usuario </label>
                        <input type="text" name="idloginEmp" placeholder="Nombre de usuario"><br>
                    </div>


                    <div class="DContra">
                        <label>Contraseña </label>
                        <div class="DContraINPUT">
                            <input type="password" name="passEmp" placeholder="Contraseña" id="password">
                            <img src="img/eyeClosed.png" id="eyeicon">
                        </div>
                    </div>

                    <script>
                        let eyeicon = document.getElementById("eyeicon");
                        let password = document.getElementById("password");

                        eyeicon.onclick = function() {
                            if (password.type == "password") {
                                password.type = "text";
                                eyeicon.src = "img/eyeOpen.png"
                            } else {
                                password.type = "password";
                                eyeicon.src = "img/eyeClosed.png"
                            }
                        }
                    </script>


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

        <?php
        }
        ?>


    </body>

    </html>