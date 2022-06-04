<?php


namespace Aluno\ProjetoPhp\Controller;


class exerc1Controller
{

    public static function exibir(){
        require_once("../src/View/exerc1View.php");
    }


    public static function exibirResultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $subt = $valor1 - $valor2;
        require_once("../src/View/exerc1View.php");
    }
}