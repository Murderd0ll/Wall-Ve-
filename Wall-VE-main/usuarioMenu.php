      

          <?php
          session_start();

          if (isset($_SESSION['idloginEmp'])) {
           $id = $_SESSION['idloginEmp'];
           // Ahora $idloginEmp está disponible para su uso en este script
       } else {
           header('location:Login.php');
           //echo "No se ha iniciado sesión o se ha perdido el ID de usuario.";
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



   $sql = "select * from tusuario where idloginEmp='" .$id."'";
   $resultado = mysqli_query($conexion, $sql);
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú principal | <?php echo $_SESSION ['empresa']?></title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <link rel="stylesheet" href="/Css/intentostyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    
    
    <link rel="stylesheet" href="./Css/menuUsuario.css" />
    
</head>


<body>    
        <nav>
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>



            <a href="#"><img class="logo" src="<?php echo $rutaLogo;?>" width="160" height="53" alt="logo"></a>

            <ul>
                <li><a href="#"  >Home</a></li>
                <li><a href="./Empleado_Ventas.php"  >Ventas</a></li>
                <li><a href="./Empleado_Reportes.html"  >Reportes</a></li>
                <li><a href="./Empleado_Perfil.php"  >Perfil</a></li>
                <li>         <!-- Poner que este div sea un a de usuario nomas y que  -->
    
<div class="Cerrar">
   <span>
   <?php while($usu = mysqli_fetch_assoc($resultado))
   {
   ?>
   
           <?php echo $usu['nombreEmp'];
               ?>
           <?php
           
   }
   ?>

   <?php
       mysqli_close($conexion);
       ?>
           <a href="logout.php" id="aLogout" class="logout">
           
                       <i class="fa-solid fa-arrow-right-to-bracket"><p id="cerrarSesion">Cerrar Sesion</p></i>
                       
                       </a>
                       
                   </li>   
               </ul>
           </li>
           </span>
           </div></li>
           </ul>

  
        </nav>

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
                    ?></span>!</h2>
            <p>Aquí encontrará todo lo necesario para realizar ventas, gestionar su(s) estacion(es) de carga, usuarios, reportes y copias de seguridad.</p>
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
                    <a class="box ventas-box" id="cajaVentas" href="./Empleado_Ventas.php">
                        
                        
                      
                        
                                <i class="fa fa-question-circle-o fa-2x" id="preguntaVentas" aria-hidden="true" title="En este menú, podrá gestionar las ventas.
Haga click al recuadro de Ventas para entrar."> </i>
                               
                        
                        <img src="./img/iconos/venta.png" alt="Simbolo de ventas">
                        
                        <h3>Ventas</h3>
                        <p>Realice ventas de su producto.</p>

                    </a>

                        <!--? Caja reportes -->
                        <a class="box reportes-box" id="cajaReportes" href="./Empleado_Reportes.html">

                <i class="fa fa-question-circle-o fa-2x" id="preguntaReportes" aria-hidden="true" title="En este menú, podrá ver los reportes generados.
Haga click al recuadro de Reportes para entrar."></i>


                <i class="reportes"></i>
                <img src="./img/iconos/reportes.png" alt="Simbolo de reportes">
                <h3>Reportes</h3>
                <p>Visualizar reportes.</p>

                </a> 



                <!--? Caja usuarios -->
                        <a class="box usuarios-box" id="cajaUsuarios" href="./Empleado_Perfil.php">

                            <i class="fa fa-question-circle-o fa-2x" id="preguntaUsuarios" aria-hidden="true" title="En este menú, podrá ver  su perfil y hacer cambios en él, haga clic en Perfil para entrar."></i>
    

                            <i class="usuarios"></i>
                            <img src="./img/iconos/usuarios.png" alt="Simbolo de perfil">
                            <h3>Perfil</h3>
                            <p>Visualizar y hacer cambios en su perfil.</p>

                        </a>

                        
        

            </div>
    </section>


    <footer>

        <div class="logoF">
            <a href="#"><img src="<?php echo $rutaLogo;?>" id="logoFinal"alt="Logo"></a>
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


</body>
</html>