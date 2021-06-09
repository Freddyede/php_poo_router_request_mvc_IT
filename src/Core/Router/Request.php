<?php

namespace Core\Router;

class Request
{
    private string $method;

    private string $uri;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = rtrim($_SERVER['REQUEST_URI'], '/');
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getUri()
    {
        return $this->uri;
    }
}
