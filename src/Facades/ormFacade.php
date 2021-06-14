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
        $sql = DB::prepare('SELECT * FROM '.$table.' WHERE id = :id');
        $sql->execute([':id' => $id]);

        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /**
     * @return mixed
     */
    public static function getSocksByColorSocks()
    {
        $sql = DB::prepare('SELECT socks.name,socks.type,socks.color FROM socks INNER JOIN ties ON socks.color = ties.color');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getTiesByColorSocks()
    {
        $sql = DB::prepare('SELECT ties.name,ties.type,ties.color FROM ties INNER JOIN socks ON socks.color = ties.color');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return mixed
     */
    public static function getSocksNameByColorSocks()
    {
        $sql = DB::prepare('SELECT socks.name FROM socks INNER JOIN ties ON socks.color = ties.color');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getTiesNameByColorSocks()
    {
        $sql = DB::prepare('SELECT ties.name FROM ties INNER JOIN socks ON socks.color = ties.color');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param $table
     * @param $id
     * @param $arrayVal
     * @return mixed
     */
    public static function update($table, $id, $arrayVal)
    {
        $sql = DB::prepare("UPDATE $table SET name = :name, type = :type, color = :color WHERE id=:id");
        $sql->execute(
            [
                ':name' => $arrayVal['name'],
                ':type' => $arrayVal['type'],
                ':color' => $arrayVal['color'],
                ':id' => $id
            ]
        );
        return $sql->fetchAll();
    }

    /**
     * @param $table
     * @param $arrayVal
     * @return mixed
     */
    public static function insert($table, $arrayVal)
    {
        $sql = DB::prepare("INSERT INTO $table (name,type,color) VALUES (:name,:type,:color)");
        $sql->execute(
            [
                ':name' => $arrayVal['name'],
                ':type' => $arrayVal['type'],
                ':color' => $arrayVal['color']
            ]
        );
        return $sql->fetchAll();
    }

    /**
     * @param $table
     * @param $id
     * @return mixed
     */
    public static function delete($table, $id)
    {
        $sql = DB::prepare("DELETE FROM $table WHERE id = :id");
        $sql->execute([':id' => $id]);
        return $sql->fetchAll();
    }
}
