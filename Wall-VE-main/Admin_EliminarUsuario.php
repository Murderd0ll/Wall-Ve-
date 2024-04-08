<?php 
include ("Connection/conexion.php");
$idEmp=$_GET['idEmp'];

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
}
?>
