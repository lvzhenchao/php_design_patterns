<?php
interface Subject{

    public function register($observer);

    public function notify();
}