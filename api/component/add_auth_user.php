<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
$app = new controller;
//clean para-user inputs
$email = $app->get_request('email');
$password = $app->get_request('password');
$public_key = $app->get_request('user_key');
$fn = $app->get_request('fn');
$ln = $app->get_request('ln');

$check_e = $app->validateUserEmail($email,$public_key);
if ($email == '') {
    echo 'Please Enter Your email';
} else {
    if ($check_e == "success") {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $get_category = $app->add_new_member($public_key, $email, $password, $fn, $ln);
            echo json_encode($get_category);
        }
    }else{
        $error='em';
        echo json_encode($error);
    }
}
