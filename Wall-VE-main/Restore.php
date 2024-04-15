<?php
include 'Conectar.php';
$restorePoint=SGBD::limpiarCadena($_POST['restorePoint']);
$sql=explode(";",file_get_contents($restorePoint));
$totalErrors=0;
set_time_limit (60);
$con=mysqli_connect(SERVER, USER, PASS, BD);
$con->query("SET FOREIGN_KEY_CHECKS=0");
for($i = 0; $i < (count($sql)-1); $i++){
    if($con->query($sql[$i].";")){  }else{ $totalErrors++; }
}
$con->query("SET FOREIGN_KEY_CHECKS=1");
$con->close();
if($totalErrors<=0){
	echo 
	"<script language ='JavaScript'> 
    alert('Restauración completada con éxito.'); 
    location.assign('../Wall-VE-main/Admin_CopiasSeg.php'); 
    </script>";
}else{
	echo "<script language ='JavaScript'> 
    alert('Ocurrio un error inesperado al crear la copia de seguridad.'); 
    location.assign('../Wall-VE-main/Admin_CopiasSeg.php'); 
    </script>";
}