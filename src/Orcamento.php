<?php

namespace Alura\DesignPattern;

class Orcamento
{
    public int $quantidadeItems;
    public float $valor;
    public string $estado;

    public function aplicaDescontoExtra(): float
    {
        return $this->valor -= $this->calculaDescontoExtra();
    }

    public function calculaDescontoExtra(): float
    {
        if ($this->estado === "EM_APROVACAO") {
            return $this->valor * 0.05;
        }

        if ($this->estado === "APROVADO") {
            return $this->valor * 0.04;
        }

        throw new \DomainException("Estado inválido");
    }
}
