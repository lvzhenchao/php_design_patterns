<?php

class Context {

    public $st;

    public function __construct($st)
    {
        $this->st = $st;
    }

    public function doMoney($money)
    {
        return $this->st->doMoney($money);
    }
}