<?php
//db config
include_once('../config/cores.php');
include_once('../config/db-config.php');
include_once('../config/controller.php');

// Handle the request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //Process a GET request
    $app = new controller;

    $public_key = $app->get_request('user_key');
    $pid = $app->get_request('pid');
    $qty = $app->get_request('qty');
    $amount = $app->get_request('amount');
    $email = $app->get_request('email');
    $check_e = $app->validateUserEmail($email,$public_key);
    if (!isset($email)) {
        echo "Invalid api call";
    } else {
        if ($pid == '') {
            echo "Invalid Product ID Call";
        } else {
            if($check_e !='success'){
                $req = $app->adde_shop_carts_wishlist($public_key, $pid, $qty, $amount, $email);
                echo json_encode($req);
            }else{

            }

        }

    }

} else {
    // Unsupported HTTP method
    http_response_code(405); // Method Not Allowed
    $response = array('message' => 'Unsupported HTTP method');
    echo json_encode($response);
}

