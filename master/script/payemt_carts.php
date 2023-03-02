    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

    $email_cus = $add_roles->post_request('em');
    $payment = $add_roles->post_request('payment');
    $customer = $add_roles->post_request('customer');
    $trans_id = rand(1234, 12345);

    $newrolesx = $add_roles->update_cartings($email_cus, $payment, $customer, $key_grant, $trans_id);
    if ($newrolesx == "success") {
        echo 'done';
    } else {
        echo "Invalid command";
    }
