<?php

require_once "Info.php";

$info = new Info;
$info->write(1, "Info data");
$info->write(2, "Warn data");
$info->write(3, "Err data");