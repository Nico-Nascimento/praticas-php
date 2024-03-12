<?php

class academia{
    private$alunos = [];
    private$aparelhos =[];
    private $faturamento;


    public function addAluno(...$data){
        $this->alunos = [...$this->alunos,...$data];
    }

    public function listarAlunos(){
        echo("<pre>");
        print_r($this->alunos);
        echo("</pre>");
    }

    public function addAparelho(...$data){
        $this->aparelhos = [...$this->aparelhos,...$data];
    }

    public function listarAparelhos(){
        echo("<pre>");
        print_r($this->aparelhos);
        echo("</pre>");
    }

    public function getFaturamento(){
        foreach ($this->alunos as $aluno) {
            $this->faturamento+=$aluno->mensalidade;
               
        }
        echo("<p><strong>Faturamento:</strong>{$this->faturamento}</p>");
    }
    
}

class aparelho{
    public $nome;
    private $grupo;
    public function __construct($nome,$grupo="variado") {
        $this->nome = $nome;
        $this->grupo= $grupo;
    }
}

class aluno{
    private $nome;
    public $mensalidade;

    public function __construct($nome,$mensalidade=89.99) {
        $this->nome = $nome;
        $this->mensalidade = $mensalidade;
    }

    public function usar($aparelho){
        echo("<p> {$this->nome} usou $aparelho->nome");
    }
}

$a1= new aluno('joao');
$a2= new aluno('jorge');
$a3= new aluno('joana');
$a4 = new aluno('carol',150);

$p1 = new aparelho('supino','peito');
$p2 = new aparelho('legpress','pernas');
$p3 = new aparelho('puxada','costas');
$p4 = new aparelho('abdutor','pernas');
$p5 = new aparelho('cross');

$body = new academia;
$body->addAluno($a1,$a2,$a3,$a4);
$body->addAparelho($p1,$p2,$p3,$p4,$p5);
$a4->usar($p2);

$body->listarAlunos();

$body->getFaturamento();