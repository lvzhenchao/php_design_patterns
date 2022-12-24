<?php
require_once "State.php";

class On implements State{

    public function handle()
    {
        // TODO: Implement handle() method.

        echo "ON......".PHP_EOL;
        return new Off;
    }
}