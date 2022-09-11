<?php
require_once 'AliFactory.php';
require_once 'BaiduFactory.php';

class Client{
    public static function run(){
//        $f = new AliFactory();
        $f = new BaiduFactory();
        $model = $f->create();
        $model->send();
    }
}

Client::run();