    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

    $item_type = $add_roles->post_request('item_type');
    $cat_type = $add_roles->post_request('cat_type');
    $vendor = $add_roles->post_request('vendor');
     $item_name = $add_roles->post_request('item_name');
    $description = $add_roles->post_request('description');
    $attribute = $add_roles->post_request('attribute');
    $item_size = $add_roles->post_request('item_size');
    $iqty = $add_roles->post_request('qty');
    $aval_qty = $add_roles->post_request('aval_qty');
    $reorder = $add_roles->post_request('reorder');
    $unit = $add_roles->post_request('unit');
    $barcode = $add_roles->post_request('barcode');
    $upc = $add_roles->post_request('upc');
    $extra_info = $add_roles->post_request('extra_info');
    $regular_price = $add_roles->post_request('regular_price');
    $order_price = $add_roles->post_request('order_price');
    $avg_unit_cost = $add_roles->post_request('avg_unit_cost');
    $tax = $add_roles->post_request('tax');
    $pid = $add_roles->post_request('pid');


    if ($item_name == "") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->edit_product_basic($pid,$key_grant,$cat_type,$vendor,$item_name,$description,$attribute,$item_size,$iqty,$aval_qty,$reorder,$unit,$barcode,$upc,$extra_info,$regular_price,$order_price,$avg_unit_cost,$tax);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
