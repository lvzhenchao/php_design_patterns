<?php
require_once "User.php";

class Normal extends User{

    public $points = 666;//可以是一个方法，去库里去查积分

    public function accept($visitor)
    {
        // TODO: Implement accept() method.
        $visitor->visitNormal($this);//这个参数对象，去调用方法；$this目的是为了操作vip自己积分的实际
    }
}