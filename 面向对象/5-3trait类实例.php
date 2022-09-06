<?php

class Animal {
    public  function run() {
        echo "go...";
    }
}

trait wolf {
    public function eat(){
        echo "eat meat...";
    }
}



class Dog extends Animal {
    use wolf;

    public function run()
    {
        echo "dog running...";
    }

}

$dog = new Dog();
$dog->run();
$dog->eat();
