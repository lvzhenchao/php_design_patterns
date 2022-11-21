<?php
require_once "Car.php";

class Bus implements Car{
    public function run(){
        echo "Bus run";
    }
}