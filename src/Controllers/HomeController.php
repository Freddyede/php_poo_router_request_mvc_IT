<?php


namespace Controllers;


use Core\AbstractController;
use Core\View;

final class HomeController extends AbstractController
{
    public function index() {
        $this->deleteController('socks',4);
        $url = $this->url;
        $title = $this->title;
        new View('home/index',compact("url","title"));
    }
}