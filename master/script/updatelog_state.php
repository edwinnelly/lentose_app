    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
       @$pid = ($add_roles->post_request('cpids1'));
      @$secure = ($add_roles->post_request('secure'));
        @$status = ($add_roles->post_request('status'));
    try {
        if ($pid == "") {
            echo "Input Cannot Be Empty";
        } else {
            if($secure==$binder){
                $newrolesx = $add_roles->update_log_status($pid,$key_grant,$status);
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

