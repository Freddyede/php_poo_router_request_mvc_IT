<?php

namespace Facades;

class Facade
{
    protected static $rootClass;

    public static function __callStatic($name, $arguments)
    {
        /**
         * parent::
         * self::
         * static::
         */
        return static::$rootClass::$name(...$arguments);
    }
}
