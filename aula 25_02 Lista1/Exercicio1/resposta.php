<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, Math!</title>
  </head>

  <body class="container mt-5 p-4 border border-gray border-2 rounded">
    <h1>Cáculos!</h1>

    <?php
       $valor1 = $_POST['valor1'];
       $valor2 = $_POST['valor2'];
       echo "O valor dado é: $valor1<br/>
       e o valor do produto é: $valor2 <br/>";
 
       echo "O valor do troco é: ".($valor1 - $valor2);
    ?>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>