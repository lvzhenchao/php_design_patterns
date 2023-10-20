<?php
require_once "Customer.php";

class Buyer extends Customer{
    public function notify($customer, $message)
    {
        // TODO: Implement notify() method.
        $this->mediator->notify($customer, $message);
    }

    public function getMessage($message)
    {
        echo "我是buyer，收到seller的信息了：".$message.PHP_EOL;
    }
}