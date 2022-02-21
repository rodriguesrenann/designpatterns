<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

class CalculadoraDeImpostos
{
    private $orcamento;
    
    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;        
    }

    public function calcula(Imposto $imposto)
    {
        return $imposto->calcularImposto($this->orcamento);
    }
}