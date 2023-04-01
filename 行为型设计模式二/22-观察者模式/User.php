<?php
abstract class User{
    abstract public function accept($visitor);//$visitor参数代表：什么类型的观察者：普通人还是VIP用户
}