<?php
require_once "Customer.php";

class Seller extends Customer{
    public function notify($customer, $message)
    {
        // TODO: Implement notify() method.
        $this->mediator->notify($customer, $message);
    }

    public function getMessage($message)
    {
        echo "我是seller，收到buyer的信息了：".$message.PHP_EOL;
    }
}