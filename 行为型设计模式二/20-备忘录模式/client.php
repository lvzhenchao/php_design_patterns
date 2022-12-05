<?php

require_once "Monster.php";
require_once "Manager.php";

$manager = new Manager;

$monster = new Monster;

echo "初始化状态...".PHP_EOL;

var_dump($monster);


$manager->memento = $monster->setState();

echo "收到攻击...".PHP_EOL;

$monster->blood = 90;

var_dump($monster);

$monster->recoverState($manager->memento);

var_dump($monster);
