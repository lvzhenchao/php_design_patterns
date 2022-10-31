<?php
require_once "RealSubject.php";
require_once "Proxy.php";

class client{
    public static function run(){
        $sub = new RealSubject();

        $proxy = new Proxy($sub);

        $proxy->go();
        $proxy->jump();
    }
}

client::run();