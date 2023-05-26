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

    $acc_name = $add_roles->post_request('acc_name');
    $acc_num = $add_roles->post_request('acc_num');
    $open_bal = $add_roles->post_request('open_bal');
    $trans_date = $add_roles->post_request('trans_date');
   
    try {
        if($open_bal==0){
            echo "Sorry the Amount is invalid";
        }else{
            if($acc_num==0){
                echo 'Enter  account';
            }else{
                if($acc_name==''){
                    echo 'Enter Account Name';
                }else{
                 $newrolesx = $add_roles->add_new_account_expenses($key_grant,$acc_name,$acc_num,$open_bal,$trans_date);
            
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

