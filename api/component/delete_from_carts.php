<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
$app = new controller;
$pid = $app->get_request('pid');
$public_key = $app->get_request('user_key');
$email = $app->get_request('email');
if($public_key=='' && $pid=='' && $pid==0){
    echo'Invalid Api Call';
}else{
    $get_category = $app->delete_carts($public_key, $pid,$email);
    echo json_encode($get_category);
}
