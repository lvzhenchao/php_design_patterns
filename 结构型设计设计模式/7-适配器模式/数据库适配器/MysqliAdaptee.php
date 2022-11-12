<?php

class MysqliAdaptee {

    protected $connection;

    public function connect($host,$user,$password,$dbname){
        $this->connection = mysqli_connect($host,$user,$password,$dbname);
    }


    public function query($sql){
        $res = mysqli_query($this->connection, $sql);

        return mysqli_fetch_all($res);
    }

    public function close(){
        mysqli_close($this->connection);
    }

}