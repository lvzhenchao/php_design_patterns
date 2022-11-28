<?php

require_once "Log.php";
require_once "Warn.php";

class Info extends Log{

    protected $higher = 'Warn';

    public function write($level, $data)
    {
        // TODO: Implement write() method.

        if ($level == 1) {
            echo 'INFO: '.$data.PHP_EOL;
        } else {
            $warn = new $this->higher;
            $warn->write($level, $data);
        }
    }

}
