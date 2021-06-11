<?php


namespace Core;
use Models\Sock;


abstract class AbstractController {
    /**
     * @var array|string[][] $url
     */
    protected array $url = [['url'=>'/socks','name'=>'Socks'],['url'=>'/user/tie','name'=>'Ties']];
    /**
     * @var array|string[][] $title
     */
    protected array $title = [['url'=>'/','name'=>'Home']];
    /**
     * @param $table
     * @return mixed
     */
    public function findAll($table) {
        return Sock::findAll($table);
    }
    /**
     * @param $table
     * @param $id
     * @return mixed
     */
    public function find($table,$id) {
        return Sock::find($table,$id);
    }
    /**
     * @return mixed all matching colors
     */
    public function getByColorsSocksController() {
        return Sock::getByColorsSocks();
    }
}