<?
    require_once __DIR__.'/vendor/autoload.php';
    //Aqui a gente recupera o que o usuário digitou e qual
    //métodos HTTP ele utilizou
    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO'];

    //Instanciar classe Router
    $router = new \Aluno\ProjetoPhp\Router($method, $path);

    //ADICIONAR AS ROTAS VÁLIDAS ABAIXO

    $router->get('/ola-mundo', function(){
        return "Olá Mundo!";
    });

    $router->get('/exemplo', 'Aluno\ProjetoPHP\Controller\ExercicioController::exibir');

    $router->post('/exemplo-resultado', 'Aluno\ProjetoPHP\Controller\ExercicioController::exibirResultado');

    $router->get('/cliente/novo', 'Aluno\ProjetoPHP\Controller\ClientesController::abrirFromularioInserir');
    
    $router->post('cliente/inserir', 'Aluno\ProjetoPHP\Controller\ClientesController::inserirCliente');
    //ADICIONAR AS ROTAS VÁLIDAS ACIMA

    $result = $router->handler();

    if(!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }
    echo $result($router->getParams());
?>