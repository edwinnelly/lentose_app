    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
       @$pid = ($add_roles->post_request('cpids1'));
      @$secure = ($add_roles->post_request('secure'));
        @$amount = ($add_roles->post_request('amount'));
        @$pay_method = ($add_roles->post_request('pay_method'));
        @$payment_date = ($add_roles->post_request('payment_date'));
    try {
        if ($pid == "") {
            echo "Input Cannot Be Empty";
        } else {
            if($secure==$binder){
                $newrolesx = $add_roles->new_dbet_payment($pid,$key_grant,$pay_method,$amount,$payment_date);
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

