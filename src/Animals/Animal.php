<?php

namespace Animals;

abstract class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function manger()
    {
        echo "I eat" . PHP_EOL;
    }

    public function dormir()
    {
        echo "I sleep" . PHP_EOL;
    }
}
