<?php

//1 
require('./contador.php');echo "<br> <h1>Exercicio 1</h1> </br>";

$meuContador = new contador();

$meuContador->incrementar();
$meuContador->valorContador();

//2
require('./modelarBola.php'); echo "<br> <h1>Exercicio 2</h1> </br>";
$minhaBola = new bolinha("Laranja", "Redonda", "Porcelana");

$minhaBola->mostrarCor();
$minhaBola->trocarCor("Azul");
$minhaBola->mostrarCor();

//3
require('./contaCorrente.php'); echo "<br> <h1>Exercicio 3</h1> </br>";
$minhaConta = new ContaBancaria("06184", "Gustavo Provin");

echo "Seu nome é: " . $minhaConta->nomeCorrentista;
$minhaConta->alterarNome("Gustavo");
echo "<br> </br>";
echo "Seu nome agora é: " . $minhaConta->nomeCorrentista;

$minhaConta->deposito(200);
$minhaConta->saque(100);
$minhaConta->deposito(500);
$minhaConta->saque(10);
$minhaConta->deposito(50);
$minhaConta->mostrarSaldo();

//4
require('./calculadora.php'); echo "<br> <h1>Exercicio 4</h1> </br>";
$minhaCalculadora = new calculadora();


$minhaCalculadora->dividir(20, 5);
$minhaCalculadora->dividir(20, 0);
$minhaCalculadora->multiplicar(20, 5);
$minhaCalculadora->somar(20, 5);
$minhaCalculadora->subtrair(20, 5);
$minhaCalculadora->subtrair(5, 20);

$minhaCalculadora->visualizar();

//5
require('./bombaCombustivel.php'); echo "<br> <h1>Exercicio 5</h1> </br>";

$bomba = new bombaCombustivel("Gasolina", 5, 100);

$bomba->abastecerPorValor(50);
$bomba->alterarValor(10);
$bomba->abastecerPorLitro(10);
$bomba->alterarCombustivel('Diesel');

?>