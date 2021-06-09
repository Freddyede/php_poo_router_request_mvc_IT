<?php

namespace Core;

use PDO;

// Singleton
class Database
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            // 'mysql:host=localhost;dbname=bddname', 'user', 'mot de passe'
            try {
                self::$instance = new PDO('pgsql:host=postgres;dbname=postgres', 'postgres', 'secret');
            } catch (\Exception $err) {
                var_dump($err);
            }
        }

        return self::$instance;
    }

    /**
     * On délègue les appels statiques de méthodes qui n'éxistent pas dans Database
     * à l'instance de PDO que l'on crée au dessus
     */
    public static function __callStatic($name, $arguments)
    {
        return self::getInstance()->$name(...$arguments);
    }
}
