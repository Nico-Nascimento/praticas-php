<?php

abstract class ingresso{

    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    abstract function imprimeValor();

}

class normal extends ingresso{

    public function imprimeValor()
    {
        echo("<p> O valor do ingresso normal é $this->valor  </p>");  
    }
}

class vip extends ingresso{

    protected $valorAdicional; 

    public function getsValorAdicional($valor){
        $this->valorAdicional = $valor;
    }

    public function imprimeValor(){
        $valorTotal = $this->valorAdicional+$this->valor;
        echo("<p> O valor do ingresso vip é $valorTotal </p>");
    } 
}

class camarote extends ingresso{

    protected $valorAdicional; 

    public function getsValorAdicional($valor){
        $this->valorAdicional = $valor;
    }

    public function imprimeValor(){
        $valorTotal = $this->valorAdicional+$this->valor;
        echo("<p> O valor do ingresso do camarote é $valorTotal </p>");
    } 
}

$vip1 = new vip(50);
$vip1->getsValorAdicional(100);
$vip1->imprimeValor();

$camarote1 = new camarote(10);
$camarote1->getsValorAdicional(1000);
$camarote1->imprimeValor();

$normal1=new normal(50);
$normal1->imprimeValor();