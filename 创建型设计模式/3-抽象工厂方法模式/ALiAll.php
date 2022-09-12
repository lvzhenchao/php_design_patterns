<?php
require_once 'IAliMessage.php';

class ALiAll implements IAliMessage {

    public function send()
    {
        echo "send All ALi message success".PHP_EOL;
    }

}