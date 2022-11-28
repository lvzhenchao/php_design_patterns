<?php

require_once "Log.php";
require_once "Err.php";

class Warn extends Log{

    protected $higher = 'Err';

    public function write($level, $data)
    {
        // TODO: Implement write() method.

        if ($level == 2) {
            echo 'WARN: '.$data.PHP_EOL;
        } else {
            $err = new $this->higher;
            $err->write($level, $data);
        }
    }

}
