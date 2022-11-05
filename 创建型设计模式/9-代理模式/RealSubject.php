<?php
require_once "Subject.php";

class RealSubject implements Subject{

    public function go(){
        echo "go ...".PHP_EOL;
    }

    public function jump(){
        echo "jump ...".PHP_EOL;

    }
}