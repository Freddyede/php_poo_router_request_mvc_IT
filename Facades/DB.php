<?php

namespace Facades;

use Core\Database;

class DB extends Facade
{
    protected static $rootClass = Database::class;
}
