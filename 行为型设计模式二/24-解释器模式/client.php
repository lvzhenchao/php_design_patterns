<?php
require_once 'templateExpression.php';

$tem = new templateExpression;

$data = '{ $name }';

echo $tem->interpret($data);