<?php
require_once 'Factory.php';
require_once 'ALiAll.php';
require_once 'BaiduAll.php';

class SendAllFactory extends Factory{
    //创建实例的方法是静态方法
    public function createAli(){
        return new ALiAll();
    }
    public function createBaidu(){
        return new BaiduAll();
    }
}