<?php

use Alura\DesignPattern\Adapters\CurlAdapter;
use Alura\DesignPattern\Adapters\ReactPHPAdapter;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\RegistroOrcamento;

require "vendor/autoload.php";

$orcamento = new Orcamento;
$orcamento->valor = 500;
$orcamento->quantidadeItems = 5;

$registroOrcamento = new RegistroOrcamento(new ReactPHPAdapter);
$registroOrcamento->registrar($orcamento);