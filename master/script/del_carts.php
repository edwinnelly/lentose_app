    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
     $ads_id = $add_roles->post_request('ads_id');
    if ($ads_id == "") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->empty_carts($ads_id,$key_grant);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
