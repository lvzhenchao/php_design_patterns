<?php
class Person {
    public $name = "lzc";
    protected $age = 22;
    private $sex = "男";

    public function getName() {
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
    public function test() {
        $this->getAge();
//        $this->getSex();不能访问
    }

}

$p1 = new P1();
$p1->getName();
$p1->test();

$p = new Person();
echo $p->name;
//echo $p->age;//不能访问
//echo $p->sex;//不能访问

$p->getName();
//$p->getAge();//不能访问
//$p->getSex();//不能访问