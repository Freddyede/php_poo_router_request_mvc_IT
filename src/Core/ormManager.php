<?php


namespace Core;


use Facades\DB;
use PDO;

class ormManager
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
}