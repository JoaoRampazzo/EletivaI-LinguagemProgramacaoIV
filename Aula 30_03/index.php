<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sistema em php</title>
  </head>
  <body class ="container">
    <h1>Sistema em php</h1>

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="modal" tabindex="-1" style="display: block;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Acessar</h5>
                    </div>
                    <div class="modal-body">
                        <form action="resposta.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <label for="email" class="labe-control">
                                        Informe o email
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="senha" class="labe-control">
                                        Informe a senha
                                    </label>
                                    <input type="password" name="senha" id="senha" class="form-control"/>
                                </div>
                            </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Acessar</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <div class="col"></div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>