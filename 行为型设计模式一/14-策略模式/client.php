<?php
require_once "FullMinus.php";
require_once "DisCount.php";
require_once "Context.php";

class client {

    public static function run($money)
    {
        $fm = new FullMinus();
        $dc = new DisCount();

        //先打折
        $model_dc = new Context($dc);
        $money = $model_dc->doMoney($money);

        //再满减
        $model_fm = new Context($fm);
        $money = $model_fm->doMoney($money);

        return $money;
    }
}

echo client::run(800).PHP_EOL;