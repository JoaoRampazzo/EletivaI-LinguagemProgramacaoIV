<?php


namespace Aluno\ProjetoPhp\Controller;


class exerc4Controller
{
    public static function exibir(){
        require_once("../src/View/exerc4View.php");
    }


    public static function exibirResultado(){
        $valor = $_POST['valor'];
        require_once("../src/View/exerc4View.php");
    }

}