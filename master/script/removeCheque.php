    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
      $pid = ($add_roles->post_request('uid'));
      $secure = ($add_roles->post_request('secure'));
    try {
        if ($pid == "") {
            echo "Input Cannot Be Empty";
        } else {
            if($secure==$binder){
                $newrolesx = $add_roles->delete_cheque($pid,$key_grant);
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

