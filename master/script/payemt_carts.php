<?php
include_once '../component/controller.php';
include_once '../component/user_data.php';
$add_roles = new controller;

 $email_cus = $add_roles->post_request('em');
$payment = $add_roles->post_request('payment');
$customer = $add_roles->post_request('customer');
$chqe = $add_roles->post_request('chqe');
$debt = $add_roles->post_request('debt');
$amountsc = $add_roles->post_request('amounts');
$amounts = $add_roles->allowIntsAndFloatsOnly($amountsc);
$trans_id = rand(12345,123456);

try {
    //fetch the product list
    $get_category = $add_roles->fetch_carts($key_grant);
    foreach ($get_category as $key => $value) {
        // code...
        $qty = $value->live_qty;
        $product_id = $value->live_pid;
        //the qty state
        $qty_state = $add_roles->update_qty($product_id,$qty, $key_grant);
    }
    //add to debt profile
    if($debt=='yes' && $customer!=0){
        $create_debt = $add_roles->new_debt_carts($customer,$amounts,$key_grant,$trans_id);
    }else{
        //do nothing
    }

    //add to cheque profile
    if($chqe==0){
        //do nothing
    }else{
        $create_debt = $add_roles->update_cheque_ref($chqe,$key_grant,$trans_id);
    }
    //update the carting
    $newrolesx = $add_roles->update_cartings($email_cus, $payment, $customer, $key_grant, $trans_id,$chqe);
    if ($newrolesx == "success") {
        echo 'done';
    } else {
        echo "Invalid command";
    }

} catch (\Exception $e) {
  // Code to handle the exception
      echo "Caught exception: " . $e->getMessage();
}
