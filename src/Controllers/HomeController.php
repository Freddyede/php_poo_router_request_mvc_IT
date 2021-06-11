<?php


namespace Controllers;


use Core\AbstractController;
use Core\View;

final class HomeController extends AbstractController
{
    public function index() {
        $url = $this->url;
        $title = $this->title;
        new View('home/index',compact("tableau","url","title"));
    }
}