<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class ImpostoAliquotaDupla extends Imposto
{
    public function calcularImpostoEspecifico(Orcamento $orcamento): float
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calcularTaxaMaxima($orcamento);
        }

        return $this->calcularTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
    
    abstract protected function calcularTaxaMaxima(Orcamento $orcamento): float;

    abstract protected function calcularTaxaMinima(Orcamento $orcamento): float;
}
