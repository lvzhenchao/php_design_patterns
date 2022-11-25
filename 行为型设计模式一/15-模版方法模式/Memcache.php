<?php
require_once "Template.php";

class Memcache extends Template{

    public function getConfig()
    {
        echo "获取到memcache配置".PHP_EOL;
    }

    public function connect()
    {
        echo "链接到memcache".PHP_EOL;
    }
}