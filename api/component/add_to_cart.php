<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
$app = new controller;
$pid = $app->get_request('pid');
$qty = $app->get_request('qty');
$public_key = $app->get_request('user_key');
$amount = $app->get_request('amount');
$email = $app->get_request('email');
if($public_key=='' && $pid=='' && $qty==0 && $pid==0){
    echo'Invalid Api Call';
}else{
    $get_category = $app->add_new_cart($public_key, $pid,$qty,$amount,$email);
    echo json_encode($get_category);
}
