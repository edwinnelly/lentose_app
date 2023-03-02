<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
$app = new controller;
$public_key = $app->get_request('user_key');
$email = $app->get_request('email');
if($public_key==''){
    echo'Invalid Api Call';
}else{
    $get_category = $app->clear_carts($public_key,$email);
    echo json_encode($get_category);
}
