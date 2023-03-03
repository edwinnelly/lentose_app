<?php
include_once '../component/controller.php';
include_once '../component/user_data.php';
$add_roles = new controller;

 $email_cus = $add_roles->post_request('em');
$payment = $add_roles->post_request('payment');
$customer = $add_roles->post_request('customer');
$chqe = $add_roles->post_request('chqe');
$trans_id = rand(1234, 12345);

try {
  if($email_cus=='yes'){
    //fetch the product list
    $get_category = $app->fetch_carts($key_grant);
    foreach ($get_category as $key => $value) {
        // code...
         $qty = $value->live_qty;
        $product_id = $value->live_pid;
        //the qty state
        $qty_state = $app->update_qty($product_id,$qty, $key_grant);
    }
    //update the carting
    $newrolesx = $add_roles->update_cartings($email_cus, $payment, $customer, $key_grant, $trans_id,$chqe);
    if ($newrolesx == "success") {
        echo 'done';
    } else {
        echo "Invalid command";
    }
  }elseif ($email_cus=='no') {
    // code...
    $get_category = $app->fetch_carts($key_grant);
    foreach ($get_category as $key => $value) {
        // code...
         $qty = $value->live_qty;
        $product_id = $value->live_pid;
    }
    //update the carting
    $newrolesx = $add_roles->update_cartings($email_cus, $payment, $customer, $key_grant, $trans_id,$chqe);
    if ($newrolesx == "success") {
        echo 'done';
    } else {
        echo "Invalid command";
    }
  }


} catch (\Exception $e) {
  // Code to handle the exception
      echo "Caught exception: " . $e->getMessage();
}
