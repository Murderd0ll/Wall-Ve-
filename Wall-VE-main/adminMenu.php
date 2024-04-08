<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    
    <link rel="stylesheet" href="./Css/drop-down.css" />
    <link rel="stylesheet" href="./Css/menu.css" />
    
</head>


<body>    
        <nav>
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>



            <a href="#"><img class="logo" src="./img/logoo.svg" alt="logo"></a>

            <ul>
                <li><a href="./adminMenu.php"  >Home</a></li>
                <li><a href="./Admin_Ventas.html"  >Ventas</a></li>
                <li><a href="./Admin_Precios.html"  >Precios</a></li>
                <li><a href="./Admin_Usuarios.php"  >Usuarios</a></li>
                <li><a href="./Admin_Reportes.html"  >Reportes</a></li>
                <li><a href="./Admin_CopiasSeg.html"  >Copias de seguridad</a></li>
                <li><a href="./Admin_Perfil.html"  >Perfil</a></li>
           </ul>

           <!-- Poner que este div sea un a de usuario nomas y que  -->
          

           <?php
           session_start();

           if (isset($_SESSION['idloginEmp'])) {
            $id = $_SESSION['idloginEmp'];
            // Ahora $idloginEmp está disponible para su uso en este script
        } else {
            echo "No se ha iniciado sesión o se ha perdido el ID de usuario.";
        }



    include("connection/conexion.php");
    $sql = "select * from tusuario where idloginEmp='" .$id."'";
    $resultado = mysqli_query($conexion, $sql);
    ?>

    <?php while($usu = mysqli_fetch_assoc($resultado))
    {
    ?>

            <button id="perfil" onclick="mostrarPersonalizacion()">
            <?php echo $usu['nombreEmp'];
                    $nombreUser = $usu['nombreEmp'];
                ?> ▼</button>
            <?php
    }
    ?>

    <?php
        mysqli_close($conexion);
        ?>

            <li id="nav-link">
            <ul class="drop-down">
                <li>
                    <a href="#" id="aPerfil">
                        <i class="fa-regular fa-id-card"> Perfil</i>
                        
                    </a>
                </li>
                <li>
                    <a href="logout.php" id="aLogout">
                    <i class="fa-solid fa-arrow-right-to-bracket"> Cerrar Sesion</i>
                        
                    </a>
                </li>   
            </ul>
        </li>
            

        </nav>




        


    </div>
    <?php
    include("connection/conexion.php");
    $sql = "select * from tusuario where idloginEmp='" .$id."'";
    $resultado = mysqli_query($conexion, $sql);
    ?>

    <?php while($usu = mysqli_fetch_assoc($resultado))
    {
    ?>

    <header class="content header">
            <div class="header-content">
                <h2 class="title">Bienvenido <span>
                    <?php echo $usu['nombreEmp'];
                    $nombreUser = $usu['nombreEmp'];
                ?></span>!</h2>
            <p>Aquí encontrará todo lo necesario para realizar ventas, gestionar su(s) estacion(es) de carga, usuarios , reportes y copias de seguridad.</p>
            </div>
    </header>
<?php
    }
    ?>

<?php
    mysqli_close($conexion);
    ?>


    <section class="content sau">  
        <h2 class="title">Menú de opciones</h2>

            <div class="box-container">


                <!--? Caja ventas -->
                    <a class="box ventas-box" id="cajaVentas" href="./Admin_Ventas.html">
                        
                        
                      
                        
                                <i class="fa fa-question-circle-o fa-2x" id="preguntaVentas" aria-hidden="true" title="En este menú, podrá gestionar las ventas. Haga click al recuadro de Ventas  para entrar."> </i>
                               
                        
                        <img src="./img/iconos/venta.png" alt="Simbolo de ventas">
                        
                        <h3>Ventas</h3>
                        <p>Realice ventas de su producto.</p>

                    </a>

                <!--? Caja precios -->
                    <a class="box precios-box" id="cajaPrecios" href="./Admin_Precios.html">
     
                        
                            <i class="fa fa-question-circle-o fa-2x" id="preguntaPrecios" aria-hidden="true" title="En este menú, podrá ver los reportes generados.Haga click al recuadro de Reportes  para entrar."></i>
                            

                        <i class="precios"></i>
                        <img src="./img/iconos/precio.png" alt="Simbolo de precio">
                        <h3>Precios</h3>
                        <p>Gestione los precios del sistema.</p>

                    </a>

                     
                <!--? Caja usuarios -->
                        <a class="box usuarios-box" id="cajaUsuarios" href="./Admin_Usuarios.php">

                            <i class="fa fa-question-circle-o fa-2x" id="preguntaUsuarios" aria-hidden="true" title="En este menú, podrá ver  su perfil y hacer cambios en él, haga clic en Perfil para entrar."></i>
    

                            <i class="usuarios"></i>
                            <img src="./img/iconos/usuarios.png" alt="Simbolo de usuarios">
                            <h3>Usuarios</h3>
                            <p>Gestione los usuarios del sistema.</p>

                        </a>

                        
                <!--? Caja reportes -->
                        <a class="box reportes-box" id="cajaReportes" href="./Admin_Reportes.html">

                            <i class="fa fa-question-circle-o fa-2x" id="preguntaReportes" aria-hidden="true" title="En este menú, podrá encontrar opciones que lo ayuden a gestionar diferentes reportes."></i>
    

                            <i class="reportes"></i>
                            <img src="./img/iconos/reportes.png" alt="Simbolo de reportes">
                            <h3>Reportes</h3>
                            <p>Gestione los reportes.</p>

                        </a>

                <!--? Caja backup -->
                    <a class="box backup-box" id="cajaBackup" href="./Admin_CopiasSeg.html">

                        <i class="fa fa-question-circle-o fa-2x" id="preguntaBackups" aria-hidden="true" title="En este menú, podrá encontrar opciones que lo ayuden a gestionar sus copias de seguridad y restauraciones."></i>

                            <i class="backup"></i>
                            <img src="./img/iconos/respaldo.png" alt="Simbolo de backup">
                            <h3>Copias de seguridad</h3>
                            <p>Gestione sus copias de seguridad.</p>

                    </a>


            </div>
    </section>


    <footer>

        <div class="logoF">
            <a href="#"><img src="./img/logoow.svg" 
                " id="logoFinal"alt="Logo"></a>
        </div>

        <div class="social">
            <h2 class="contacto">Contactanos!</h2>
            <a href="#"><img src="./img/rrss/twitter.png" alt="" srcset=""></a>
            <a href="#"><img src="./img/rrss/facebook.png" alt="" srcset=""></a>
            <a href="#"><img src="./img/rrss/linkedin.png" alt="" srcset=""></a>
            <a href="#"><img src="./img/rrss/youtube.png" alt="" srcset=""></a>
        </div>

        <p class="copyright"> &copy 2024 WALL-VE </p>
    </footer>
        
    <script>
        
        var nombreUsuario = '<?php echo $nombreUser ?>';
    </script>

    <script>
        function mostrarPersonalizacion(){
            document.getElementById("perfil").addEventListener("click", function() {
        var element = document.getElementById("nav-link");
        if (element.style.display === "none") {
            element.style.display = "inline-block"; // Mostrar el elemento si está oculto
            
            var boton = document.getElementById("perfil");
            
            boton.textContent= `${nombreUsuario} ▲`
            
        } else {
            element.style.display = "none"; // Ocultar el elemento si está visible
            var boton = document.getElementById("perfil");
            boton.textContent= `${nombreUsuario} ▼`

        }
});
    }
    </script>
</body>
</html>