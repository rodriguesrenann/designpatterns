<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Adapters\HttpAdapter;

class RegistroOrcamento
{
    private HttpAdapter $httpAdapter;

    public function __construct(HttpAdapter $httpAdapter)
    {
        $this->httpAdapter = $httpAdapter;
    }

    public function registrar(Orcamento $orcamento)
    {
        $this->httpAdapter->post('urlfake.api.com', [
            'valor' => $orcamento->valor,
            'itens' => $orcamento->quantidadeItems
        ]);
    }
}