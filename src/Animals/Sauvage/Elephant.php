<?php

namespace Animals\Sauvage;

use Animals\Animal;

final class Elephant extends Animal
{
    public function manger()
    {
        parent::manger();
        echo "Krounch krounch" . PHP_EOL;
    }

    public function dormir()
    {
        parent::dormir();
        echo "Ronpich ronpich" . PHP_EOL;
    }
}
