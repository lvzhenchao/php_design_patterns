<?php
require_once "DataInterface.php";

Class Data implements DataInterface {

    public $data = null;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function retData()
    {
        return $this->data;
    }
}