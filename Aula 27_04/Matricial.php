<?

class Matricial extends Impressora{

    private $numAgulhas;
    private $imprimeVias;

    public function __construct($marca, $modelo, $colorida, $peso, $numAgulhas, $imprimeVias)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setColorida($colorida);
        $this->setPeso($peso);
        $this->setNumAgulhas($numAgulhas);
        $this->setImprimeVias($imprimeVias);
    }

    public function getNumAgulhas(){
        return $this->numAgulhas;
    }
    public function setNumAgulhas($numAgulhas){
        $this->numAgulhas = $numAgulhas;
    }


    public function getImprimeVias(){
        return $this->imprimeVias;
    }
    public function setImprimeVias($imprimeVias){
        $this->imprimeVias = $imprimeVias;
    }
}

?>