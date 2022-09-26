<?php
require_once "Target.php";

class Adapter implements Target {

    private $_adaptee;

    public function __construct($adaptee)
    {
        $this->_adaptee = $adaptee;
    }

    //对象委派调取方法：组合对象
    public function go()
    {
        $this->_adaptee->go();
    }

    public function eat()
    {
        echo "eat...".PHP_EOL;
    }

    public function jump()
    {
        echo "jump...".PHP_EOL;
    }
}