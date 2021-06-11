<?php

namespace Models;

use Facades\ormFacade;

/**
 * Class Sock
 * @package Models
 * add final
 * Appel a ormManager de façon a limiter les requêtes en BDD
 */
final class Sock extends ormFacade
{
    /**
     * @param $table
     * @return mixed
     * Method call by abstractController
     */
    public static function findAll($table){
        return self::all($table);
    }
    /**
     * @param $table
     * @param $id
     * @return mixed
     * Method call by abstractController
     */
    public static function find($table,$id){
        return self::getById($table,$id);
    }
    /**
     * @return mixed all matching colors
     */
    public static function getByColorsSocks()
    {
        return self::getByColorSocks();
    }
}
