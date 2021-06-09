<?php

namespace Models;

use Facades\DB;
use PDO;

class Animal
{
    const TABLE = "animals";

    public static function all()
    {
        return DB::query('SELECT * FROM ' . self::TABLE)->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}
