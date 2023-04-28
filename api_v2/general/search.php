<?php
//header config
include "../config/header.php";
//db config
include_once('../config/cores.php');
include_once('../config/db-config.php');
include_once('../config/controller.php');

// Handle the request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    //Process a GET request
    $app = new controller;
     $public_key = $app->get_request('user_key');
    $pid = htmlspecialchars($_GET['pid']);
    if($public_key==''){
        echo "Invalid Key";
    }else {
        $req = $app->fetch_search($public_key, $pid);
        echo json_encode($req);
    }
} else {
    // Unsupported HTTP method
    http_response_code(405); // Method Not Allowed
    $response = array('message' => 'Unsupported HTTP method');
    echo json_encode($response);
}

