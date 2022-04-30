<?php

class Ponto{
    private $x;
    private $y;
    private static $contador = 0;

    //Construtor
    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
        self::setContador();
    }
    //Metodos
    public function calcaularDistancia(Ponto $p){
        $valorX = pow(($p->getX()- $this->x),2);
        $valorY = pow(($p->getY()- $this->y),2);
        return sqrt($valorX + $valorY); 
    }

    public function calcaularDistancia2($x2, $y2){
        $valorX = pow(($x2- $this->x),2);
        $valorY = pow(($y2- $this->y),2);
        return sqrt($x2 + $y2); 
    }

    public function calcaularDistancia3($x1, $x2, $y1, $y2){
        $valorX = pow(($x2- $x2),2);
        $valorY = pow(($y1->y2),2);
        return sqrt($valorX, $valorY); 
        
    }


    //Contador
    public static function setContador(){
        self::$contador++;
    }
    public static function getContador(){
        return self::$contador;
    }

    //Encapsulamento X
    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x = $x;
    }
    //Encapsulamento Y
    public function getY(){
        return $this->y;
    }
    public function setY($y){
        $this->y = $y;
    }

}



?>