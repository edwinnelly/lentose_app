    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

     $ads_id = ($add_roles->get_request('ads_id'));
     $pid = ($add_roles->get_request('pid'));
    if ($pid == "") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->update_ads_cats($ads_id,$pid,$key_grant);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
