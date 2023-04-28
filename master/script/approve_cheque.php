    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
    $pid = ($add_roles->post_request('uid'));
    $secure = ($add_roles->post_request('secure'));
     $trnx = ($add_roles->post_request('trnx1'));
    try {
        if ($pid == "") {
            echo "Input Cannot Be Empty";
        } else {
            if ($secure == $binder) {

                if($trnx==''){
                    echo "Not Linked To Cart";
                }else{
                    $newrolesx = $add_roles->approves_cheque($pid, $key_grant);
                    if ($newrolesx == "success") {
                        echo 'done';
                    } else {
                        echo "Invalid command";
                    }
                }



            } else {
                die("Bad Connection");
            }
        }
    } catch (Exception $e) {
        die("Bad Connection");
    }

