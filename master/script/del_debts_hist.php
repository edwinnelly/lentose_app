    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
     $pid = $add_roles->post_request('uid');
    if ($pid == "") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->delete_debts_history($pid,$key_grant);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
