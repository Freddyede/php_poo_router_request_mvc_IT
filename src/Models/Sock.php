<?php

namespace Models;

use Core\ormManager;
use Facades\DB;
use PDO;

class Sock extends ormManager
{
    public static function findAll($table){
        return self::all($table);
    }

    public static function find($table,$id){
        return self::getById($table,$id);
    }
}
