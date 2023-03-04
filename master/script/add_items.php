    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;
        if ($_POST['binder'] !== $binder) {
            die("Invalid CSRF token.");
        }
    $item_type = $add_roles->post_request('item_type');
    $cat_type = $add_roles->post_request('cat_type');
    $vendor = $add_roles->post_request('vendor');
    $item_name = $add_roles->post_request('item_name');
    $attribute = $add_roles->post_request('attribute');
    $item_size = $add_roles->post_request('item_size');
    $qty = $add_roles->post_request('qty');
    $description = $add_roles->post_request('description');
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

    $cat1 = $add_roles->post_request('cat1');
    $cat2 = $add_roles->post_request('cat2');
    $cat3 = $add_roles->post_request('cat3');
    $cat4 = $add_roles->post_request('cat4');


    $file1 = "image1";
    $file2 = "image2";
    $file3 = "image3";
    $file4 = "image4";

    $file_size_allowed = 3000000;
    $min_size_compress = 500000;
    $ticket_pic = "../ads/";

    function compressImage($source, $destination, $quality)
    {
        $info = getimagesize($source);

        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($source);

        elseif ($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($source);

        elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($source);

        imagejpeg($image, $destination, $quality);
    }

    function upload_img($file1, $file_size_allowed, $min_size_compress, $ticket_pic)
    {
        $name = $_FILES[$file1]['name'];
        $tmpnm = $_FILES[$file1]['tmp_name'];
        $type = $_FILES[$file1]['type'];
        $size = $_FILES[$file1]['size'];

        // check file extension
        if ($type != 'image/jpeg'
            && $type != 'image/jpg'
            && $type != 'image/gif'
            && $type != 'image/png'
        ) {
            //echo "File Extension Not Allowed";
        } else {
            //this is the dir for the photo
            if ($size > $file_size_allowed) {
                return "file to large";
            } else {
                $tuname = base64_decode($_POST["$file1"]);
                $newname = str_shuffle('01234567891234567890');
                @$dir = "$ticket_pic" . $tuname . $newname . $name;
                if ($size > $min_size_compress) {
                    // Compress Image
                    $ui = compressImage($tmpnm, $dir, 40);
                    if ($ui) {
                        move_uploaded_file($tmpnm, $dir);
                    }
                } else {
                    move_uploaded_file($tmpnm, $dir);
                }
                return $dir;
            }
        }
    }

    @$img_path1 = upload_img($file1, $file_size_allowed, $min_size_compress, $ticket_pic);
    @$img_path2 = upload_img($file2, $file_size_allowed, $min_size_compress, $ticket_pic);
    @$img_path3 = upload_img($file3, $file_size_allowed, $min_size_compress, $ticket_pic);
    @$img_path4 = upload_img($file4, $file_size_allowed, $min_size_compress, $ticket_pic);

    if ($item_name == "") {
        echo "Input Cannot Be Empty";
    } else {
        $newrolesx = $add_roles->add_new_items($img_path1, $img_path2, $img_path3, $img_path4, $cat1, $cat2, $cat3, $cat4, $item_type, $cat_type, $key_grant, $vendor, $item_name, $attribute, $item_size, $qty, $description, $aval_qty, $reorder, $unit, $barcode, $upc, $extra_info, $regular_price, $order_price, $avg_unit_cost, $tax);
        if ($newrolesx == "success") {
            echo 'done';
        } else {
            echo "Invalid command";
        }

    }
