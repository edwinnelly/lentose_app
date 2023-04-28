    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

      $catnamex = $add_roles->post_request('catname');
      $cat_id = $add_roles->post_request('sid');
      $rand = rand(1234,12345);

    if ($catnamex=="") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->add_category_ecom_three($cat_id,$rand,$key_grant,$catnamex);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
