<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>exercicio2</title>
  </head>
  <body class="container">
    <h1>exercicio2</h1>

    <?php
    for ($i=1; $i<=10; $i++){
        $vetor[$i] = $_POST["nome$i"];
    }
    function ordenar($vetor){
        sort($vetor);
        foreach($vetor as $nome){
            echo "$nome";
            echo "<br>";
        }
    }
    ordenar($vetor);
    //var_dump($vetor)
    ?>


  </body>
</html>  