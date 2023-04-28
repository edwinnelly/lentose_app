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
    $cheq_id = $add_roles->post_request('binder_id');

    try {
        if (filter_var($cn, FILTER_VALIDATE_INT) !== false) {
            if ($customer_id == 0) {
                echo "Please choose a customer!, Try Again";
            }else{
                    if($chq_bank==0){
                        echo "Please choose a bank";
                    }else{
                        $newrolesx = $add_roles->update_cheque($key_grant, $customer_id, $pay_status, $cn, $camount, $duedate, $chqe_date,$chq_bank,$cheq_id);
                        if ($newrolesx == "success"){
                            echo 'done';
                        }else {
                            echo "Invalid command";
                        }
                    }
            }

        } else {
            echo "Sorry the cheque number is invalid";
        }


    }catch (Exception $e){
        echo "This request can not be process";
    }

