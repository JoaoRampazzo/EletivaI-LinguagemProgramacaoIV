<?php


namespace Aluno\ProjetoPhp\Controller;


class exerc2Controller
{

    public static function exibir(){
        require_once("../src/View/exerc2View.php");
    }


    public static function exibirResultado(){
        $kilo = $_POST['quilo'];
        $consumido = $_POST['consumido'];
        $total = $kilo * $consumido;
        require_once("../src/View/exerc2View.php");
    }
}