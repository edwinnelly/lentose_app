    <?php
    include_once '../component/controller.php';
    $add_roles = new controller;

     echo $email = $add_roles->post_request('email');
     echo $fn = $add_roles->post_request('fn');
    echo $ln = $add_roles->post_request('ln');
    echo $phone = $add_roles->post_request('phone');
    echo $password = $add_roles->post_request('password');
    echo $password_again = $add_roles->post_request('password_again');

//echo "fewfwfwe";
//    if ($email == "" && $phone =="") {
//        echo "Input Cannot Be Empty";
//    } else {
//        $newrolesx = $add_roles->add_customer($tittle, $c_name,$sex,$work_center, $dpt,$work_address, $home_address,$cphone,$cemail,$marketer);
//        if ($newrolesx == "success") {
//            echo 'done';
//        } else {
//            echo "Invalid command";
//        }
//
//    }
