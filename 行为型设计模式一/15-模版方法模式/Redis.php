<?php
require_once "Template.php";

class Redis extends Template{

    public function getConfig()
    {
        echo "获取到redis配置".PHP_EOL;
    }

    public function connect()
    {
        echo "链接到redis".PHP_EOL;
    }
}