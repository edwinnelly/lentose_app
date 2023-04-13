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
    $public_key = $app->get_request('key');
    $category_id = $app->get_request('cat_id');
    if($public_key==''){
      echo "Invalid Key";
    }else{
        $req = $app->getCategories_ecom_threes($public_key,$category_id);
        echo json_encode($req);
    }

} else {
    // Unsupported HTTP method
    http_response_code(405); // Method Not Allowed
    $response = array('message' => 'Unsupported HTTP method');
    echo json_encode($response);
}