<?php
require_once "Visitor.php";

class Points extends Visitor{

    public function visitVip($user)
    {
        // TODO: Implement visitVip() method.
        echo "Vip积分是：".$user->points. ' vip用户积分加10'.PHP_EOL;
    }

    public function visitNormal($user)
    {
        // TODO: Implement visitNormal() method.
        echo "普通用户积分是：".$user->points. ' 普通用户积分加5'.PHP_EOL;
    }
}