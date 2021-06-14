<?php


namespace Core;
use Models\Sock;
use Models\Ties;


abstract class AbstractController {
    /**
     * @var array|string[][] $url
     */
    protected array $url = [['url'=>'/socks','name'=>'Socks'],['url'=>'/ties','name'=>'Ties'],['url'=>'/tiesSocks','name'=>'Join Socks Ties']];
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
    public function ColorsSocksController() {
        return Sock::getByColorsSocks();
    }
    /**
     * @return mixed
     */
    public function getByNameSocksController()
    {
        return Sock::getSocksNameByColorSocks();
    }
    public function getByColorsTiesController() {
        return Ties::getByColorsTies();
    }
    /**
     * @return mixed
     */
    public function getByNameTiesController()
    {
        return Ties::getByNameTies();
    }

    /**
     * @return mixed
     */
    public function insertController($table,$arrayVal)
    {
        return Sock::insertDatas($table,$arrayVal);
    }

    /**
     * @return mixed
     */
    public function updateController($table,$id, $arrayVal)
    {
        return Sock::updateDatas($table,$id, $arrayVal);
    }
    /**
     * @return mixed
     */
    public function deleteController($table,$id)
    {
        return Sock::deleteDatas($table,$id);
    }
}