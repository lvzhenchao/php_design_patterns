<?php

abstract class Animal {
    public abstract function run();
    public abstract function eat();
    public function go() {
        echo "go...";
    }
}

class Dog extends Animal {
    public function run()
    {
        echo "dog running...";
    }

    public function eat()
    {

        echo "dog eating...";
    }
}

$dog = new Dog();
$dog->run();
$dog->eat();