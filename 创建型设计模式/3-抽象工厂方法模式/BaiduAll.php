<?php
require_once 'IBaiduMessage.php';

class BaiduAll implements IBaiduMessage {

    public function send()
    {
        echo "send All Baidu message success".PHP_EOL;
    }

}