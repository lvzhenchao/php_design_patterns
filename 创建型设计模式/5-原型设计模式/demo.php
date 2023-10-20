<?php

class Car {
    public $name;

    public function setName($name) {
        $this->name = $name;
    }
}

class Drive {
    private $car;

    public function setCar($car) {
        $this->car = $car;
    }

    public function start() {
        echo $this->car->name.'...开始启动'.PHP_EOL;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        $this->car = clone $this->car;//加上这个就是深拷贝了，就不会有41和42重复的了
    }
}

class Client {
    public static function run() {
        $car = new Car();
        $car->name = '奔驰';

        $d = new Drive();
        $d->setCar($car);
//        $d->start();

        $dd = clone $d;//关键点
        $car->name = '宝马';

        $d->start();//如果放到这里第一个，会发现一样的内容：浅拷贝
        $dd->start();
    }
}


Client::run();









