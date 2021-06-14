<?php

namespace Controllers;

use Core\AbstractController;
use Core\View;

final class TiesController extends AbstractController
{
    const TABLE = 'ties';
    public function index()
    {
        $socks = $this->findAll(self::TABLE);
        $url = $this->url;
        $title = $this->title;
        new View('ties/index', compact("socks", "url", "title"));
    }
    public function show($request, $id)
    {
        $url = $this->url;
        $title = $this->title;
        $ties = $this->find(self::TABLE, $id);
        new View('ties/show', compact("ties", "url", "title"));
    }

    public function create($request)
    {
        $url = $this->url;
        $title = $this->title;
        $socksView = null;

        new View('ties/create', compact("socksView", "url", "title"));
    }

    public function persistInsert()
    {
        if (isset($_POST)) {
            $this->insertController('ties', $_POST);
        }
        header('Location: /ties');
    }

    public function update($request,  $id)
    {

        $url = $this->url;
        $title = $this->title;
        $socksView = $this->find(self::TABLE, $id);
        new View('socks/update', compact("socksView", "url", "title"));
    }

    public function persistUpdate($request, $id)
    {
        if (isset($_POST)) {
            self::updateController(self::TABLE,$id,$request->getBody());
        }
        header('Location: /socks');
    }

    public function delete($request, $id)
    {
        $this->deleteController('ties', $id);
        header('Location: /ties');
    }
}
