<?php

namespace Core;

class View
{
    private $template;

    private $data;

    public function __construct($template, $data)
    {
        $template = __DIR__ . '/../Views/' . $template . '.php';

        if (!file_exists($template)) {
            throw new \Exception("La vue $template n'éxiste pas.");
        }

        $this->template = $template;
        $this->data = $data;
    }

    public function __destruct()
    {
        extract($this->data);
        // $animals
        // $toto

        include $this->template;
    }
}
