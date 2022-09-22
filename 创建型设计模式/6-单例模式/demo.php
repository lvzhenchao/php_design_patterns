<?php

class Db {
    private static $instance = null;
    private static $pdo = null;

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function connect()
    {
        if (!self::$pdo instanceof self) {
            self::$pdo = new self();
//            self::$pdo = new PDO($dsn, $username = null, $passwd = null, $options = null);
        }

        return self::$pdo;
    }
}

$db = Db::getInstance();
$db2 = Db::getInstance();
var_dump($db);
var_dump($db2);

//序列号都是1
//object(Db)#1 (0) {
//}
//object(Db)#1 (0) {
//}

