<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

class ImpostoIPS extends Imposto
{
    public function calcularImpostoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.07;
    }
}