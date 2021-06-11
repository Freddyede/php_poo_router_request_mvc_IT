<?php


namespace Facades;


use PDO;

/**
 * Class ormManager
 * @package Core
 * SQL pour insérer en BDD
 */
class ormFacade
{
    /**
     * @param $table
     * @return mixed
     */
    public static function all($table)
    {
        return DB::query('SELECT * FROM ' . $table)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * @param $table
     * @param $id
     * @return mixed
     */
    public static function getById($table, $id)
    {
        $sql = DB::prepare('SELECT * FROM ' . $table. ' WHERE id = :id');
        $sql->execute([':id' => $id]);

        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    /**
     * @return mixed all matching colors
     */
    public static function getByColorSocks() {
        $sql = DB::prepare('SELECT * FROM socks INNER JOIN ties ON socks.color = ties.color');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}