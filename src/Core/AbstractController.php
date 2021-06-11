<?php


namespace Core;
use Models\Sock;


abstract class AbstractController {
    protected array $url = [['url'=>'/socks','name'=>'Socks'],['url'=>'/user/tie','name'=>'Ties']];
    protected array $title = [['url'=>'/','name'=>'Home']];
    public function findAll($table) {
        return Sock::all($table);
    }
    public function find($table,$id) {
        return Sock::getById($table,$id);
    }
}