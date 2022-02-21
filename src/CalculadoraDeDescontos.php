<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Orcamento;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento)
    {
        $cadeiaDeDescontos = new DescontoMaisDe500Reais(
            new DescontoMaisDe5Itens(
                new SemDesconto
            )
        );

       return $cadeiaDeDescontos->calcularDesconto($orcamento);
    }
}
