<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento)
    {
        if ($orcamento->quantidadeItems > 5) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}