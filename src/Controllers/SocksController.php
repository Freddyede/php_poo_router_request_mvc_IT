<?php

namespace Controllers;

use Core\AbstractController;
use Core\View;
use Models\Sock;

class SocksController extends AbstractController
{
    public function index()
    {
        $animals = Sock::all();
        $url = $this->url;
        $title = $this->title;
        new View('socks/index', compact("animals","url","title"));
    }
    public function show($request, $id)
    {
        $url = $this->url;
        $title = $this->title;
        $animalsView = Sock::getById($id);
        new View('socks/show', compact("animalsView","url","title"));
    }

    public function create($request)
    {
        var_dump($request->getBody());
    }
}
