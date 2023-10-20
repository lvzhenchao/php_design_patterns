<?php

require_once "Monster.php";

class MonsterFactory {//工厂类

    private $flyweights = [];

    public function getMonster($color, $weight, $type)
    {
        if (!array_key_exists($type, $this->flyweights)) {
            $this->flyweights[$type] = new  Monster($color, $weight);
        }

        return $this->flyweights[$type];
    }


}