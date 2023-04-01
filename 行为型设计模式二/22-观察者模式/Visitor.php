<?php
abstract class Visitor{

    abstract public function visitVip($user);

    abstract public function visitNormal($user);

}