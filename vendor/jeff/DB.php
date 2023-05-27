<?php

namespace core;

class DB
{
    public static function connect()
    {
        $db = require_once dirname(__DIR__, 2) . '/config/db.php';
        try {
            $PDO = new \PDO($db['dsn'], $db['user'], $db['password']);
        } catch (\PDOException $e) {
            $e->getMessage();
        }
        return $PDO;
    }
}
