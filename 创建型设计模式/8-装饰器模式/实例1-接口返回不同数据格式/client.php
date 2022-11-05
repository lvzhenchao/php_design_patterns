<?php
require_once "Data.php";
require_once "Json.php";
require_once "Xml.php";

class client {

    public static function run($data)
    {
        $d = new Data($data);

//        $json = new Json($d);
//        return $json->retData();
        $xml = new Xml($d);
        return $xml->retData();

    }
}

$data = ['user_name' => 'lzc', 'age' => 11];
$res  = client::run($data);
var_dump($res);