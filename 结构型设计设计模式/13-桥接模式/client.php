<?php
require_once "Jeep.php";
require_once "Bus.php";
require_once "Street.php";
require_once "HighSpeed.php";

$bus = new Bus;
$jeep = new Jeep;

$street1 = new Street($bus);
$street2 = new Street($jeep);

$speed1 = new HighSpeed($bus);
$speed2 = new HighSpeed($jeep);

$street1->run();
$street2->run();

$speed1->run();
$speed2->run();