    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
       $pid = ($add_roles->post_request('uid'));
       $secure = ($add_roles->post_request('secure'));
        $cc = base64_decode($add_roles->post_request('cc'));
       $account_number = ($add_roles->post_request('accn'));
      
       
    try {
        if ($pid == "") {
            echo "Input Cannot Be Empty";
        } else {
            if($secure==$binder){
               $newrolesx = $add_roles->delete_expenses($pid,$key_grant);
               //get the last balance from the account 
       $account_balance = $add_roles-> get_account_balance($account_number,$key_grant);
       $last_bal = $account_balance->balance+$cc;

       //update the new balance not working
       $add = $add_roles->update_accounts_balance($last_bal,$account_number,$key_grant);

                if ($newrolesx == "success") {
                    echo 'done';
                } else {
                    echo "Invalid command";
                }
            }else{
                die("Bad Connection");
            }
        }
    }catch (Exception $e){
        die("Bad Connection");
    }

