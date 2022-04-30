<?php
require_once("Ponto.php");
$p1 = new Ponto(2,4);
echo "Quantidade de objetos criadps:"
        .Ponto::getContador();
echo "<br/>";


$p2 = new Ponto(4,6);
echo "Distância entre os pontos:".
        $p1->calcaularDistancia($p2);
echo "<br/>";
echo "Distância entre os pontos:".
        $p1->calcaularDistancia2(4, 6);

?>