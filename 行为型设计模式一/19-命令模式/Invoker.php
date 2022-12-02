<?php

//实际执行者
class Invoker{

    protected $command;

    public function setCommand($com)
    {
        $this->command = $com;
    }

    public function run()
    {
        $this->command->execute();
    }
}