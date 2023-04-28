<?php
//db config
include_once('../config/cores.php');
include_once('../config/db-config.php');
include_once('../config/controller.php');

// Handle the request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //Process a GET request
    $app = new controller;
     $email = $app->get_request('email');
     $password = $app->get_request('password');
     $public_key = $app->get_request('user_key');
    if(!isset($email)){
        echo "Invalid api Call";
    }else{
        $req = $app->auth_users($public_key, $email, $password);
        echo json_encode($req);
    }

} else {
    // Unsupported HTTP method
    http_response_code(405); // Method Not Allowed
    $response = array('message' => 'Unsupported HTTP method');
    echo json_encode($response);
}