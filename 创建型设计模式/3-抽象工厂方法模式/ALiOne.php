<?php
require_once 'IAliMessage.php';

class ALiOne implements IAliMessage {

    public function send()
    {
        echo "send One ALi message success".PHP_EOL;
    }

}