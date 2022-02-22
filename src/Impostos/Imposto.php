<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto
{
    protected ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract public function calcularImpostoEspecifico(Orcamento $orcamento): float;

    public function calcularImposto(Orcamento $orcamento): float
    {
        return $this->calcularImpostoEspecifico($orcamento) + $this->calcularOutroImposto($orcamento);
    }

    public function calcularOutroImposto(Orcamento $orcamento): float
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calcularImposto($orcamento);
    }
}
