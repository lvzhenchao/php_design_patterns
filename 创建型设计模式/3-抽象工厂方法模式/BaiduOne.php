<?php
require_once 'IBaiduMessage.php';

class BaiduOne implements IBaiduMessage {

    public function send()
    {
        echo "send One Baidu message success".PHP_EOL;
    }

}