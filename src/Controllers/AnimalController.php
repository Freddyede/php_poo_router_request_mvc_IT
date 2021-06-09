<?php

namespace Controllers;

use Core\View;
use Models\Animal;

class AnimalController
{
    public function index()
    {
        $animals = Animal::all();
        $toto = "toto";

        new View('animals/index', compact("animals", "toto"));
    }
}
