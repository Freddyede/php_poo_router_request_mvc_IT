<?php

namespace Controllers;

use Core\View;
use Models\Sock;

class SocksController
{
    public function index()
    {
        $animals = Sock::all();
        new View('socks/index', compact("animals"));
    }

    public function show($id)
    {
        $animalsView = Sock::getById($id);
        new View('socks/show', compact("animalsView"));
    }

    public function create($request)
    {
        var_dump($request->getBody());
    }
}
