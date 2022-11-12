<?php
require_once "Decorator.php";

class Json extends Decorator {

    public function retData() {
        $data = $this->dObj->retData();

        return json_encode($data);
    }
}