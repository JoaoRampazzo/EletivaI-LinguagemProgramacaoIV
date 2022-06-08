<?php

require_once __DIR__.'/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual 
//método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \Aluno\ProjetoPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get('/ola-mundo', function(){
    return "Olá Mundo!";
});

$router->get('/produto/novo',
'Aluno\ProjetoPhp\Controller\ProdutosController::abrirFormularioInserir');

$router->post('/produto/inserir',
'Aluno\ProjetoPhp\Controller\ProdutosController::inserirProduto');

$router->get('/produtos',
'Aluno\ProjetoPhp\Controller\ProdutosController::abrirListaProdutos');

$router->get('/produto/alterar/{id}',
'Aluno\ProjetoPhp\Controller\ProdutosController::abrirFormularioAlterar');

$router->post('/produto/editar/{id}',
'Aluno\ProjetoPhp\Controller\ProdutosController::editarProduto');

$router->get('/produto/excluir/{id}',
'Aluno\ProjetoPhp\Controller\ProdutosController::excluirProduto');

//ROTAS LISTA 1 ABAIXO
$router->get('/exerc1', 
'Aluno\ProjetoPhp\Controller\exerc1Controller::exibir');

$router->post('/exerc1View-resultado',
'Aluno\ProjetoPhp\Controller\exerc1Controller::exibirResultado');

$router->get('/exerc2', 
'Aluno\ProjetoPhp\Controller\exerc2Controller::exibir');

$router->post('/exerc2View-resultado',
'Aluno\ProjetoPhp\Controller\exerc2Controller::exibirResultado');

$router->get('/exerc3', 
'Aluno\ProjetoPhp\Controller\exerc3Controller::exibir');

$router->post('/exerc3View-resultado',
'Aluno\ProjetoPhp\Controller\exerc3Controller::exibirResultado');

//ROTAS LISTA 1 ACIMA

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());