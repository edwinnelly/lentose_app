<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
$app = new controller;
//clean para-user inputs
$email = $app->get_request('email');
$password = $app->get_request('password');
$public_key = $app->get_request('user_key');
if ($email == '') {
    echo 'Invalid Api Call';
} else {
    $get_category = $app->auth_users($public_key, $email, $password);
    echo json_encode($get_category);
}
