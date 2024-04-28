<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(empty($_SESSION['user'])){
    header('location:Login.php');
}
include("connection/conexion.php");

// Verificar si el empleado ha iniciado sesión y tiene un ID de empleado en la sesión
if (isset($_SESSION['idloginEmp'])) {
    $idEmp = $_SESSION['idloginEmp'];

    // Consulta SQL para obtener los datos del empleado
    $sql = "SELECT idloginEmp, generoEmp FROM tusuario WHERE idloginEmp = '$idEmp'";

    $resultado = mysqli_query($conexion,$sql);

    if ($resultado) { // Verificar si la consulta se ejecutó correctamente
        if (mysqli_num_rows($resultado) > 0) {
            // Obtener los datos del empleado
            $empleado = mysqli_fetch_assoc($resultado);

            // Asignar los valores a variables para los campos que necesitas
            $idloginEmp = $empleado['idloginEmp'];
            $generoEmp = $empleado['generoEmp'];
        }
    }
}

// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idloginEmp = mysqli_real_escape_string($conexion, $_POST['idloginEmp']); // Nombre de Usuario
    $genero = mysqli_real_escape_string($conexion, $_POST['genero']);

    // Actualizar los datos del empleado en la base de datos
    $sql_actualizar = "UPDATE tusuario SET idloginEmp = '$idloginEmp', generoEmp = '$genero' WHERE idloginEmp = '$idEmp'";
    $resultado_actualizar = mysqli_query($conexion, $sql_actualizar);
    if ($resultado_actualizar) {
        // Redirigir a la misma página con un mensaje de éxito
        header("Location: Empleado_actualizar_perfil.php?exito=true");
        exit();
    } else {
        $mensaje_error = "Error al actualizar los datos.";
    }
}

