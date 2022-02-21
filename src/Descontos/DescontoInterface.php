<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

interface DescontoInterface
{
    public function setNext(DescontoInterface $proximoDesconto);
    public function handle(Orcamento $orcamento): float;
}