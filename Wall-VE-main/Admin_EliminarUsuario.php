<?php 
session_start();

/*


$sql="delete from tusuario where idEmp ='".$idEmp."'";
$resultado=mysqli_query($conexion,$sql);

if($resultado){
    echo "<script language ='JavaScript'> 
    alert('Se eliminó el usuario correctamente.'); 
    location.assign('Admin_Usuarios.php'); 
    </script>";

}else{
    echo "<script language ='JavaScript'> 
    alert('NO se eliminó el usuario.'); 
    location.assign('Admin_Usuarios.php'); 
    </script>";
} */
include ("Connection/conexion.php");
$idEmp=$_GET['idEmp'];
$sql1 = "select idLoginEmp from tusuario where idEmp='".$idEmp."'";
$resultado1 = mysqli_query($conexion, $sql1);

if ($resultado1) {
    // Obtener el resultado de la consulta
    $row = mysqli_fetch_assoc($resultado1);
    $idLoginEmp = $row['idLoginEmp'];

    // Verificar si idLoginEmp es igual al usuario de la sesión actual
    if ($idLoginEmp != $_SESSION['user']) {
        // Si son iguales, procedemos a eliminar el usuario
        $sql = "DELETE FROM tusuario WHERE idEmp = '".$idEmp."'";
        $resultado = mysqli_query($conexion, $sql);

        if ($resultado) {
            echo "<script language ='JavaScript'> 
            alert('Se eliminó el usuario correctamente.'); 
            location.assign('Admin_Usuarios.php'); 
            </script>";
        } else {
            echo "<script language ='JavaScript'> 
            alert('NO se eliminó el usuario.'); 
            location.assign('Admin_Usuarios.php'); 
            </script>";
        }
    } else {
        // Si idLoginEmp no coincide con el usuario de la sesión, mostrar un mensaje
        echo "<script language ='JavaScript'> 
        alert('No puedes eliminar este usuario.'); 
        location.assign('Admin_Usuarios.php'); 
        </script>";
    }
} else {
    // Si no se pudo obtener idLoginEmp, mostrar un mensaje de error
    echo "<script language ='JavaScript'> 
    alert('Error al obtener información del usuario.'); 
    location.assign('Admin_Usuarios.php'); 
    </script>";
}

// Cerrar la conexión a la base de datos al finalizar
mysqli_close($conexion);
?>
