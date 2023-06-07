<?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
    if ($_POST['binder'] !== $binder) {
        die("Invalid CSRF token.");
    }

    if(!empty($_POST['honeypot'])){
        die("Invalid XCN token.");
    }

    $froms = $add_roles->post_request('froms');
    $tos = $add_roles->post_request('tos');
    $description = $add_roles->post_request('description');
    $amount = $add_roles->post_request('amount');
    $trans_date = $add_roles->post_request('trans_date');

     //get the last balance from the account 
     $froms = $add_roles-> get_account_balance($froms,$key_grant);
     $last_bal = $froms->balance-$amount;

     //get the last balance from the account 
     $tos = $add_roles-> get_account_balance($tos,$key_grant);
     $last_bal = $tos->balance+$amount;

   
    try {
        if($amount==0){
            echo "Sorry the Amount is invalid";
        }else{
            if($froms==0){
                echo 'Enter  account';
            }else{
                if($description==''){
                    echo 'Enter description';
                }else{
                 //$newrolesx = $add_roles->add_histroy_acc_acc($key_grant,$froms,$tos,$description,$amount,$trans_date);
            
         if ($newrolesx == "success") {
                echo 'done';
            } else {
                echo "Invalid command";
            }
        }
            }
                }
        
    }catch (Exception $e){
        echo "This request can not be process";
    }

