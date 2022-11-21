<?php
require_once "MonsterFactory.php";

$fa = new MonsterFactory();
$m1 = $fa->getMonster("red", 50, "A");
$m2 = $fa->getMonster("blue", 150, "B");
$m3 = $fa->getMonster("gray", 250, "C");
$m4 = $fa->getMonster("red", 50, "A");

var_dump($m1);
var_dump($m2);
var_dump($m3);
var_dump($m4);

//m1和m4是相同的 都是#2

//object(Monster)#2 (2) {
//["color":protected]=>
//  string(3) "red"
//["height":protected]=>
//  int(50)
//}
//object(Monster)#3 (2) {
//["color":protected]=>
//  string(4) "blue"
//["height":protected]=>
//  int(150)
//}
//object(Monster)#4 (2) {
//["color":protected]=>
//  string(4) "gray"
//["height":protected]=>
//  int(250)
//}
//object(Monster)#2 (2) {
//["color":protected]=>
//  string(3) "red"
//["height":protected]=>
//  int(50)
//}