    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
     $pid = base64_decode($add_roles->get_request('uid'));
    if ($pid == "") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->delete_items($pid,$key_grant);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
