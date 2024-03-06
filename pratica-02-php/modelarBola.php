<?php

class bolinha {
  public $cor;
  public $circunferência;
  public $material;

  public function __construct($cor, $circunferência, $material){
    $this->cor = $cor;
    $this->circunferência = $circunferência;
    $this->material = $material;
  }

  public function trocarCor($cor){
    $this->cor = $cor;
  }

  public function mostrarCor(){
    echo "Mostar cor: " . $this->cor;

  }
  
}