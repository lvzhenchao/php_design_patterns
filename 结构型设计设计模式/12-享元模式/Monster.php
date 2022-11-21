<?php

require_once "FlyWeight.php";

class Monster extends FlyWeight{//实例

    protected $blood = 100;

    public function __construct($color, $height)
    {
        $this->setColor($color);
        $this->setHeight($height);
    }

    public function setColor($color)
    {
        // TODO: Implement setColor() method.
        $this->color = $color;
    }

    public function setHeight($height)
    {
        // TODO: Implement setHeight() method.
        $this->height = $height;
    }

    public function setBlood($int)
    {
        // TODO: Implement setHeight() method.
        return $this->blood - $int;
    }

}