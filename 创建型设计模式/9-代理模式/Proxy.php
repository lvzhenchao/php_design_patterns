<?php
require_once "Subject.php";

class Proxy implements Subject{
    private $_sub;

    public function __construct($sub)
    {
        $this->_sub = $sub;
    }

    public function go(){
        $this->_sub->go();
    }

    public function jump(){
        $this->_sub->jump();

    }
}