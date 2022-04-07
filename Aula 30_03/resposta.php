<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cookies</title>
  </head>
  <body>
    <h1>Cookies</h1>
    <?php

        if ($_POST){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            /*setcookie("usuario", $email, time() + (86400 * 1), "/");
            echo "Seja bem vindo ".$_COOKIE['usuario']; */

            session_start();
            if (($email == "v@v.com") && ($senha == "123")){
                $_SESSION['usuario'] = $email;
                $_SESSION['acesso'] = true;
                echo "Bem vindo usuário ".$_SESSION['usuario'];
                echo "<br>";
                echo '<a href="sair.php">Sair</a>';
            } else{
                header('location: index.php');
                exit;
            }
        } else {
            session_start();
            if ($_SESSION['acesso'] == true){
                echo "Seja bem vindo usuario ".$_SESSION['usuario'];
                echo "<br>";
                echo '<a href="sair.php"> Sair</a>';
            }
        }
        
    ?>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>