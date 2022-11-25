<?php

abstract class Template{

    public function __construct()
    {
        $this->getConfig();
        $this->connect();
    }

    abstract public function getConfig();

    abstract public function connect();
}
