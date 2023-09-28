<?php
abstract class Customer {
    protected $mediator;

    public function __construct($mediator){
        $this->mediator = $mediator;
    }

    abstract public function notify($customer, $message);
}