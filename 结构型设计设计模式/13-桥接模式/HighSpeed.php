<?php
require_once "Road.php";

class HighSpeed extends Road{

    public function run()
    {
        $this->car->run();

        echo "行驶在高速上".PHP_EOL;
    }
}