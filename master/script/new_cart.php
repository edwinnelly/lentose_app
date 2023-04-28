    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

       $pid = $add_roles->post_request('pid');
      $qty = $add_roles->post_request('qty');
     $amount = $add_roles->post_request('amount')*$qty;
     $amount_unit = $add_roles->post_request('amount');
     $items = $add_roles->post_request('items');
      $rand = rand(1234,12345);

    if ($pid=="") {
        echo "Input Cannot Be Empty";
    } else {
        if($qty==0){
            echo "Input Cannot Be Empty";
        }else{
            $newrolesx = $add_roles->new_add_carts($pid, $qty,$amount,$key_grant,$items,$user_id,$amount_unit);
            if ($newrolesx == "success") {
                echo 'done';
            } else {
                echo "Invalid command";
            }
        }


    }
