<?php
include_once '../component/controller.php';
include_once '../component/user_data.php';
$add_roles = new controller;

 $secure = $add_roles->post_request('binder');
 $customerid = $add_roles->post_request('customerid');
 $title = $add_roles->post_request('title');
$transaction = $add_roles->post_request('transaction');
$category_id = $add_roles->post_request('category_id');
$description = $add_roles->post_request('description');
$status = $add_roles->post_request('status');
$create_date = $add_roles->post_request('create_date');
$due_date = $add_roles->post_request('due_date');

try {
    if ($secure!=$binder) {
        echo "Bad Connection";
    } else {
        if($title==''){
            echo "Title Can not Be Empty";
        }else{
            if($description==''){
                echo "Description Can not Be Empty";
            }else{
                if($customerid>1){
                    $newrolesx = $add_roles->add_category_log_list($title,$status,$due_date, $transaction,$create_date,$category_id,$description,$key_grant,$customerid);
                    if ($newrolesx == "success") {
                        echo 'done';
                    }else{
                        echo "Invalid command";
                    }
                }else{
                    echo "Please choose a customer";
                }
                
            }

        }

    }
} catch (Exception $e) {
    die("Bad Connection");
}
