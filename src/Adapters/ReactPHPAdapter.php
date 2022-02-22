<?php

namespace Alura\DesignPattern\Adapters;

class ReactPHPAdapter implements HttpAdapter
{
    public function post(string $url, array $data)
    {
        echo "Requisição para {$url} feita com React PHP. Valor".$data['valor'].' Itens:'.$data['itens'];
    }
}