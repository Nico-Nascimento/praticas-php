<?php

class ContaBancaria {
  public $numeroConta;
  public $nomeCorrentista;
  public $saldo;

  public function __construct($numeroConta, $nomeCorrentista, $saldo = 0) {
    $this->numeroConta = $numeroConta;
    $this->nomeCorrentista = $nomeCorrentista;
    $this->saldo = $saldo;
  }

  public function alterarNome($novoNome) {
    $this->nomeCorrentista = $novoNome;
  }

  public function deposito($valor) {
    if($valor > 0) {
      $this->saldo += $valor;
      echo "Depósito de R$ $valor realizado com sucesso.<br>";
    } else {
      echo "O valor do depósito deve ser maior que zero.<br>";
    }
  }

  public function saque($valor) {
    if ($valor > 0) {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado com sucesso.<br>";
        } else {
            echo "Saldo insuficiente para realizar o saque.<br>";
        }
    } else {
        echo "O valor do saque deve ser maior que zero.<br>";
    }
  }

  public function mostrarSaldo() {
    echo "Saldo atual: R$ " . $this->saldo . "<br>";
  }
}
