<?php
require_once 'BaiDu.php';
require_once 'Factory.php';

class BaiduFactory{
    //创建实例的方法是静态方法
    public function create(){
        return new BaiDu();
    }
}