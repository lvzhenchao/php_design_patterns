<?php
require_once "composite.php";

class User extends composite {

    public function add($role)
    {
        echo "最低级没法加辣。。。".PHP_EOL;
    }

    public function show($deep = 0)
    {
//        var_dump($this->roleList);
//        echo str_repeat('-', $deep).$this->name.PHP_EOL;

        echo $this->name."员工下班6点".PHP_EOL;
    }


}