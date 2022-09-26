<?php
require_once 'Adapter.php';
require_once 'Adaptee.php';

class client {
    public static function run() {

        $adaptee = new Adaptee;

        $adapter = new Adapter($adaptee);

        $adapter->jump();
        $adapter->eat();
        $adapter->go();
    }
}

client::run();