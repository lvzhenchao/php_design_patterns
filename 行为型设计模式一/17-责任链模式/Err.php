<?php

require_once "Log.php";

class Err extends Log{

    protected $higher = null;

    public function write($level, $data)
    {
        // TODO: Implement write() method.

        if ($level == 3) {
            echo 'ERR: '.$data.PHP_EOL;
        } else {
            echo "未知错误";
        }
    }

}
