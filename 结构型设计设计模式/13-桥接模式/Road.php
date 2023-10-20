<?php
abstract class Road{

    protected $car;

    public function __construct($car)
    {
        $this->car = $car;
    }

    abstract public function run();
}
