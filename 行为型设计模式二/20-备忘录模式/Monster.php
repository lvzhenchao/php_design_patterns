<?php

require_once "Memento.php";

class Monster{

    public $blood = 100;

    public function setState(){
        return new Memento($this->blood);
    }

    public function recoverState($memento){
        $this->blood = $memento->blood;
    }

}
