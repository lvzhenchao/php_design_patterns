<?php
require_once 'SendOneFactory.php';
require_once 'SendAllFactory.php';

class Client{
    public static function run(){
//        $f = new SendOneFactory();
        $f = new SendAllFactory();
        $a = $f->createAli();
        $b = $f->createBaidu();
        $a->send();
        $b->send();
    }
}

Client::run();