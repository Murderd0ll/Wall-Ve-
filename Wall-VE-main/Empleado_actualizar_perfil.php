<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(empty($_SESSION['user'])){
    header('location:Login.php');
}

include("connection/conexion.php");

// Verificar si el empleado ha iniciado sesión y tiene un ID de empleado en la sesión

    $idEmp = $_SESSION['user'];

   

// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idUser= $_POST['nombreUsuario'];
    $telefono= $_POST['telefono'];
    $nuevaContra= $_POST['nuevaContrasenia'];
    $contraActual = $_POST['contraseniaActual'];
    

    $sql = "SELECT telEmp,passEmp FROM tusuario WHERE idloginEmp = '$idEmp'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();
    
        // Guardar el valor de passEmp en una variable
        $telEmp = $row["telEmp"];
        $passEmp = $row["passEmp"];
    } else {
        echo "No se encontraron resultados de telefono";
    }

    
            






     //todo si quiere cambiar solo la contra o todo
     if($idUser!=$idEmp && ($contraActual != "" || $nuevaContra!= "") ){
            //! VERIFICA QUE LA CONTRA SEA CORRECTA
            
        if($contraActual== $passEmp){
                //echo "Contraseña correcta";

                    

            $sql = "UPDATE tusuario SET idloginEmp = '$idUser', telEmp = '$telefono', passEmp='$nuevaContra' WHERE idloginEmp = '$idEmp';
            RENAME USER '$idEmp'@'%' TO '$idUser'@'%';";
        
                    $resultado_actualizar = mysqli_multi_query($conexion, $sql);
                    
                    if ($resultado_actualizar) {
                        // Redirigir a la misma página con un mensaje de éxito
                        echo "<script language ='JavaScript'>
                        alert('Se han cambiado sus datos. ');
                        location.assign('logout.php');
                        </script>";
        
                        
                    } else {
                        $_SESSION['user']=$idEmp;
                        echo mysqli_error($conexion);
                    }                  
                                }
            else{
                echo "<script language ='JavaScript'>
                alert('Contraseña actual incorrecta.');
                location.assign('Empleado_Perfil.php');
                </script>";
            }
    }
    elseif($telEmp==$telefono && $idUser==$idEmp && $contraActual == "" && $nuevaContra== ""  ){
        echo " <script language ='JavaScript'>
        alert('No se hizo ningún cambio en la base de datos.');
        location.assign('Empleado_Perfil.php');
        </script>";

    }
    
    //TODO Si solo la contrseña está cambiada entonces..

    elseif($contraActual != "" || $nuevaContra!= ""){
           
            //!verificar contraseña
            if($contraActual== $passEmp){
                //echo "Contraseña correcta";
                        
                    $sql = "UPDATE tusuario SET telEmp = '$telefono', passEmp='$nuevaContra' WHERE idloginEmp = '$idEmp';";
                    
                    $resultado_actualizar = mysqli_multi_query($conexion, $sql);
                            
                    if ($resultado_actualizar) {
                        echo "<script language ='JavaScript'>
                        alert('Se ha cambiado su contraseña.');
                        location.assign('Empleado_Perfil.php');
                        </script>";
                        

                        
                    } else {
                    echo mysqli_error($conexion);
                    }      
                        

            }
            else{
                echo "<script language ='JavaScript'>
                alert('Contraseña actual incorrecta.');
                location.assign('Empleado_Perfil.php');
                </script>";
            }
    } 
    //todo Si solo el telefono está cambiado entonces...
    elseif($telEmp != $telefono) {
        
        $sql = "UPDATE tusuario SET telEmp = '$telefono' WHERE idloginEmp = '$idEmp';";
        //Renombrar el usuario de mysql RENAME USER 'nombreantiguo'@'localhost' TO 'nombrenuevo'@'localhost';
    
                $resultado_actualizar = mysqli_query($conexion, $sql);
                
                if ($resultado_actualizar) {
                    echo "<script language ='JavaScript'>
                    alert('Se han cambiado sus datos. ');
                    location.assign('Empleado_Perfil.php');
                    </script>";
    
                } else {
                    echo mysqli_error($conexion);
                }
    }
    //todo si solo el usuario está cambiado entonces...
    elseif($idUser!=$idEmp){
     
        $sql = "UPDATE tusuario SET idloginEmp = '$idUser' WHERE idloginEmp = '$idEmp';
        RENAME USER '$idEmp'@'%' TO '$idUser'@'%';
    ";
        //Renombrar el usuario de mysql RENAME USER 'nombreantiguo'@'localhost' TO 'nombrenuevo'@'localhost';
    
                $resultado_actualizar = mysqli_multi_query($conexion, $sql);
                
                if ($resultado_actualizar) {
                    // Redirigir a la misma página con un mensaje de éxito
                    echo "<script language ='JavaScript'>
                    alert('Se han cambiado sus datos. ');
                    location.assign('logout.php');
                    </script>";
    
                    
                } else {
                    $_SESSION['user']=$idEmp;
                    echo mysqli_error($conexion);
                }
    }

    //$sql = "UPDATE tusuario SET idloginEmp = '$idUser', telefono = '$telefono' WHERE idloginEmp = '$idEmp'";


   /* $idloginEmp = mysqli_real_escape_string($conexion, $_POST['idloginEmp']); // Nombre de Usuario
    $genero = mysqli_real_escape_string($conexion, $_POST['genero']);
*/



    // Actualizar los datos del empleado en la base de datos
 /*   $sql_actualizar = "UPDATE tusuario SET idloginEmp = '$idloginEmp', generoEmp = '$genero' WHERE idloginEmp = '$idEmp'";
    $resultado_actualizar = mysqli_query($conexion, $sql_actualizar);
    if ($resultado_actualizar) {
        // Redirigir a la misma página con un mensaje de éxito
        header("Location: Empleado_actualizar_perfil.php?exito=true");
        exit();
    } else {
        $mensaje_error = "Error al actualizar los datos.";
    } */
}

