<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class ImpostoIPPS extends Imposto
{
    public function calcularImpostoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.10;
    }
}