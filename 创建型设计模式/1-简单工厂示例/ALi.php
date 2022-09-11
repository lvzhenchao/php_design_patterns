<?php
require_once 'IMessage.php';

class ALi implements IMessage{

    public function send()
    {
        echo "send ALi message success".PHP_EOL;
    }

}