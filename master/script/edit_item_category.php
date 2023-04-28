    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

     $cat1 = $add_roles->post_request('cat1');
     $cat2 = $add_roles->post_request('cat2');
     $cat3 = $add_roles->post_request('cat3');
     $cat4 = $add_roles->post_request('cat4');
    $pid = $add_roles->post_request('pid');

    //update category
    if ($cat1==0||$cat2==0||$cat3==0||$cat4==0) {
    } else {
        $newrolesx = $add_roles->update_shop_item_cat($pid,$key_grant,$cat1,$cat2,$cat3,$cat4);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }
    }
