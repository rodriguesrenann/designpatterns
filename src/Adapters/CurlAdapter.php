<?php

namespace Alura\DesignPattern\Adapters;

class CurlAdapter implements HttpAdapter
{
    public function post(string $url, array $data)
    {
        echo "Requisição feita para a {$url} via CURL Valor:".$data['valor'].' Itens:'.$data['itens'];
    }
}