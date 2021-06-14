<?php

namespace Controllers;

use Core\AbstractController;
use Core\View;

final class SocksController extends AbstractController
{
    const TABLE = 'socks';
    public function index()
    {
        $socks = $this->findAll(self::TABLE);
        $url = $this->url;
        $title = $this->title;
        new View('socks/index', compact("socks", "url", "title"));
    }
    public function showSocks($request, $id)
    {
        $url = $this->url;
        $title = $this->title;
        $socksView = self::find(self::TABLE, $id);
        try {
            new View('socks/show', compact("socksView", "url", "title"));
        }catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    public function create($request)
    {
        $url = $this->url;
        $title = $this->title;
        $socksView = null;

        new View('socks/create', compact("socksView", "url", "title"));
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
        $socksView = $this->find(self::TABLE, $id);
        new View('socks/update', compact("socksView", "url", "title"));
    }

    public function persistUpdate($request, $id)
    {
        $datas = $request->getBody();
        if (isset($datas)) {
            self::updateController(self::TABLE,$id,$request->getBody());
        }
        header('Location: /socks');
    }

    public function delete($request, $id)
    {
        $this->deleteController('socks', $id);
        header('Location: /socks');
    }
}
