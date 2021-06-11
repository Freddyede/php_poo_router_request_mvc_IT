<?php


namespace Controllers;


use Core\AbstractController;
use Core\View;

class HomeController extends AbstractController
{
    public function index() {
        $url = $this->url;
        $title = $this->title;
        new View('home/index',compact("url","title"));
    }
}