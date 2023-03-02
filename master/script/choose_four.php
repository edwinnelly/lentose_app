    <?php
    include_once '../component/controller.php';
    include_once '../component/user_data.php';
    $app = new controller;
    $get_sid = $app->get_request('tic_id');
    $get_ticket_cat = $app->getCategories_ecom_four($key_grant, $get_sid);
    if($get_sid ==""){
        echo '<select name="tcat" class="form-control" required>
                    <option value="0">Choose Category</option>
                </select>';
    }else {


     echo '<select class="form-control show-tick ms select2" id="category4" data-placeholder="Select" name="cat4">';
     echo'<option value="0">Choose category</option>';
        foreach ($get_ticket_cat as $cc) {

                     echo '<option value="'.$cc->id.'">'.$cc->category_postomg.'</option>';
        }
       echo ' </select>';
    }
    ?>