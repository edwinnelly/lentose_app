<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
$app = new controller;

$email = $app->get_request('email');
$public_key = $app->get_request('user_key');
$get_category = $app->paid_carts($public_key,$email);
echo json_encode($get_category);

