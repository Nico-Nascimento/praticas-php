<?php

class Calculadora {
  private $historico;

  public function __construct() {
    $this->historico = [];
  }

  public function somar($num1, $num2) {
    $this->adicionarAoHistorico($num1, $num2, '+', $num1 + $num2);
  }

  public function subtrair($num1, $num2) {
    $this->adicionarAoHistorico($num1, $num2, '-', $num1 - $num2);
  }

  public function multiplicar($num1, $num2) {
    $this->adicionarAoHistorico($num1, $num2, '*', $num1 * $num2);
  }

  public function dividir($num1, $num2) {
    if ($num2 != 0) {
      $this->adicionarAoHistorico($num1, $num2, '/', $num1 / $num2);
    } else {
      $this->historico[] = "Erro: Divisão por zero";
    }
  }

  private function adicionarAoHistorico($num1, $num2, $operador, $resultado) {
    $this->historico[] = "$num1 $operador $num2 = $resultado";
  }

  public function visualizar(){
    echo "Seu historico: <br>";
    foreach ($this->historico as $operacao){
      echo " 🔘 $operacao. <br>";
    }
  }
}