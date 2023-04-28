<?php
include_once '../component/controller.php';
include_once '../component/user_data.php';
$add_roles = new controller;

   $secure = $add_roles->post_request('secure');
   $description = $add_roles->post_request('description');
   $create_date = $add_roles->post_request('create_date');
   $amount1 = $add_roles->post_request('amount');
   $amount = $add_roles->allowIntsAndFloatsOnly($amount1);
   $customer = $add_roles->post_request('customer');
   $payment_date = $add_roles->post_request('payment_date');

try {
    if ($secure!=$binder) {
        echo "Bad Connection";
    } else {
        if($amount==0){
            echo "Amount Can not Be Empty";
        }else{
            if($description==''){
                echo "Description Can not Be Empty";
            }else{
                $newrolesx = $add_roles->new_debts($key_grant,$secure,$description,$create_date,$amount,$customer,$payment_date);
                    if ($newrolesx == "success") {
                        echo 'done';
                    }else{
                        echo "Invalid command";
                    }
            }

        }

    }
} catch (Exception $e) {
    die("Bad Connection");
}
