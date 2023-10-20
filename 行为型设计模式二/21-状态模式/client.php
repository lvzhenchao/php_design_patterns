<?php

require_once "Light.php";
require_once "On.php";
require_once "Off.php";

$l = new Light;

$l->set(new off);

$l->do();
$l->do();
$l->do();