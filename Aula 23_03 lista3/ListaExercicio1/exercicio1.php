<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>exercicio1</title>
  </head>
  <body class="container">
    <h1>Exercicio1</h1>

    <form action="respostaExercicio1.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="dia" class="label-control">DIA</label>
            <input type="number" class="form-control" id="dia" name="dia"/>
        </div>

        <div class="col">
            <label for="mes" class="label-control">MÊS</label>
            <input type="number" class="form-control" id="mes" name="mes"/>
        </div>
        
        <div class="col">
        <label for="ano" class="label-control">ANO</label>
        <input type="number" class="form-control" id="ano" name="ano"/>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-warning">Verificar data</button>
        </div>
    </div>




    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>