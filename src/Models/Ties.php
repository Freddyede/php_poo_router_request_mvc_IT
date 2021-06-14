<?php

namespace Models;

use Facades\ormFacade;

/**
 * Class Sock
 * @package Models
 * add final
 * Appel a ormManager de façon a limiter les requêtes en BDD
 */
final class Ties extends ormFacade
{
    /**
     * @param $table
     * @return mixed
     * Method call by abstractController
     */
    public static function findAll($table)
    {
        return self::all($table);
    }
    /**
     * @param $table
     * @param $id
     * @return mixed
     * Method call by abstractController
     */
    public static function find($table, $id)
    {
        return self::getById($table, $id);
    }
    /**
     * @return mixed all matching colors
     */
    public static function getByColorsTies()
    {
        return self::getTiesByColorSocks();
    }

    /**
     * @return mixed
     */
    public static function getByNameTies()
    {
        return self::getTiesNameByColorSocks();
    }

    /**
     * @return mixed
     */
    public static function insertDatas($table, $arrayVal)
    {
        return self::insert($table, $arrayVal);
    }

    /**
     * @return mixed
     */
    public static function updateDatas($table, $id, $arrayVal)
    {
        return self::update($table, $id, $arrayVal);
    }

    /**
     * @return mixed
     */
    public static function deleteDatas($table, $id)
    {
        return self::delete($table, $id);
    }
}
