<?php
require_once "State.php";

class Off implements State{

    public function handle()
    {
        // TODO: Implement handle() method.

        echo "Off......".PHP_EOL;
        return new On;
    }
}