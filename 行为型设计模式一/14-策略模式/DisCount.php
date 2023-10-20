<?php
require_once "Strategy.php";

class DisCount implements Strategy{//打折

    public function doMoney($money)
    {
        if ($money > 500) {
            return $money * 0.8;
        }

        return $money;
    }
}