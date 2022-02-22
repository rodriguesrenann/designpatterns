<?php

require "vendor/autoload.php";

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\ImpostoICMS;
use Alura\DesignPattern\Impostos\ImpostoIKCV;
use Alura\DesignPattern\Impostos\ImpostoIPPS;
use Alura\DesignPattern\Impostos\ImpostoIPS;

/* $orcamento = new Orcamento;
$orcamento->valor = 100;

$calculadora = new CalculadoraDeImpostos($orcamento);
echo $calculadora->calcula(new ImpostoIPS); */
/* $calculadoraDeDescontos = new CalculadoraDeDescontos;

$orcamento = new Orcamento;
$orcamento->quantidadeItems = 5;
$orcamento->valor = 600;

echo $calculadoraDeDescontos->calculaDesconto($orcamento); */

$orcamento = new Orcamento;
$orcamento->valor = 1800;
$orcamento->quantidadeItems = 5;

/*$calculadoraDeDescontos = new CalculadoraDeDescontos;
echo $calculadoraDeDescontos->calculaDesconto($orcamento);
 */
$calculadoraDeImpostos = new CalculadoraDeImpostos($orcamento);
echo $calculadoraDeImpostos->calcula(new ImpostoIPS(new ImpostoIPPS(new ImpostoICMS())));