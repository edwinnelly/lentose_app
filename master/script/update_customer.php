    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

      $vcode = $add_roles->post_request('vcode');
      $vname = $add_roles->post_request('vname');
      $streets = $add_roles->post_request('streets');
      $city = $add_roles->post_request('city');
      $state = $add_roles->post_request('state');
      $zip = $add_roles->post_request('zip');
      $phone = $add_roles->post_request('phone');
      $aphone = $add_roles->post_request('aphone');
      $vendor_note = $add_roles->post_request('vendor_note');
      $emails = $add_roles->post_request('emails');
      $website = $add_roles->post_request('website');
      $fib = $add_roles->post_request('fib');

    if ($vcode=="") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->edit_customers($vcode, $vname,$key_grant,$streets,$city,$state,$zip,$phone,$aphone,$vendor_note,$emails,$website,$fib);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
