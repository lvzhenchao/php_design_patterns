<?php

require_once "Recevier.php";
require_once "Invoker.php";
require_once "ControllerCommand.php";

$receiver = new Recevier;

$command  = new ControllerCommand($receiver);

$inv = new Invoker;
$inv->setCommand($command);
$inv->run();
