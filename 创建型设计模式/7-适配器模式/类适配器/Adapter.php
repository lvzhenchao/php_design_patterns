<?php
require_once "Target.php";
require_once "Adaptee.php";

class Adapter extends Adaptee implements Target {

    public function eat()
    {
        echo "eat...".PHP_EOL;
    }

    public function jump()
    {
        echo "jump...".PHP_EOL;
    }
}