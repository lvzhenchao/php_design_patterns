<?php

require_once "Memento.php";

class Monster{//备忘录管理器

    public $blood = 100;

    public function setState(){//保存当前状态
        return new Memento($this->blood);
    }

    public function recoverState($memento){//恢复状态
        $this->blood = $memento->blood;
    }

}
