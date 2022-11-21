<?php
abstract class FlyWeight{
    protected $color;

    protected $height;

    abstract public function setColor($color);
    abstract public function setHeight($height);
}