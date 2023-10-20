<?php
class Mediator {
    public $buyer;

    public $seller;

    public function notify($customer, $message) {
        if ($this->buyer == $customer) {
            $this->seller->getMessage($message);
        } else {
            $this->buyer->getMessage($message);
        }
    }
}