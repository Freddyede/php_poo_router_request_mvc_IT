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

    public static function all($table)
    {
        return DB::query('SELECT * FROM ' . $table)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getById($table, $id)
    {
        $sql = DB::prepare('SELECT * FROM ' . $table. ' WHERE id = :id');
        $sql->execute([':id' => $id]);

        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getByColor($table1, $table2)
    {
        $sql = DB::prepare('SELECT * FROM :socks
        INNER JOIN :ties ON :socks.color = :ties.color');
        $sql->execute([':socks'=> $table1, ':ties'=> $table2]);
        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}