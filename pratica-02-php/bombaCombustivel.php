<?php

class bombaCombustivel {
  private $tipoCombustivel;
  private $valorLitro;
  private $quantidadeCombustivel;

  public function __construct($tipoCombustivel, $valorLitro, $quantidadeCombustivel) {
      $this->tipoCombustivel = $tipoCombustivel;
      $this->valorLitro = $valorLitro;
      $this->quantidadeCombustivel = $quantidadeCombustivel;
  }

  public function abastecerPorValor($valor){
    $litrosAbastecidos = $valor / $this->valorLitro;
    if ($litrosAbastecidos <= $this->quantidadeCombustivel) {
        $this->quantidadeCombustivel -= $litrosAbastecidos;
        echo "Abastecidos " . round($litrosAbastecidos, 1) . " litros. Total: R$$valor <br>";
        
    } else {
        echo "Não há combustível suficiente na bomba.";
    }
  }

  public function abastecerPorLitro($litros){
    $valorAbastecido = $litros * $this->valorLitro;
        if ($litros <= $this->quantidadeCombustivel) {
            $this->quantidadeCombustivel -= $litros;
            echo "Abastecidos R$ $valorAbastecido. Total: $litros litros <br>";

        } else {
            echo "Não há combustível suficiente na bomba.";
            return 0;
        }
  }

  public function alterarValor($novoValor){
    $this->valorLitro = $novoValor;
    echo "Novo valor: $novoValor <br>";
  }

  public function alterarCombustivel($novoCombustivel){
    $this->tipoCombustivel = $novoCombustivel;
    echo "Novo combustivel: $novoCombustivel <br>";
  }
}
