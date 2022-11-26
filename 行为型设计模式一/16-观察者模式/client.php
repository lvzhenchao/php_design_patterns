<?php

require_once "Goods.php";
require_once "Order.php";
require_once "Action.php";

$action = new Action();

$action->register(new Goods());
$action->register(new Order());

$action->notify();