<?php

interface Animal {
    const COLOR = "Red";
    public  function run();
    public  function eat();
}

interface Fruit {
    public function color();
}

class Dog implements Animal,Fruit {
    public function run()
    {
        echo "dog running...";
    }

    public function eat()
    {

        echo "dog eating...";
    }

    public function color()
    {
        // TODO: Implement color() method.
        echo "dog color...";
    }
}

$dog = new Dog();
$dog->run();
$dog->eat();
echo $dog::COLOR;