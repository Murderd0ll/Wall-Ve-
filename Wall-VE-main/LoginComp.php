<?php

session_start();
include_once('Connection/conexion.php');

if (isset($_POST['idloginEmp']) && isset($_POST['passEmp']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $idloginEmp = validate($_POST['idloginEmp']); 
    $passEmp = validate($_POST['passEmp']);

    if (empty($idloginEmp)) {
        header("Location: Login.php?error= ⚠ Error! Ingrese su usuario");
        exit();
    } elseif (empty($passEmp)) {
        header("Location: Login.php?error= ⚠ Error! Ingrese su contraseña.");
        exit();
    } else {
        
        $Sql = "SELECT * FROM tusuario WHERE idloginEmp = '$idloginEmp' AND passEmp='$passEmp'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['idloginEmp'] === $idloginEmp && $row['passEmp'] === $passEmp) {
                $_SESSION['idloginEmp'] = $row['idloginEmp'];
                

                // !Guardar el dato para conectarse a mysql
                require './Connection/conexion.php';

                
                $_SESSION['user'] = $idloginEmp;
                $_SESSION['pass'] = $passEmp;



                // Verificar el rol del usuario
                if ($row['rolEmp'] === 'Administrador') {
                    
                    header("Location: adminMenu.php");
                    exit();
                } elseif ($row['rolEmp'] === 'Usuario') {
                    header("Location: usuarioMenu.php");
                    exit();
                } else {
                    // En caso de que el rol no sea ni Administrador ni Usuario
                    header("Location: Login.php?error= ⚠ Error! Rol no válido.");
                    exit();
                }
            }

        } else {
            header("Location: Login.php?error= ⚠ Error! Verifique sus datos de sesión.");
            exit();
        }
    }

} else {
    header("Location: Login.php");
    exit();
}
?>
