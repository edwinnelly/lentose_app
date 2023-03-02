    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $add_roles = new controller;

    $pid = $add_roles->post_request('pid');
    $get_all_items = $add_roles->edit_item_all($key_grant,$pid);

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

    //update image 1
    if ($img_path1 == "") {
    } else {

        $newrolesx = $add_roles->edit_image1($pid,$key_grant,$img_path1);
        unlink($get_all_items->photo1);
    }

    //update image 2
    if ($img_path2 == "") {
    } else {
        $newrolesx = $add_roles->edit_image2($pid,$key_grant,$img_path2);
        unlink($get_all_items->photo2);
    }

    //update image 3
    if ($img_path3 == "") {
    } else {
        $newrolesx = $add_roles->edit_image3($pid,$key_grant,$img_path3);
        unlink($get_all_items->photo3);
    }

    //update image 4
    if ($img_path4 == "") {
    } else {
        $newrolesx = $add_roles->edit_image4($pid,$key_grant,$img_path4);
        unlink($get_all_items->photo4);
    }

            if ($newrolesx == "success") {
                echo 'done';
            } else {
                echo "Invalid command";
            }