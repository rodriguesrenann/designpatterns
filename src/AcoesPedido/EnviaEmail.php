<?php

namespace Alura\DesignPattern\AcoesPedido;

use Alura\DesignPattern\Pedido;

class EnviaEmail implements ObserverInterface
{
    public function handle(Pedido $pedido): void
    {
        echo "Enviando e-mail para o cliente {$pedido->nomeCliente}" . PHP_EOL;
    }
}