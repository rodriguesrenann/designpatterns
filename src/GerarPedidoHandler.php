<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesPedido\ObserverInterface;

class GerarPedidoHandler
{
    /** @var ObserverInterface[] */
    private array $observers = [];

    public function __construct(/* Repository, MailService */)
    {
        
    }

    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function handle(GerarPedido $gerarPedido): void
    {
        $orcamento = new Orcamento;
        $orcamento->quantidadeItems = $gerarPedido->getQuantidadeItens();
        $orcamento->valor = $gerarPedido->getValor();

        $pedido = new Pedido;
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->dataFinalizacao = new \DateTime();
        $pedido->orcamento = $orcamento;

        foreach ($this->observers as $observer) {
            $observer->handle($pedido);
        }
    }
}