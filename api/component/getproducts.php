<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');

$app = new controller;
$key = '6241e664ef7671e9945829bd1d401f275bc7693e';
$get_category = $app->getcustomer_lentose($key);
echo($get_category);

