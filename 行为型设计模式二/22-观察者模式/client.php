<?php

require_once "Points.php";
require_once "SavePoints.php";
require_once "Vip.php";
require_once "Users.php";
require_once "Normal.php";

//$points = new Points;
$points = new SavePoints;

$users  = new Users;

$users->addUser(new Vip);
$users->addUser(new Normal);

$users->handleVisitor($points);
