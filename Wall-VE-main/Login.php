<?php 


   
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


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>


    <div class="division left">

        <h1>Inicia sesión</h1>

        <img class="logo" src="<?php echo $rutaLogo?>" width="160" height="53" srcset="">

        <div class="centrado">




            <form action="LoginComp.php" method="POST">
                <?php if (isset($_GET['error'])) { ?>
                    <p id="errorMsj"><?php echo $_GET['error'] ?></p>
                <?php } ?>
                <div class="tbox">
                    <label for="nombre" id="nombrelbl">Usuario</label>
                    <input type="text" name="idloginEmp" placeholder="ejemplo.email@gmail.com">
                </div>

                <div class="tbox">
                    <div class="tboxpass">
                    <label for="password" id="passwordlbl">Contraseña</label>
                            <div class="tboxInput">
                                <input type="password" name="passEmp" placeholder="Ingrese su contraseña" id="password">
                                <img class="eyeicon" src="img/eyeClosed.png" id="eyeicon">
                            </div>
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



                <button class="btn">Entrar</button>
            </form>
        </div>
    </div>

    <div class="division right">
        <div class="centrado">
            <img src="./img/loginbien.jpeg" alt="Avatar man">
        </div>
    </div>
</body>
</html>