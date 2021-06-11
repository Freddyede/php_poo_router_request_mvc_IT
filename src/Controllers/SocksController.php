<?php

namespace Controllers;

use Core\AbstractController;
use Core\View;

final class SocksController extends AbstractController
{
    const TABLE = 'socks';
    public function index()
    {
        $animals = $this->findAll(self::TABLE);
        $url = $this->url;
        $title = $this->title;
        new View('socks/index', compact("animals","url","title"));
    }
    public function show($request, $id)
    {
        $url = $this->url;
        $title = $this->title;
        $animalsView = $this->find(self::TABLE, $id);
        new View('socks/show', compact("animalsView","url","title"));
    }

    public function create($request)
    {
        var_dump($request->getBody());
    }
}
