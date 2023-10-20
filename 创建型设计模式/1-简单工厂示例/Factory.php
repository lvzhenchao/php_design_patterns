<?php
require_once 'ALi.php';
require_once 'BaiDu.php';

class Factory{
    //创建实例的方法是静态方法
    public static function create($arg){
        if ($arg == 'ali') {
            return new ALi();
        } elseif ($arg == 'baidu') {
            return new BaiDu();
        }
    }
}