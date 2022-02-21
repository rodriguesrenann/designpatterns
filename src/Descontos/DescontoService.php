<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoService
{
    public function calcularDescontos(Orcamento $orcamento)
    {
        $desconto = 0;

        $desconto500Reais = new DescontoMaisDe500Reais;
        $desconto5Itens = new DescontoMaisDe5Itens;

        $desconto500Reais->setNext($desconto5Itens);
        $desconto = $desconto500Reais->handle($orcamento);

        return $desconto;
    }
}