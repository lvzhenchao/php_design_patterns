<?php

require_once "Memento.php";

class Monster{//备忘录管理器，实际的执行；自己定义的

    public $blood = 100;

    public function setState(){//保存当前状态
        return new Memento($this->blood);//把状态写入备忘录
    }

    public function recoverState($memento){//恢复状态
        $this->blood = $memento->blood;//从备忘录把状态拿出来
    }

}
