<?php
require_once 'Adapter.php';

class client {
    public static function run() {
        $adapter = new Adapter;

        $adapter->jump();
        $adapter->eat();
        $adapter->go();
    }
}

client::run();