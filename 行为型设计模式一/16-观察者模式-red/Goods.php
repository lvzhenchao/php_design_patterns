<?php

require_once "Observer.php";

class Goods implements Observer {

    public function update()
    {
        echo "商品已更新...".PHP_EOL;
    }
}
