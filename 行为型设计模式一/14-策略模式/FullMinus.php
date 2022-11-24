<?php
require_once "Strategy.php";

class FullMinus implements Strategy{//满减

    public function doMoney($money)
    {
        if ($money > 300) {
            return $money-100;
        }

        return $money;
    }
}