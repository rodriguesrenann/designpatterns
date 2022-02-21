<?php

namespace Alura\DesignPattern\AcoesPedido;

use Alura\DesignPattern\AcoesPedido\ObserverInterface;
use Alura\DesignPattern\Pedido;

class GeraLog implements ObserverInterface
{
    public function handle(Pedido $pedido): void
    {
        echo "Gerando log no dia {$pedido->dataFinalizacao->format('d/m/Y')}" . PHP_EOL;
    }
}