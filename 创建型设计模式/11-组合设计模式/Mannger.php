<?php

require_once "composite.php";

class Mannger extends composite {

    public function add($role)
    {
        $this->roleList[] = $role;
    }

    public function show($deep = 0)
    {
//        print_r($this->roleList);

//        echo str_repeat('-', $deep).$this->name.PHP_EOL;

        echo $this->name."下班5点".PHP_EOL;

        foreach ($this->roleList as $item) {
            $item->show();
        }
    }


}