<?php
include_once '../component/controller.php';
include_once '../component/user_data.php';
$add_roles = new controller;
$catnamex = $add_roles->post_request('catname');
 $secure = $add_roles->post_request('binder');
try {
    if ($secure!=$binder) {
        echo "Bad Connection";
    } else {
        if($catnamex==''){

        }else{
            $newrolesx = $add_roles->add_category_log($catnamex, $key_grant);
            if ($newrolesx == "success") {
                echo 'done';
            } else {
                echo "Invalid command";
            }
        }

    }
} catch (Exception $e) {
    die("Bad Connection");
}
