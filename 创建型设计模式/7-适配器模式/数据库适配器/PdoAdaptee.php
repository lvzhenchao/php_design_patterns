<?php

class PdoAdaptee {

    protected $connection;

    public function connect($host,$user,$password,$dbname){
        $this->connection = PDO('mysql:host='.$host.';dbname='.$user,$password,$dbname);
    }


    public function query($sql){
        $res = $this->connection->query($sql);

        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function close(){
        $this->connection = null;
    }

}