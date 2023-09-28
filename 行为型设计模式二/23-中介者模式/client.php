<?php
require_once "Buyer.php";
require_once "Seller.php";
require_once "Mediator.php";

$med = new Mediator();

$buyer  = new Buyer($med);
$seller = new Seller($med);

$med->buyer = $buyer;
$med->seller = $seller;


$buyer->notify($buyer, "你的房子100万卖不卖");
$seller->notify($seller, "太便宜了，不卖");