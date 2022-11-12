<?php
require_once "DataInterface.php";

abstract class Decorator implements DataInterface {
    protected $dObj;

    public function __construct($dObj)
    {
        $this->dObj = $dObj;
    }
}