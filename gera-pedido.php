<?php

use Alura\DesignPattern\AcoesPedido\EnviaEmail;
use Alura\DesignPattern\AcoesPedido\GeraLog;
use Alura\DesignPattern\AcoesPedido\LogPedido;
use Alura\DesignPattern\GerarPedido;
use Alura\DesignPattern\GerarPedidoHandler;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

require "vendor/autoload.php";

$nomeCliente = $argv[1];
$valor = $argv[2];
$numeroItems = $argv[3];

$gerarPedido = new GerarPedido($nomeCliente, $numeroItems, $valor);
$gerarPedidoHandler = new GerarPedidoHandler;

$gerarPedidoHandler->attach(new EnviaEmail);
$gerarPedidoHandler->attach(new GeraLog);

$gerarPedidoHandler->handle($gerarPedido);
