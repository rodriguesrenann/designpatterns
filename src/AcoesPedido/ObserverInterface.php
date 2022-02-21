<?php

namespace Alura\DesignPattern\AcoesPedido;

use Alura\DesignPattern\Pedido;

interface ObserverInterface
{
    public function handle(Pedido $pedido): void;
}