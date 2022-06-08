<?php


namespace Aluno\ProjetoPhp\Controller;


class exerc3Controller
{

    public static function exibir(){
        require_once("../src/View/exerc3View.php");
    }


    public static function exibirResultado(){
        $valor = $_POST['valor'];
        require_once("../src/View/exerc3View.php");
    }
}