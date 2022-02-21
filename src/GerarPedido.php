<?php

namespace Alura\DesignPattern;

class GerarPedido
{
    private string $nomeCliente;
    private int $quantidadeItens;
    private float $valor;

    public function __construct(string $nomeCliente, int $quantidadeItens, float $valor)
    {
        $this->nomeCliente = $nomeCliente;
        $this->quantidadeItens = $quantidadeItens;
        $this->valor = $valor;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function getQuantidadeItens(): int
    {
        return $this->quantidadeItens;
    }

    public function getValor(): float
    {
        return $this->valor;
    }
}