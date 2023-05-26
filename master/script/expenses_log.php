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

    $account = $add_roles->post_request('account');
    $category = $add_roles->post_request('category');
    $info = $add_roles->post_request('info');
    $amount = $add_roles->post_request('amount');
    $trans_date = $add_roles->post_request('trans_date');
   
    try {
  
        if($amount==0){
            echo "Sorry the Amount is invalid";
        }else{

            if($account==0){
                echo 'Choose account';
            }else{

                if($category==0){
                    echo 'Choose category';
                }else{

                              //get the current balance
         $account_info = $add_roles->get_account_balance($account,$key_grant);
         $balanced = $account_info->balance-$amount;
     
         //update the balance
         $update_balance = $add_roles->update_expenses_bal($account,$key_grant,$balanced);
         
            $newrolesx = $add_roles->add_new_expenses($key_grant, $account, $category, $info, $amount, $trans_date,$balanced);
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

