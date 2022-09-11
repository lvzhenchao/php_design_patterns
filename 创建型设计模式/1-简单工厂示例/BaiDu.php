<?php
require_once 'IMessage.php';

class BaiDu implements IMessage{

    public function send()
    {
        echo "send BaiDu message success".PHP_EOL;
    }

}