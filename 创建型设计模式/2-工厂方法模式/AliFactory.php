<?php
require_once 'ALi.php';
require_once 'Factory.php';

class AliFactory extends Factory{
    //创建实例的方法是静态方法
    public function create(){
        return new ALi();
    }
}