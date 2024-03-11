<?php

class imovel{

    protected $endereco;
    protected $valor;

    public function __construct($end,$valor) {
        $this->endereco = $end;
        $this->valor = $valor;

    }
}

class novo extends imovel{
    public $adicional;

    public function getsAdicional($v){
        $this->adicional=$v;
    }

    public function imprimirAdicional(){
        echo("<p> O valor adicional é $this->adicional  <br> O valor total do imovel localizado na $this->endereco é ". $this->adicional+$this->valor.". </p>");
    }
}

class velho extends imovel{
    public $desconto;

    public function getsDesconto($v){
        $this->desconto=$v;
    }

    public function imprimirDesconto(){
        echo("<p> O valor do desconto é $this->desconto  <br> O valor total do imovel localizado na $this->endereco é ". $this->valor-$this->desconto .". </p>");
    }
}

$novoI= new novo("rua indiana",450000);
$novoI->getsAdicional(27000);
$novoI->imprimirAdicional();

$velhoI= new velho("rua arabe",300000);
$velhoI->getsDesconto(11000);
$velhoI->imprimirDesconto();