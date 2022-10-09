<?php
require_once "Target.php";

class Adapter implements Target {

    private $db;

    public function __construct($type)
    {
        $type = $type.'Adaptee';

        $this->db = new $type;
    }

    //对象委派调取方法：组合对象
    public function connect($host,$user,$password,$dbname)
    {
        $this->db->connect($host,$user,$password,$dbname);
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }

    public function close()
    {
        $this->db->close();
    }
}