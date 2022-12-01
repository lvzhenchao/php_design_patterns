<?php
class Test implements Iterator {

    private $var;

    private $count = 0;

    public function __construct($arr)
    {
        $this->var = $arr;
    }

    //
    public function current()
    {
        // TODO: Implement current() method.
        echo "current...".PHP_EOL;
        return current($this->var);
    }

    public function next()
    {
        // TODO: Implement next() method.
        echo "next...".PHP_EOL;
        next($this->var);
        $this->count++;
    }

    //获取key
    public function key()
    {
        // TODO: Implement key() method.
        echo "key...".PHP_EOL;
        return key($this->var);
    }

    //验证合法性，如是不是最后一个了
    public function valid()
    {
        // TODO: Implement valid() method.
        echo "valid...".PHP_EOL;
        return $this->count < count($this->var);
    }

    //重置指针
    public function rewind()
    {
        // TODO: Implement rewind() method.
        echo "rewind...".PHP_EOL;
        reset($this->var);
    }

}

$arr = ['name' => "lzc", 'age' => 12];
$t = new Test($arr);
//var_dump($t);

foreach ($t as $k=>$v){
    echo 'key-'.$k.' val-'.$v.PHP_EOL.PHP_EOL;
    //rewind...
    //valid...
}
//
//rewind...
//valid...
//current...
//key...
//key-name val-lzc

//
//next...
//valid...
//current...
//key...
//key-age val-12

//
//next...
//valid...








