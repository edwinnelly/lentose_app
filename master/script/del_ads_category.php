    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
    $ename = $add_roles->get_request('ename');
    $sid = $add_roles->get_request('sid');
    if ($sid == "") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->update_ads_cats_list($sid,$key_grant);
        if ($newrolesx == "success") {
            echo '<script>window.location.href="../manage_ads?sid='.$sid.'&&ename='.$ename.'"</script>';
        } else {
            echo "Invalid command";
        }

    }
