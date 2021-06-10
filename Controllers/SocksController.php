<?php

namespace Controllers;

use Core\View;
use Models\Sock;

class SocksController
{
    public function index()
    {
        $animals = Sock::all();
        new View('animals/index', compact("animals"));
    }

    public function show($id)
    {
        $animalsView = Sock::getById($id);
        new View('animals/show', compact("animalsView"));
    }

    public function create($request)
    {
        var_dump($request->getBody());
    }
}
