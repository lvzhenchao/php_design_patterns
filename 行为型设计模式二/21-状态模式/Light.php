<?php
class Light{

    protected $state;

    public function set($state){
        $this->state = $state;
    }

    public function do(){
        $this->state = $this->state->handle();//关键点
    }
}