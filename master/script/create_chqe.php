    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
    if ($_POST['binder'] !== $binder) {
        die("Invalid CSRF token.");
    }
    $customer_id = $add_roles->post_request('customer');
    $pay_status = $add_roles->post_request('payment');
    $cn = $add_roles->post_request('cn');
    $camount1 = $add_roles->post_request('camount');
    //check user input
    $camount = $add_roles->allowIntsAndFloatsOnly($camount1);
    $duedate = $add_roles->post_request('duedate');
    $chqe_date = $add_roles->post_request('chqe_date');
    $chq_bank = $add_roles->post_request('bnak');

    try {
        if (filter_var($cn, FILTER_VALIDATE_INT) !== false) {
            if ($customer_id == 0) {
                echo "Please choose a customer!, Try Again";
            } else {
                $check_cheque = $add_roles->check_cheque($key_grant,$cn);
                if($check_cheque ==0){
                    if($chq_bank==0){
                        echo "Please choose a bank";
                    }else{
                        $newrolesx = $add_roles->add_new_chqe($key_grant, $customer_id, $pay_status, $cn, $camount, $duedate, $chqe_date,$chq_bank);
                        if ($newrolesx == "success") {
                            echo 'done';
                        } else {
                            echo "Invalid command";
                        }
                    }

                }else{
                    echo "The cheque number has been used!";
                }
            }

        } else {
            echo "Sorry the cheque number is invalid";
        }


    }catch (Exception $e){
        echo "This request can not be process";
    }

