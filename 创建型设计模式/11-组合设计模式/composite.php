<?php

abstract class composite {

    protected $name;
    protected $roleList;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function add($role);

    abstract public function show($deep);


}