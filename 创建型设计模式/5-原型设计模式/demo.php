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
    }
}

class Client {
    public static function run() {
        $car = new Car();
        $car->name = '奔驰';

        $d = new Drive();
        $d->setCar($car);
        $d->start();

        $dd = clone $d;//关键点
        $car->name = '宝马';
        $dd->start();
    }
}


Client::run();









