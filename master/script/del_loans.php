    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
    $pid1 = $add_roles->post_request('cpid');
    $secure = $add_roles->post_request('secure');
    $pid = $add_roles->allowIntsAndFloatsOnly($pid1);

    try{
        if ($pid == "") {
            echo "Input Cannot Be Empty";
        } else {
            if($secure==$binder){
            $newrolesx = $add_roles->delete_customer_loan($pid,$key_grant);
            if ($newrolesx == "success") {
                echo 'done';
            } else {
                echo "Invalid command";
            }
        }
    
        }

    }catch (Exception $e){
        die("Bad Connection");
    }

   
