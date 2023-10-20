<?php
require_once 'Factory.php';

class Client{
    public function run($arg){
        $f = Factory::create($arg);
        $f->send();
    }
}

$model = new Client();
$model->run("ali");