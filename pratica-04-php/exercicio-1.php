<?php

    class pedido{
        private $itens = [];
        private $valorTotal;

        public function addItem(...$data){
            $this->itens = [...$this->itens,...$data];
        }

        public function listar(){
            echo("<pre>");
            print_r($this->itens);
            echo("</pre>");
        }

        public function getTotal(){
            foreach ($this->itens as $item) {
                $this->valorTotal+=$item->valor;
                   
            }
            echo("<p> {$this->valorTotal}</p>");
        }
    }

    class item{
        public $valor;
        public $nome;
        public $descricao;

        public function __construct($valor,$nome,$des="um item") {
            $this->valor = $valor;
            $this->nome = $nome;
            $this->descricao=$des;
        }
    }

    $i1=new item(8.99,"batata");
    $i2=new item(3.99,"banana");
    $i3=new item(5.99,"massa");
    $i4=new item(74.50,"file","carne");

    $p1= new pedido();
    $p1->addItem($i1,$i2,$i3,$i4);
    $p1->listar();
    $p1->getTotal();

    var_dump($p1);
