<?php
require_once "Road.php";

class Street extends Road{

    public function run()
    {
        $this->car->run();

        echo "行驶在街边小路上".PHP_EOL;
    }
}