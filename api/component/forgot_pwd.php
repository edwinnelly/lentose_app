<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
$app = new controller;
//clean para-user inputs
$email = $app->get_request('email');
$public_key = $app->get_request('user_key');
$new_pwd = rand(12345,123456);

$check_e = $app->validateUserEmail($email,$public_key);
if ($email == '') {
    echo 'Please Enter Your email';
} else {
    if ($check_e == "success") {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $get_category = $app->update_pwd($public_key, $email,$new_pwd);
            echo json_encode($get_category);
        }
    }else{
        $error='em';
        echo json_encode($error);
    }
}
