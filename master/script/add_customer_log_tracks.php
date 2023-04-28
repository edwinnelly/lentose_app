<?php
include_once '../component/controller.php';
include_once '../component/user_data.php';
$add_roles = new controller;

  $secure = $add_roles->post_request('binder');
  $description = $add_roles->post_request('description');
  $create_date = $add_roles->post_request('create_date');
  $postid = $add_roles->post_request('postid');

try {
    if ($secure!=$binder) {
        echo "Bad Connection";
    } else {
        if($create_date==''){
            echo "Creation date Can not Be Empty";
        }else{
            if($description==''){
                echo "Description Can not Be Empty";
            }else{
                
                $newrolesx = $add_roles->add_category_log_list_track($description,$create_date,$postid,$key_grant);
                    if ($newrolesx == "success") {
                        echo 'done';
                    }else{
                        echo "Invalid command";
                    }
            }

        }

    }
} catch (Exception $e) {
    die("Bad Connection");
}
