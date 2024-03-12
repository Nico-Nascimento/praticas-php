<?php 

abstract class  formtartoDeElemento{
    abstract public function desenhar();
    abstract public function redimensionar();
}

class circulo extends formtartoDeElemento{
    public $raio;
    public function __construct($r ) {
        $this->raio = $r;
    }
    function desenhar()
    {
        echo("<p>".$this->raio*2*3.14."</p>");
    }
    function redimensionar()
    {
        $this->raio *= 1.1 ;
        echo("<p>".$this->raio."</p>");
    }
}

class retangulo extends formtartoDeElemento{
    public $comp;
    public $h;
    public function __construct($base,$h ) {
        $this->comp = $base;
        $this->h =$h ;
    }
    function desenhar()
    {
        echo("<p>".$this->comp*$this->h."</p>");
    }
    function redimensionar()
    {
        $this->comp *= 1.1;
        $this->h *=1.1 ;
        echo("<p>".$this->comp."</p>");
        echo("<p>".$this->h."</p>");
    }
}

$c1= new circulo(2.4);
$c1->desenhar();
$c1->redimensionar();

$r1=new retangulo(10,4);
$r1->desenhar();
$r1->redimensionar();