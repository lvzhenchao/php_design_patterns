<?php
require_once 'Factory.php';
require_once 'ALiOne.php';
require_once 'BaiduOne.php';

class SendOneFactory extends Factory{
    //创建实例的方法是静态方法
    public function createAli(){
        return new ALiOne();
    }
    public function createBaidu(){
        return new BaiduOne();
    }
}