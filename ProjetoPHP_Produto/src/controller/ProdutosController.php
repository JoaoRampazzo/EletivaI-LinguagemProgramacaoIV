<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Controller\ProdutosController as ControllerProdutosController;
use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosController{

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ProdutosDAO();
        $resultado = $dao->consultarPorId($params[1]);
        require_once "../src/View/alterar_produto.php";
    }

    public static function abrirListaProdutos(){
        $dao = new ProdutosDAO();
        $resultado = $dao->consultar();
        require_once "../src/View/listar_produtos.php";
    }

    public static function inserirProduto(){
        $produto = new Produtos();
        $produto->setDescricao($_POST['descricao']);
        $produto->setNome($_POST['nome']);
        $produto->setValor($_POST['valor']);
        $dao = new ProdutosDAO();
        if ($dao->inserir($produto)){
            $resposta = true;
        } else {
            $resposta = false;
        }

        ControllerProdutosController::abrirListaProdutos();
    }
    public static function editarProduto($params){
        $produto = new Produtos();
        $produto->setDescricao($_POST['descricao']);
        $produto->setNome($_POST['nome']);
        $produto->setValor($_POST['valor']);
        $produto->setId($params[1]);
        $dao = new ProdutosDAO();
        if ($dao->alterar($produto)){
            $resposta = true;
        } else {
            $resposta = false;
        }

        ControllerProdutosController::abrirListaProdutos();
    }

    public static function excluirProduto($params){
        $dao = new ProdutosDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }

        ControllerProdutosController::abrirListaProdutos();

    }

}