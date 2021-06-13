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
        new View('socks/index', compact("animals", "url", "title"));
    }
    public function show($request, $id)
    {
        $url = $this->url;
        $title = $this->title;
        $animalsView = $this->find(self::TABLE, $id);
        new View('socks/show', compact("animalsView", "url", "title"));
    }

    public function create($request)
    {
        $url = $this->url;
        $title = $this->title;
        $animalsView = null;

        new View('socks/create', compact("animalsView", "url", "title"));
    }

    public function persistInsert()
    {
        if (isset($_POST)) {
            $this->insertController('socks', $_POST);
        }
        header('Location: /socks');
    }

    public function update($request,  $id)
    {

        $url = $this->url;
        $title = $this->title;
        $animalsView = $this->find(self::TABLE, $id);

        new View('socks/update', compact("animalsView", "url", "title"));
    }

    public function persistUpdate($request, $id)
    {

        if (isset($_POST)) {
            $this->updateController('socks', $id, $_POST);
        }
        header('Location: /socks');
    }
}
