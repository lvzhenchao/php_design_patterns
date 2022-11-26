<?php
require_once "Subject.php";

class Action implements Subject{

    private $_observer = [];

    public function register($observer)
    {
        // TODO: Implement register() method.

        $this->_observer[] = $observer;
    }

    public function notify()
    {
        // TODO: Implement notify() method.

        foreach ($this->_observer as $ob) {
            $ob->update();
        }
    }
}