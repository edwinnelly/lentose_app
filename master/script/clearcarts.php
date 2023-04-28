    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

    if ($key_grant == "") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->empty_carting($key_grant);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
