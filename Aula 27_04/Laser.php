<?

class Laser extends Impressora{

    private $capacidadeToner;
    private $frenteVerso;

    public function __construct($marca, $modelo, $colorida, $peso, $capacidadeToner, $frenteVerso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setColorida($colorida);
        $this->setPeso($peso);
        $this->setCapacidadeToner($capacidadeToner);
        $this->setFrenteVerso($frenteVerso);
    }

    public function getCapacidadeToner(){
        return $this->capacidadeToner;
    }
    public function setCapacidadeToner($capacidadeToner){
        $this->capacidadeToner = $capacidadeToner;
    }


    public function getFrenteVerso(){
        return $this->frenteVerso;
    }
    public function setFrenteVerso($frenteVerso){
        $this->frenteVerso = $frenteVerso;
    }
}

?>