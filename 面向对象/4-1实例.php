<?php

class Person {
    public $name = "lzc";
    protected $age = 22;
    private $sex = "男";



    public final function getName() {
        echo $this->name;
    }

    protected function getAge() {
        echo $this->age;
    }

    private function getSex() {
        echo $this->sex;
    }


}

class P1 extends Person {

    static $height = 175;
    const COUNTRY = "中国";

    public function __construct($name)
    {
        echo "构造函数".$name;

        echo $this->sex;
        echo $this->sex123;

    }

    public function __get($args)
    {
        //访问不可访问的属性会自动进到这个方法里面 : $this->sex
        echo "hello __get".$args;

    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        echo $name.'--'.$value;
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo "hello __call".$name.print_r($arguments);
    }

    public function __callStatic($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo "hello __callStatic".$name.print_r($arguments);
    }

    public static function test() {
        echo self::$height;//this不能访问
    }


}

$p1 = new P1("lzc");
$p1->qqq = 123;
$p1->qqq(345);
$p1::www(456);

