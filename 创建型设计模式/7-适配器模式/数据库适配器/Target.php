<?php
interface Target {
    public function connect($host,$user,$password,$dbname);
    public function query($sql);
    public function close();
}