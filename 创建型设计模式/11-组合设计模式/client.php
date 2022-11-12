<?php

require_once "Mannger.php";
require_once "User.php";

$ceo = new Mannger('ceo');

$mannger1 = new Mannger("财务经理");
$mannger2 = new Mannger("销售经理");

$ceo->add($mannger1);
$ceo->add($mannger2);

$user_A = new User("销售员A");
$user_B = new User("销售员B");

$user_C = new User("会计C");
$user_D = new User("会计D");

$mannger1->add($user_C);
$mannger1->add($user_D);

$mannger2->add($user_A);
$mannger2->add($user_B);

$ceo->show();

