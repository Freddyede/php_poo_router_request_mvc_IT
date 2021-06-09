<?php

namespace Controllers;

use Core\View;
use Models\Animal;

class AnimalController
{
    public function index()
    {
        $animals = Animal::all();

        new View('animals/index', compact("animals"));
    }

    public function show($id)
    {
        $animal = Animal::getById($id);

        var_dump($animal);
    }
}
