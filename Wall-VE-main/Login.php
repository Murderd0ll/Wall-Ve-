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
    
        <img class ="logo" src="./img/logo.svg" srcset="">
        
        <div class="centrado">
            
        
            

            <form action="LoginComp.php" method="POST">
            <?php if(isset($_GET['error'])) {?>
                <p id="errorMsj"><?php echo $_GET['error']?></p>
            <?php } ?>
                    <div class="tbox">
                        <label for="nombre" id="nombrelbl">Usuario</label>
                        <input type="text" name="idloginEmp" placeholder="ejemplo.email@gmail.com">
                    </div>
                    <div class="tbox">
                        <label for="password" id="passwordlbl" >Contraseña</label>
                        <input type="password" name="passEmp" placeholder="Ingrese su contraseña">
                    </div>
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