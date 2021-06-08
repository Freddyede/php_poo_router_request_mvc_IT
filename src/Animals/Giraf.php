<?php

namespace Animals;

final class Giraf extends Animal
{
    public function manger()
    {
        parent::manger();
        echo "Nom nom" . PHP_EOL;
    }

    public function dormir()
    {
        parent::dormir();
        echo "Zz Zz" . PHP_EOL;
    }
}
