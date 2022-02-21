<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto implements DescontoInterface
{
    protected DescontoInterface $proximoDesconto;

    public function setNext(DescontoInterface $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    public function handle(Orcamento $orcamento): float
    {
        if ($this->proximoDesconto) {
            return $this->proximoDesconto->handle($orcamento);
        }

        return null;
    }
}