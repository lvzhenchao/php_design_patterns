<?php
require_once "User.php";
require_once "Order.php";
require_once "Goods.php";

class Facade{
    protected $user;
    protected $goods;
    protected $order;

    public function __construct()
    {
        $this->user = new User();
        $this->goods = new Goods();
        $this->order = new Order();
    }

    public function orderInfo()
    {
        $this->user->getUserInfo();
        $this->goods->getGoodsInfo();
        $this->order->getOrderInfo();
    }
}