    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

      $infos = $add_roles->post_request('infos');
      $pid_key = $add_roles->post_request('pid_key');

    if ($infos=="") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->update_product_category_ecom_four($infos, $pid_key,$key_grant);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
