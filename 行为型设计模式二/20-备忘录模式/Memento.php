<?php

class Memento{//备忘录类，保存状态
    public $blood;

    public function __construct($blood)
    {
        $this->blood = $blood;
    }
}
