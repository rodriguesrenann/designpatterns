<?php

namespace Alura\DesignPattern\Adapters;

interface HttpAdapter
{
    public function post(string $url, array $data);
}