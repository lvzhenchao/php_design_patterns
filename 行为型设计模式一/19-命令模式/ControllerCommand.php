<?php

require_once "Command.php";

class ControllerCommand implements Command{


    private $recevier;

    public function __construct($rec)
    {
        $this->recevier = $rec;
    }

    public function execute()
    {
        // TODO: Implement execute() method.

        $this->recevier->action();
    }

}