<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resposta exercicio2</title>
  </head>

  <body class="container mt-5 p-4 border border-gray border-2 rounded">
    <h1>resposta exercicio2!</h1>

    <?php
      $kilo = $_POST['kilo'];
      $consumido = $_POST['consumido'];
      echo "O valor do quilo é: $kilo<br/>
      e o valor consumido é: $consumido <br/>";

      echo "resultado: ".($kilo * $consumido);
    ?>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>