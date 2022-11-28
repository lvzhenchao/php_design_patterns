<?php
abstract class Log{
     protected $higher;

     abstract public function write($level, $data);
}