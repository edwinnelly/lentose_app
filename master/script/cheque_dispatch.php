<?php
include_once '../component/controller.php';
include_once '../component/user_data.php';
$add_roles = new controller;

$uid1= $add_roles->post_request('uid1');
$che= $add_roles->post_request('che');
$chqe= $add_roles->post_request('che');
$trnx= $add_roles->post_request('trnx');
$trans_id= $add_roles->post_request('trnx');
try {
    //fetch the product list
    if($trnx==''){
        echo'Not Linked To Cart';
    }else{
        $get_category = $add_roles->fetch_carts_chequee($key_grant,$che,$trnx);
        foreach ($get_category as $key => $value) {
            // code...
            $qty = $value->live_qty;
            $product_id = $value->live_pid;
            //the qty state
            $qty_state = $add_roles->update_qty($product_id,$qty, $key_grant);
        }
        $create_debt = $add_roles->update_cheque_ref_payment($chqe,$key_grant,$trans_id);

        if($create_debt){
            echo'done';
        }
    }



} catch (\Exception $e) {
  // Code to handle the exception
      echo "Caught exception: " . $e->getMessage();
}
