<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['user'])) {
    header('location:Login.php');
}
?>
<?php
include("connection/conexion.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <!-- Fuentes  -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/estilos.css"/>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" >
   
   <link rel="stylesheet" href="css/perfilAdmin.css">
   
   <!-- <link rel="stylesheet" href="css/estilosPerfilAdmin.css"/> -->
    <title>Perfil | <?php echo $_SESSION ['empresa']?></title>
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




    <?php
    if (isset($_POST['editarUsuario'])) {
        
        $usuarioActual = $_SESSION['user'];
        

        $nombreEmp = $_POST['nombreEmp'];
        $apellidoPEmp = $_POST['apellidoPEmp'];
        $apellidoMEmp = $_POST['apellidoMEmp'];
        $fechaNacEmp = $_POST['fechaNacEmp'];
        $telEmp = $_POST['telEmp'];
        $generoEmp = $_POST['generoEmp']; //!esto 
        $ciudadEmp = $_POST['ciudadEmp'];
        $direccionEmp = $_POST['direccionEmp'];
        $emailEmp = $_POST['emailEmp'];
        $turnoEmp = $_POST['turnoEmp'];
        //$rolEmp = $_POST['rolEmp']; //!esto no se ocupa
        $idloginEmp = $_POST['idloginEmp'];//?esto 
        $passEmp = $_POST['passEmp'];//?esto 

        $nomEmpresa = $_POST['nomEmpresa'];
        //! SI EL USER ACTUAL DEL SESSION ES DIFERENTE AL DEL CAMPO, SE CAMBIA TODO Y SE CIERRA SESIÓN
        
        if($idloginEmp != $usuarioActual){

            if (!empty($_FILES['subirLogo']['name'])) {
                echo "<script language ='JavaScript'> 
        console.log('a.'); 
        
        </script>";

            $ruta = "./img/logo/";
            $fichero = $ruta.basename($_FILES['subirLogo']['name']);
            $rutaFinal = $ruta."logo.jpg";
            if(move_uploaded_file($_FILES['subirLogo']['tmp_name'],$ruta."logo.jpg")){
              
        $sql = "update tusuario set nombreEmp='" . $nombreEmp . "',apellidoPEmp='" . $apellidoPEmp . "',apellidoMEmp='" . $apellidoMEmp . "',fechaNacEmp='" . $fechaNacEmp . "',telEmp='" . $telEmp . "
        ',generoEmp='" . $generoEmp . "',ciudadEmp='" . $ciudadEmp . "',direccionEmp='" . $direccionEmp . "',emailEmp='" . $emailEmp . "',turnoEmp='" . $turnoEmp . "
        ',idloginEmp='" . $idloginEmp . "',passEmp='" . $passEmp . "'where idloginEmp ='" . $usuarioActual . "';
        
       
        UPDATE tlogo SET nomEmpresa='$nomEmpresa' WHERE idLogo=1;

        UPDATE tlogo SET rutaLogo='$rutaFinal' WHERE idLogo=1;
        RENAME USER '$usuarioActual'@'%' TO '$idloginEmp'@'%';

        
        ";

         $resultado = mysqli_multi_query($conexion, $sql);
                    
                if ($resultado) {
                    echo "<script language ='JavaScript'> 
                        alert('Se actualizó el usuario correctamente.'); 
                        location.assign('logout.php');
                        </script>";
                } else {
                    echo "<script language ='JavaScript'> 
                    alert('Error, no se actualizaron los datos de la base de datos.'); 
                    location.assign('Admin_Perfil.php');
                    </script>";
                }
            }
              } //todo SI NO SE AGREGÓ UNA IMAGEN PERO EL USUARIO ES DIFERENTE DEBE HACER ESTO
              else {
                echo "<script language ='JavaScript'> 
                console.log('b.'); 
                
                </script>";
            $sql = "update tusuario set nombreEmp='" . $nombreEmp . "',apellidoPEmp='" . $apellidoPEmp . "',apellidoMEmp='" . $apellidoMEmp . "',fechaNacEmp='" . $fechaNacEmp . "',telEmp='" . $telEmp . "
            ',generoEmp='" . $generoEmp . "',ciudadEmp='" . $ciudadEmp . "',direccionEmp='" . $direccionEmp . "',emailEmp='" . $emailEmp . "',turnoEmp='" . $turnoEmp . "
            ',idloginEmp='" . $idloginEmp . "',passEmp='" . $passEmp . "'where idloginEmp ='" . $usuarioActual . "';
            UPDATE tlogo SET nomEmpresa='$nomEmpresa' WHERE idLogo=1;

            RENAME USER '$usuarioActual'@'%' TO '$idloginEmp'@'%';
            ";

            $resultado = mysqli_multi_query($conexion, $sql);
                        
                    if ($resultado) {
                        echo "<script language ='JavaScript'> 
                            alert('Se actualizó el usuario correctamente.'); 
                            location.assign('logout.php');
                            </script>";
                    } else {
                        echo "<script language ='JavaScript'> 
                        alert('Error, no se actualizaron los datos de la base de datos.'); 
                        location.assign('Admin_Perfil.php');
                        </script>";
                    }
              }
            

        }
        //! SI EL USER ACTUAL DEL SESSION ES IGUAL AL DEL CAMPO, SE CAMBIA TODO EXCEPTO EL USER 
        else{

                //TODO SE VERIFICA QUE EL LOGO SE HAYA CAMBIADO
            if (!empty($_FILES['subirLogo']['name'])) {
                    $ruta = "./img/logo/";
                    $fichero = $ruta.basename($_FILES['subirLogo']['name']);
                    $rutaFinal = $ruta."logo.jpg";
            if(move_uploaded_file($_FILES['subirLogo']['tmp_name'],$ruta."logo.jpg")){
              
               
        $sql = "update tusuario set nombreEmp='" . $nombreEmp . "',apellidoPEmp='" . $apellidoPEmp . "',apellidoMEmp='" . $apellidoMEmp . "',fechaNacEmp='" . $fechaNacEmp . "',telEmp='" . $telEmp . "
        ',generoEmp='" . $generoEmp . "',ciudadEmp='" . $ciudadEmp . "',direccionEmp='" . $direccionEmp . "',emailEmp='" . $emailEmp . "',turnoEmp='" . $turnoEmp . "',passEmp='" . $passEmp . "'where idloginEmp ='" . $idloginEmp . "';

        
        UPDATE tlogo SET nomEmpresa='$nomEmpresa' WHERE idLogo=1;
        UPDATE tlogo SET rutaLogo='$rutaFinal' WHERE idLogo=1;
        
        
        
        ";

         $resultado = mysqli_multi_query($conexion, $sql);
                    
                if ($resultado) {
                    echo "<script language ='JavaScript'> 
                        alert('Se actualizoo el usuario correctamente.'); 
                        location.assign('Admin_Perfil.php'); 
                        </script>";
                } else {
                    echo "<script language ='JavaScript'> 
                    alert('Error, no se actualizaron los datos de la base de datos.'); 
                    location.assign('Admin_Perfil.php');
                    </script>";
                }
 
            }
        }
        
        //TODO SI NO SE SUBIO LOGO NI SE CAMBIO EL NOMBRE DE USUARIO
        else{
                   
        $sql = "update tusuario set nombreEmp='" . $nombreEmp . "',apellidoPEmp='" . $apellidoPEmp . "',apellidoMEmp='" . $apellidoMEmp . "',fechaNacEmp='" . $fechaNacEmp . "',telEmp='" . $telEmp . "
        ',generoEmp='" . $generoEmp . "',ciudadEmp='" . $ciudadEmp . "',direccionEmp='" . $direccionEmp . "',emailEmp='" . $emailEmp . "',turnoEmp='" . $turnoEmp . "',passEmp='" . $passEmp . "'where idloginEmp ='" . $idloginEmp . "';
        
        UPDATE tlogo SET nomEmpresa='$nomEmpresa' WHERE idLogo=1;
        
        ";

         $resultado = mysqli_multi_query($conexion, $sql);
                    
                if ($resultado) {
                    echo "<script language ='JavaScript'> 
                        alert('Se actualizó el usuario correctamente.'); 
                        location.assign('Admin_Perfil.php'); 
                        </script>";
                } else {
                    echo "<script language ='JavaScript'> 
                    alert('Error, no se actualizaron los datos de la base de datos.'); 
                    location.assign('Admin_Perfil.php');
                    </script>";
                }
        }


        }


        mysqli_close($conexion);
    } else {
//! jaja esto creo que no va a hacer nada XD pero lo dejo por si acaso (MENTIRA CON ESTO SE PONEN LOS DATOS EN LOS TXTBOX)
        $idloginEmp = $_SESSION['user'];
        
        $sql = "select * from tusuario where idloginEmp ='" . $idloginEmp . "'";
        //echo $sql;
        $resultado = mysqli_query($conexion, $sql);

        $filas = mysqli_fetch_assoc($resultado);

        $nombreEmp = $filas["nombreEmp"];
        $apellidoPEmp = $filas["apellidoPEmp"];
        $apellidoMEmp = $filas["apellidoMEmp"];
        $fechaNacEmp = $filas["fechaNacEmp"];
        $telEmp = $filas["telEmp"];
        $generoEmp = $filas["generoEmp"];
        $ciudadEmp = $filas["ciudadEmp"];
        $direccionEmp = $filas["direccionEmp"];
        $emailEmp = $filas["emailEmp"];
        $turnoEmp = $filas["turnoEmp"];
        $idloginEmp = $filas["idloginEmp"];
        $passEmp = $filas["passEmp"];


        
        $sql2 = "select rutaLogo from tlogo where idLogo =1";
        //echo $sql;
        $resultado2 = mysqli_query($conexion, $sql2);

        if ($resultado2 === false) {
          echo "Error al obtener el logo: " . mysqli_error($conexion);
          // Handle the error or exit gracefully
        } else {
          // Proceed with processing the results (assuming there are some)
          $raw = mysqli_fetch_assoc($resultado2);
          $imagenLogo = $raw['rutaLogo'];
        }

        $sql3 = "select nomEmpresa from tlogo where idLogo = 1";
        
        $resultado3 = mysqli_query($conexion, $sql3);
        $fila3 = mysqli_fetch_assoc($resultado3);

        $nomEmpresa = $fila3["nomEmpresa"];


        mysqli_close($conexion);

    ?>



<form  class="row g-2" action="<?= $_SERVER['PHP_SELF'] ?>" autocomplete="off" method="POST" enctype="multipart/form-data">

    <div>
        <span id="containerPerfilAd"></span>
    </div>
    <div class="col-md-6" id="textboxNomA">
        <span id="NombreAP">Nombre</span>
        <input type="text" class="izquierdo" placeholder="Nombres" name="nombreEmp"  value="<?php echo $nombreEmp ?>">
    </div>

    <div class="col-md-6" id="textboxAP">
    <span id="ApellidoPAP">Apellido Paterno</span>
        <input type="text" placeholder="Apellido Paterno" name="apellidoPEmp"  value="<?php echo $apellidoPEmp ?>">
    </div>
    <div class="col-md-6" id="textboxAM">
        
        <span id="ApellidoMAP">Apellido Materno</span>
        <input type="text" class="izquierdo" placeholder="Apellido Materno" name="apellidoMEmp"  value="<?php echo $apellidoMEmp ?>">
    </div>

    <div class="col-md-6" id="textboxTelPer">
    <span id="TelefonoPer">Telefono</span>
        <input type="double" placeholder="Telefono" name="telEmp"  value="<?php echo $telEmp ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    </div>


    <div class="col-md-6" id="textboxCiudad">
    <span id="CuidadPer">Ciudad</span>
        <input type="Nombre" class="izquierdo" placeholder="Ciudad" name="ciudadEmp"  value="<?php echo $ciudadEmp ?>">
    </div>
    <div class="col-md-6" id="textboxDir">
    <span id="DireccionPer">Direccion</span>
        <input type="Nombre" placeholder="Direccion" name="direccionEmp"  value="<?php echo $direccionEmp ?>">
    </div>
    <div class="col-md-6" id="textboxEmail">
    <span id="EmailPer">Email</span>
        <input type="Nombre" class="izquierdo" placeholder="Email" name="emailEmp"  value="<?php echo $emailEmp ?>">
    </div>

    <div class="col-md-6" id="textboxFechaN">
    <span id="FechaNacPer">Fecha Nacimiento</span>
        <input title="Ingrese su fecha de nacimiento." type="date" name="fechaNacEmp" value="<?php echo $fechaNacEmp; ?>">
    </div>

    <div class="col-md-6" id="textboxGeneroEmp">
    <span id="GeneroPer">Genero</span>
                <input type="text" class="izquierdo" name="generoEmp"  value="<?php echo $generoEmp; ?>" readonly>
    </div>

    <div class="col-md-6" id="textboxTurnoP">
    <span id="TurnoPer">Turno</span>
        <input title="Ingrese su turno/horario de trabajo. Para ver las demás opciones, borre la actual." list="turnoEmp" name="turnoEmp" placeholder="Turno" value="<?php echo $turnoEmp; ?>">
                    <datalist id="turnoEmp" name="turnoEmp">
                        <option value="Matutino">
                        <option value="Vespertino">
                    </datalist>
    </div>

    <div class="col-md-6" id="textboxNusu">
    <span id="NombreUsuPer">Nombre de Usuario</span>
        <input type="Nombre" class="izquierdo" placeholder="Turno" name="idloginEmp"  value="<?php echo $idloginEmp ?>">
    </div>
    <div class="col-md-6" id="textboxContra">
    <span id="ContraPer">Contraseña</span>
        
    </div>
    <div  class="col-md-6"id="DContraINPUT">
                        <input type="password" name="passEmp" placeholder="Contraseña" id="password" value="<?php echo $passEmp; ?>">
                        <img src="img/eyeClosed.png" id="eyeicon">
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

<div class="divEmpresa">
        <span class="NEmp">Nombre de la empresa</span>
        <input type="text" name="nomEmpresa" placeholder="Nombre de empresa" id="nomEmprenomEmpresasa" value="<?php echo $nomEmpresa; ?>">

    </div>

    <div id="divLogo">

    <span id="LogotipoPer">Logotipo</span>
    <img id="logotipo" src="<?php echo $imagenLogo; ?>" width="100" alt="" srcset="">
    <input id="ExaminarPerfilAdmin" name="subirLogo" type="file" onchange="getImagePreview(event)" style="display:none;"></input>
    <label for="ExaminarPerfilAdmin" id="lblSubirLogo" style="display:block;"> Subir imagen</label>


    </div>
    <span id="LineaAbajoPerAd"></span>
    
    <p id="MensajeInferiorPA">Al cambiar el nombre de usuario, se le pedirá que vuelva a iniciar sesión.<br>
    </p>
    
    <button name="editarUsuario" type="submit" id="BtnGuardarPA">Guardar</button>



    </form>
    <?php
    } ?>






<script>
  function getImagePreview(event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        // Actualizar la imagen existente con la vista previa
        document.getElementById('logotipo').src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  }

</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>