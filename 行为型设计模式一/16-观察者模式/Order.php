<?php

require_once "Observer.php";

class Order implements Observer {

    public function update()
    {
        echo "订单已更新...".PHP_EOL;
    }
}
