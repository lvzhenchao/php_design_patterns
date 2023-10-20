<?php
require_once 'Adapter.php';
//require_once 'MysqliAdaptee.php';

$db = new Adapter('Mysqli');
$db = new Adapter('Pdo');

$db->connect('127.0.0.1', 'root', '123456', 'test');

$res = $db->query('select * from user where id = 1');

$db->close();