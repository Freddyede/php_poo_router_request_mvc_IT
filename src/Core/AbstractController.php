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
        if($table == 'socks'){
            return Sock::findAll($table);
        } else {
            return Ties::findAll($table);
        }
    }
    /**
     * @param $table
     * @param $id
     * @return mixed
     */
    public function find($table,$id) {
        if($table == 'socks'){
            return Sock::find($table,$id);
        } else {
            return Ties::find($table,$id);
        }
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
        if($table == 'socks'){
            return Sock::insertDatas($table,$arrayVal);
        } else {
            return Ties::insertDatas($table,$arrayVal);

        }
    }

    /**
     * @return mixed
     */
    public function updateController($table,$id, $arrayVal)
    {
        if($table == 'socks'){
            return Sock::updateDatas($table,$id, $arrayVal);
        } else {
            return Ties::updateDatas($table,$id, $arrayVal);

        }
    }
    /**
     * @return mixed
     */
    public function deleteController($table,$id)
    {
        if($table == 'socks'){
            return Sock::deleteDatas($table,$id);
        } else {
            return Ties::deleteDatas($table,$id);
        }
    }
}