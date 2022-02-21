<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function handle(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItems > 5) {
            return $orcamento->valor * 0.05;
        }

        return parent::handle($orcamento);
    }
}