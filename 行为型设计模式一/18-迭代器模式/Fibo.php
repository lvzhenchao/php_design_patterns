<?php

class Fibo implements Iterator{

    private $pre = 1;
    private $cur = 0;
    private $k = 0;

    public function current()
    {
        // TODO: Implement current() method.
        //当前值
        return $this->cur;
    }

    public function key()
    {
        // TODO: Implement key() method.
        return $this->k;
    }

    public function next()
    {
        // TODO: Implement next() method.

        $new_pre = $this->cur;

        $this->cur += $this->pre;

        $this->pre = $new_pre;

        $this->k++;
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.

    }

    public function valid()
    {
        // TODO: Implement valid() method.
        if ($this->k == 10) {
            return false;
        } else {
            return true;
        }
    }

}

$f = new Fibo;

foreach ($f as $k => $v) {
    echo $v.PHP_EOL;
}