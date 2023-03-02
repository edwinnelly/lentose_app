<?php
include_once('cores.php');
include_once('db-config.php');
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

/**
 *
 */
class controller extends dbc
{


    /** function to logout a user **/
    public function logout()
    {
        // remove all session variables
        session_unset();
        // destroy the session
        session_destroy();
    }

    /** function to check if a user is logged in **/
    public function checkLogin()
    {
        if (isset($_SESSION['login_user'])) {
            return 'logged';
        } else {
            return 'nau';
        }
    }

    //user login
    public function auth_users($public_key, $email, $password)
    {
        $query = "select * from e_shop_members where email_e='$email' AND password_e='$password' and host_key='$public_key'";
        $run_query = $this->run_query($query);
        if ($this->get_number_of_row($run_query) == 1) {
            return json_encode("success");
        } else {
            return json_encode('invalid');
        }
    }


    //get the user information
    public function get_user_data($id)
    {
        $query = "select * from member_data where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->business_name = $row['business_name'];
        $obj->email = $row['email'];
        $obj->phone_number = $row['phone_number'];
        $obj->city = $row['city'];
        $obj->bis_location = $row['bis_location'];
        $obj->key_grant = $row['key_grant'];
        $obj->country = $row['country'];
        $obj->address_store = $row['address_store'];
        $obj->state = $row['state'];
        $obj->currency = $row['currency'];
        $obj->username = $row['username'];
        $obj->last_seen = $row['last_seen'];
        $obj->registered_date = $row['registered_date'];
        $obj->banner = $row['banner'];
        $obj->plans = $row['plans'];
        $obj->subscription_start = $row['subscription_start'];
        $obj->subscription_end = $row['subscription_end'];
        $obj->facebook = $row['facebook'];
        $obj->instagram = $row['instagram'];
        $obj->twitter = $row['twitter'];
        $obj->youtube = $row['youtube'];
        $obj->description = $row['description'];
        $obj->custom_email = $row['custom_email'];
        $obj->account_activation = $row['account_activation'];
        $obj->account_activation_status = $row['account_activation_status'];
        $obj->account_setup = $row['account_setup'];
        $obj->status = $row['status'];
        $obj->package = $row['package'];
        return $obj;
    }


    public function get_customer_data($get_prod_id, $key_grant)
    {
        $query = "select * from customer_lentose where id='$get_prod_id' and key_grant='$key_grant'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->key_grant = $row['key_grant'];
        $obj->vendor_code = $row['vendor_code'];
        $obj->vendor_name = $row['vendor_name'];
        $obj->address = $row['address'];
        $obj->city = $row['city'];
        $obj->state = $row['state'];
        $obj->zip = $row['zip'];
        $obj->phone = $row['phone'];
        $obj->phone2 = $row['phone2'];
        $obj->status = $row['status'];
        $obj->note = $row['note'];
        $obj->email = $row['email'];
        $obj->website = $row['website'];

        return $obj;
    }


    public function get_vendor_data($get_prod_id, $key_grant)
    {
        $query = "select * from supplier_lentose where id='$get_prod_id' and key_grant='$key_grant'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->key_grant = $row['key_grant'];
        $obj->vendor_code = $row['vendor_code'];
        $obj->vendor_name = $row['vendor_name'];
        $obj->address = $row['address'];
        $obj->city = $row['city'];
        $obj->state = $row['state'];
        $obj->zip = $row['zip'];
        $obj->phone = $row['phone'];
        $obj->phone2 = $row['phone2'];
        $obj->status = $row['status'];
        $obj->note = $row['note'];
        $obj->email = $row['email'];
        $obj->website = $row['website'];

        return $obj;
    }


    /** function to get shop categories **/
    public function getCategories($user_key)
    {
        $query = "SELECT * FROM custom_category WHERE user_key='$user_key' AND status=1 ";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->user_key = $row['user_key'];
            $obj->category_postomg = $row['category_postomg'];
            $obj->custom_code = $row['custom_code'];
            $obj->date_added = $row['date_added'];
            $get_work_cen = $this->total_items_by_category($row['id']);
            $obj->category_id_custom = $get_work_cen->category_id_custom;
            $categories[] = $obj;
        }
        return $categories;
    }


    /** function to get shop categories **/
    public function getCategories_ecom($user_key)
    {
        $query = "SELECT * FROM category_one WHERE store_key='$user_key' AND status=1 ";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->user_key = $row['store_key'];
            $obj->category_postomg = $row['category_name'];

            $obj->date_added = $row['cr_date'];
            $categories[] = $obj;
        }
        return $categories;
    }


    /** function to get shop categories **/
    public function getCategories_ecom_two($key_grant, $get_sid)
    {
        $query = "SELECT * FROM category_two WHERE store_key='$key_grant' and category_one='$get_sid'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->user_key = $row['store_key'];
            $obj->category_postomg = $row['category_name'];

            $obj->date_added = $row['cr_date'];
            $categories[] = $obj;
        }
        return json_encode($categories);
    }

    /** function to get shop categories **/
    public function getCategories_ecom_threes($key_grant, $get_sid)
    {
        $query = "SELECT * FROM category_three WHERE store_key='$key_grant' and category_two='$get_sid'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->user_key = $row['store_key'];
            $obj->category_postomg = $row['category_name'];
            $obj->category_two = $row['category_two'];

            $obj->date_added = $row['cr_date'];
            $categories[] = $obj;
        }
        return json_encode($categories);
    }

    //All user info sorted by id
    public function product_info($id)
    {
        $query = "select * from product_tables where pid='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->items_name = $row['items_name'];
        $obj->key_grant = $row['key_grant'];
        $obj->item_type = $row['item_type'];
        $obj->vendor_id = $row['vendor_id'];
        $obj->description_inventory = $row['description_inventory'];
        $obj->attribute = $row['attribute'];
        $obj->item_size = $row['item_size'];
        $obj->on_hand_qty = $row['on_hand_qty'];
        $obj->aval_qty = $row['aval_qty'];
        $obj->reorder_point = $row['reorder_point'];
        $obj->unit_measurement = $row['unit_measurement'];
        $obj->barcode = $row['barcode'];
        $obj->upc = $row['upc'];
        $obj->alt_look_up = $row['alt_look_up'];
        $obj->regular_price = $row['regular_price'];
        $obj->order_price = $row['order_price'];
        $obj->average_unit_cost = $row['average_unit_cost'];
        $obj->tax = $row['tax'];
        $obj->photo1 = $row['photo1'];
        $obj->photo2 = $row['photo2'];
        $obj->photo3 = $row['photo3'];
        $obj->photo4 = $row['photo4'];
        $obj->cat1 = $row['cat1'];
        $obj->cat2 = $row['cat2'];
        $obj->cat3 = $row['cat3'];
        $obj->cat4 = $row['cat4'];

        return $obj;
    }


    /** function to get shop categories **/
    public function paid_carts($public_key, $email)
    {
        $query = "SELECT * FROM e_shop_carts WHERE user_key='$public_key' and cus_email='$email' and paid='yes'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->pid = $row['pid'];
            $obj->qty = $row['qty'];
            $obj->amount = $row['amount'];
            $obj->unpaid = $row['unpaid'];
            $obj->added_date = $row['added_date'];

            $p_info = $this->product_info($row['pid']);
            $obj->items_name = $p_info->items_name;
            $obj->photo1 = $p_info->photo1;

            $categories[] = $obj;
        }
        return json_encode($categories);
    }

    /** function to get shop categories **/
    public function unpaid_carts($public_key, $email)
    {
        $query = "SELECT * FROM e_shop_carts WHERE user_key='$public_key' and cus_email='$email' and unpaid='no'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->pid = $row['pid'];
            $obj->qty = $row['qty'];
            $obj->amount = $row['amount'];
            $obj->unpaid = $row['unpaid'];
            $obj->added_date = $row['added_date'];

            $p_info = $this->product_info($row['pid']);
            $obj->items_name = $p_info->items_name;
            $obj->photo1 = $p_info->photo1;

            $categories[] = $obj;
        }
        return json_encode($categories);
    }


    /** function to get shop categories **/
    public function paid_completed_cart($public_key, $email, $status)
    {
        if ($status == 'unpiad') {
            $query = "SELECT * FROM e_shop_carts WHERE user_key='$public_key' and cus_email='$email' and unpaid='no'";
        } elseif ($status == 'paid') {
            $query = "SELECT * FROM e_shop_carts WHERE user_key='$public_key' and cus_email='$email' and paid='no'";
        } elseif ($status == 'approved') {
            $query = "SELECT * FROM e_shop_carts WHERE user_key='$public_key' and cus_email='$email' and approved='no'";
        } elseif ($status == 'delivering') {
            $query = "SELECT * FROM e_shop_carts WHERE user_key='$public_key' and cus_email='$email' and delivering='no'";
        } elseif ($status == 'delivered') {
            $query = "SELECT * FROM e_shop_carts WHERE user_key='$public_key' and cus_email='$email' and delivered='no'";
        }

        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->pid = $row['pid'];
            $obj->qty = $row['qty'];
            $obj->amount = $row['amount'];
            $obj->unpaid = $row['unpaid'];

            $p_info = $this->product_info($row['pid']);
            $obj->items_name = $p_info->items_name;
            $obj->photo1 = $p_info->photo1;

            $categories[] = $obj;
        }
        return json_encode($categories);
    }



    /** function to get shop categories **/
    public function fetch_products($public_key, $cc)
    {
        $query = "SELECT * FROM product_tables WHERE key_grant='$public_key' and ads='$cc'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->pid = $row['pid'];
            $obj->items_name = $row['items_name'];
            $obj->key_grant = $row['key_grant'];
            $obj->item_type = $row['item_type'];
            $obj->vendor_id = $row['vendor_id'];
            $obj->description_inventory = $row['description_inventory'];
            $obj->attribute = $row['attribute'];
            $obj->item_size = $row['item_size'];
            $obj->on_hand_qty = $row['on_hand_qty'];
            $obj->aval_qty = $row['aval_qty'];
            $obj->reorder_point = $row['reorder_point'];
            $obj->unit_measurement = $row['unit_measurement'];
            $obj->barcode = $row['barcode'];
            $obj->upc = $row['upc'];
            $obj->alt_look_up = $row['alt_look_up'];
            $obj->regular_price = $row['regular_price'];
            $obj->order_price = $row['order_price'];
            $obj->average_unit_cost = $row['average_unit_cost'];
            $obj->tax = $row['tax'];
            $obj->photo1 = $row['photo1'];
            $obj->photo2 = $row['photo2'];
            $obj->photo3 = $row['photo3'];
            $obj->photo4 = $row['photo4'];
            $obj->cat1 = $row['cat1'];
            $obj->cat2 = $row['cat2'];
            $obj->cat3 = $row['cat3'];
            $obj->cat4 = $row['cat4'];

            $categories[] = $obj;
        }
        return json_encode($categories);
    }

    /** function to get shop categories **/
    public function fetch_products_cat_one($public_key, $cc)
    {
        $query = "SELECT * FROM product_tables WHERE key_grant='$public_key' and cat2='$cc' order by pid desc";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->pid = $row['pid'];
            $obj->items_name = $row['items_name'];
            $obj->key_grant = $row['key_grant'];
            $obj->item_type = $row['item_type'];
            $obj->vendor_id = $row['vendor_id'];
            $obj->description_inventory = $row['description_inventory'];
            $obj->attribute = $row['attribute'];
            $obj->item_size = $row['item_size'];
            $obj->on_hand_qty = $row['on_hand_qty'];
            $obj->aval_qty = $row['aval_qty'];
            $obj->reorder_point = $row['reorder_point'];
            $obj->unit_measurement = $row['unit_measurement'];
            $obj->barcode = $row['barcode'];
            $obj->upc = $row['upc'];
            $obj->alt_look_up = $row['alt_look_up'];
            $obj->regular_price = $row['regular_price'];
            $obj->order_price = $row['order_price'];
            $obj->average_unit_cost = $row['average_unit_cost'];
            $obj->tax = $row['tax'];
            $obj->photo1 = $row['photo1'];
            $obj->photo2 = $row['photo2'];
            $obj->photo3 = $row['photo3'];
            $obj->photo4 = $row['photo4'];
            $obj->cat1 = $row['cat1'];
            $obj->cat2 = $row['cat2'];
            $obj->cat3 = $row['cat3'];
            $obj->cat4 = $row['cat4'];

            $categories[] = $obj;
        }
        return json_encode($categories);
    }

    public function fetch_products_cat_two($public_key, $cc)
    {
        $query = "SELECT * FROM product_tables WHERE key_grant='$public_key' and cat3='$cc'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->pid = $row['pid'];
            $obj->items_name = $row['items_name'];
            $obj->key_grant = $row['key_grant'];
            $obj->item_type = $row['item_type'];
            $obj->vendor_id = $row['vendor_id'];
            $obj->description_inventory = $row['description_inventory'];
            $obj->attribute = $row['attribute'];
            $obj->item_size = $row['item_size'];
            $obj->on_hand_qty = $row['on_hand_qty'];
            $obj->aval_qty = $row['aval_qty'];
            $obj->reorder_point = $row['reorder_point'];
            $obj->unit_measurement = $row['unit_measurement'];
            $obj->barcode = $row['barcode'];
            $obj->upc = $row['upc'];
            $obj->alt_look_up = $row['alt_look_up'];
            $obj->regular_price = $row['regular_price'];
            $obj->order_price = $row['order_price'];
            $obj->average_unit_cost = $row['average_unit_cost'];
            $obj->tax = $row['tax'];
            $obj->photo1 = $row['photo1'];
            $obj->photo2 = $row['photo2'];
            $obj->photo3 = $row['photo3'];
            $obj->photo4 = $row['photo4'];
            $obj->cat1 = $row['cat1'];
            $obj->cat2 = $row['cat2'];
            $obj->cat3 = $row['cat3'];
            $obj->cat4 = $row['cat4'];

            $categories[] = $obj;
        }
        return json_encode($categories);
    }


    public function fetch_products_cat_four($public_key, $cc)
    {
        $query = "SELECT * FROM product_tables WHERE key_grant='$public_key' and cat4='$cc'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->pid = $row['pid'];
            $obj->items_name = $row['items_name'];
            $obj->key_grant = $row['key_grant'];
            $obj->item_type = $row['item_type'];
            $obj->vendor_id = $row['vendor_id'];
            $obj->description_inventory = $row['description_inventory'];
            $obj->attribute = $row['attribute'];
            $obj->item_size = $row['item_size'];
            $obj->on_hand_qty = $row['on_hand_qty'];
            $obj->aval_qty = $row['aval_qty'];
            $obj->reorder_point = $row['reorder_point'];
            $obj->unit_measurement = $row['unit_measurement'];
            $obj->barcode = $row['barcode'];
            $obj->upc = $row['upc'];
            $obj->alt_look_up = $row['alt_look_up'];
            $obj->regular_price = $row['regular_price'];
            $obj->order_price = $row['order_price'];
            $obj->average_unit_cost = $row['average_unit_cost'];
            $obj->tax = $row['tax'];
            $obj->photo1 = $row['photo1'];
            $obj->photo2 = $row['photo2'];
            $obj->photo3 = $row['photo3'];
            $obj->photo4 = $row['photo4'];
            $obj->cat1 = $row['cat1'];
            $obj->cat2 = $row['cat2'];
            $obj->cat3 = $row['cat3'];
            $obj->cat4 = $row['cat4'];

            $categories[] = $obj;
        }
        return json_encode($categories);
    }

    public function fetch_prod_dt($public_key, $cc)
    {
        $query = "SELECT * FROM product_tables WHERE key_grant='$public_key' and pid='$cc'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->pid = $row['pid'];
            $obj->items_name = $row['items_name'];
            $obj->key_grant = $row['key_grant'];
            $obj->item_type = $row['item_type'];
            $obj->vendor_id = $row['vendor_id'];
            $obj->description_inventory = $row['description_inventory'];
            $obj->attribute = $row['attribute'];
            $obj->item_size = $row['item_size'];
            $obj->on_hand_qty = $row['on_hand_qty'];
            $obj->aval_qty = $row['aval_qty'];
            $obj->reorder_point = $row['reorder_point'];
            $obj->unit_measurement = $row['unit_measurement'];
            $obj->barcode = $row['barcode'];
            $obj->upc = $row['upc'];
            $obj->alt_look_up = $row['alt_look_up'];
            $obj->regular_price = $row['regular_price'];
            $obj->order_price = $row['order_price'];
            $obj->average_unit_cost = $row['average_unit_cost'];
            $obj->tax = $row['tax'];
            $obj->photo1 = $row['photo1'];
            $obj->photo2 = $row['photo2'];
            $obj->photo3 = $row['photo3'];
            $obj->photo4 = $row['photo4'];
            $obj->cat1 = $row['cat1'];
            $obj->cat2 = $row['cat2'];
            $obj->cat3 = $row['cat3'];
            $obj->cat4 = $row['cat4'];

            $categories[] = $obj;
        }
        return json_encode($categories);
    }

    /** function to get shop categories **/
    public function getCategories_ecom_fours($key_grant, $get_sid)
    {
        $query = "SELECT * FROM category_four WHERE store_key='$key_grant' and category_three='$get_sid'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->user_key = $row['store_key'];
            $obj->category_postomg = $row['category_name'];

            $obj->date_added = $row['cr_date'];
            $categories[] = $obj;
        }
        return json_encode($categories);
    }

    //add to cart
    public function add_new_cart($public_key, $pid, $qty, $amount, $email)
    {
        $dated = date('d-m-Y h:i:s');
        $query = "INSERT INTO `e_shop_carts` (`id`, `pid`, `qty`, `user_key`, `amount`, `cus_email`, `added_date`, `unpaid`, `paid`, `approved`, `delivering`, `delivered`) VALUES (NULL, '$pid', '$qty', '$public_key', '$amount', '$email', '$dated', 'no', 'no', 'no', 'no', 'no')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return json_encode("success");
        } else {
            return json_encode("Invalid Command");
        }
    }
    //add to members
    public function add_new_member($public_key, $email, $password,$fn,$ln)
    {
        $dated = date('d-m-Y h:i:s');
        $query = "INSERT INTO `e_shop_members` (`id`, `first_name`, `last_name`, `email_e`, `password_e`, `host_key`, `created_date`) VALUES (NULL, '$fn', '$ln', '$email', '$password', '$public_key', '$dated')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return json_encode("success");
        } else {
            return json_encode("failed");
        }
    }

    public function delete_carts($public_key, $pid,$email)
    {
        $query = "delete from e_shop_carts where pid='$pid' and user_key='$public_key' and cus_email='$email'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return json_encode("success");
        } else {
            return json_encode("Invalid Command");
        }
    }

    public function clear_carts($public_key,$email)
    {
        $query = "update e_shop_carts set unpaid='yes',paid='yes' where unpaid='no' and user_key='$public_key' and cus_email='$email'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return json_encode("success");
        } else {
            return json_encode("Invalid Command");
        }
    }

    //validate user email
    public function validateUserEmail($email,$public_key)
    {
        $query = "select * from e_shop_members where email_e='$email' and host_key='$public_key'";
        $run_qry = $this->run_query($query);
        $check_email = $this->get_number_of_row($run_qry);
        if ($check_email < 1) {
            return "success";
        } else {
            return "Email Already Exist";
        }
    }





















    /** function to get shop categories **/
    public function getCategories_ecom_three($key_grant, $get_sid)
    {
        $query = "SELECT * FROM category_three WHERE store_key='$key_grant' and category_two='$get_sid'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->user_key = $row['store_key'];
            $obj->category_postomg = $row['category_name'];

            $obj->date_added = $row['cr_date'];
            $categories[] = $obj;
        }
        return $categories;
    }

    /** function to get shop categories **/
    public function getCategories_ecom_four($key_grant, $get_sid)
    {
        $query = "SELECT * FROM category_four WHERE store_key='$key_grant' and category_three='$get_sid'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->user_key = $row['store_key'];
            $obj->category_postomg = $row['category_name'];

            $obj->date_added = $row['cr_date'];
            $categories[] = $obj;
        }
        return $categories;
    }

    public function total_items_by_category($id)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT count(category_id_custom) AS category_id_custom FROM product_listings where category_id_custom='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->category_id_custom = $row['category_id_custom'];
        $user_list[] = $obj;
        return $obj;
    }

    public function update_product_category($infos, $pid_key, $key_grant)
    {
        $query = "update custom_category set category_postomg='$infos' where id='$pid_key' and user_key='$key_grant'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function update_product_category_ecom($infos, $pid_key, $key_grant)
    {
        $query = "update category_one set category_name='$infos' where id='$pid_key' and store_key='$key_grant'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function update_product_category_ecom_two($infos, $pid_key, $key_grant)
    {
        $query = "update category_two set category_name='$infos' where id='$pid_key' and store_key='$key_grant'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function update_product_category_ecom_three($infos, $pid_key, $key_grant)
    {
        $query = "update category_three set category_name='$infos' where id='$pid_key' and store_key='$key_grant'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function update_product_category_ecom_four($infos, $pid_key, $key_grant)
    {
        $query = "update category_four set category_name='$infos' where id='$pid_key' and store_key='$key_grant'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function add_category_ecom($catnamex, $rand, $key_grant)
    {
        $dated = date('d-m-Y');
        $query = "INSERT INTO `category_one` (`id`, `store_key`, `category_name`, `cr_date`) VALUES (NULL, '$key_grant', '$catnamex', '$dated')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_category_ecom_two($cat_id, $rand, $key_grant, $catnamex)
    {
        $dated = date('d-m-Y');
        $query = "INSERT INTO `category_two` (`id`, `category_one`, `store_key`, `category_name`, `cr_date`) VALUES (NULL, '$cat_id', '$key_grant', '$catnamex', '$dated');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_category_ecom_three($cat_id, $rand, $key_grant, $catnamex)
    {
        $dated = date('d-m-Y');
        $query = "INSERT INTO `category_three` (`id`, `category_two`, `store_key`, `category_name`, `cr_date`) VALUES (NULL, '$cat_id', '$key_grant', '$catnamex', '$dated');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_category_ecom_four($cat_id, $rand, $key_grant, $catnamex)
    {
        $dated = date('d-m-Y');
        $query = "INSERT INTO `category_four` (`id`, `category_three`, `store_key`, `category_name`, `cr_date`) VALUES (NULL, '$cat_id', '$key_grant', '$catnamex', '$dated');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function add_vendors($vcode, $vname, $key_grant, $streets, $city, $state, $zip, $phone, $aphone, $vendor_note, $emails, $website)
    {
        $dated = date('d-m-Y');
        $query = "INSERT INTO `supplier_lentose` (`id`, `key_grant`, `vendor_code`, `vendor_name`, `address`, `city`, `state`, `zip`, `phone`, `phone2`, `status`, `note`, `email`, `website`, `created_on`) VALUES (NULL, '$key_grant', '$vcode', '$vname', '$streets', '$city', '$state', '$zip', '$phone', '$aphone', '', '$vendor_note','$emails','$website','$dated')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function add_customer($vcode, $vname, $key_grant, $streets, $city, $state, $zip, $phone, $aphone, $vendor_note, $emails, $website)
    {
        $dated = date('d-m-Y');
        $query = "INSERT INTO `customer_lentose` (`id`, `key_grant`, `vendor_code`, `vendor_name`, `address`, `city`, `state`, `zip`, `phone`, `phone2`, `status`, `note`, `email`, `website`, `created_on`) VALUES (NULL, '$key_grant', '$vcode', '$vname', '$streets', '$city', '$state', '$zip', '$phone', '$aphone', '', '$vendor_note','$emails','$website','$dated')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_new_items($item_type, $cat_type, $key_grant, $vendor, $item_name, $attribute, $item_size, $qty, $description, $aval_qty, $reorder, $unit, $barcode, $upc, $extra_info, $regular_price, $order_price, $avg_unit_cost, $tax)
    {
        $dated = date('d-m-Y');
        $query = "INSERT INTO `product_tables` (`pid`, `key_grant`, `item_type`, `category_inventory`, `vendor_id`, `description_inventory`, `attribute`, `item_size`, `on_hand_qty`, `aval_qty`, `reorder_point`, `unit_measurement`, `barcode`, `upc`, `alt_look_up`, `regular_price`, `order_price`, `average_unit_cost`, `tax`, `items_name`) VALUES (NULL, '$key_grant', '$item_type', '$cat_type', '$vendor', '$description', '$attribute', '$item_size', '', '$aval_qty', '$reorder', '$unit', '$barcode', '$upc', '$extra_info', '$regular_price', '$order_price', '$avg_unit_cost', '$tax','$item_name')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function edit_vendor($vcode, $vname, $key_grant, $streets, $city, $state, $zip, $phone, $aphone, $vendor_note, $emails, $website, $fib)
    {
        $dated = date('d-m-Y');
        $query = "update supplier_lentose set vendor_name='$vname',address='$streets',city='$city',state='$state',zip='$zip',phone='$phone',phone2='$aphone',note='$vendor_note',email='$emails',website='$website' where id='$fib' and key_grant='$key_grant'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function edit_customers($vcode, $vname, $key_grant, $streets, $city, $state, $zip, $phone, $aphone, $vendor_note, $emails, $website, $fib)
    {
        $dated = date('d-m-Y');
        $query = "update customer_lentose set vendor_name='$vname',address='$streets',city='$city',state='$state',zip='$zip',phone='$phone',phone2='$aphone',note='$vendor_note',email='$emails',website='$website' where id='$fib' and key_grant='$key_grant'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }



    public function delete_category_ecom($pid, $key_grant)
    {
        $query = "delete from category_one where id='$pid' and store_key='$key_grant'";
        return $this->runner($query);
    }

    public function delete_category_ecom_two($pid, $key_grant)
    {
        $query = "delete from category_two where id='$pid' and store_key='$key_grant'";
        return $this->runner($query);
    }

    public function delete_category_ecom_three($pid, $key_grant)
    {
        $query = "delete from category_three where id='$pid' and store_key='$key_grant'";
        return $this->runner($query);
    }

    public function delete_category_ecom_four($pid, $key_grant)
    {
        $query = "delete from category_four where id='$pid' and store_key='$key_grant'";
        return $this->runner($query);
    }

    public function delete_vendor($pid, $key_grant)
    {
        $query = "delete from supplier_lentose where id='$pid' and key_grant='$key_grant'";
        return $this->runner($query);
    }

    public function delete_customer($pid, $key_grant)
    {
        $query = "delete from customer_lentose where id='$pid' and key_grant='$key_grant'";
        return $this->runner($query);
    }


    /** function to get shop suppliers **/
    public function getsuppliers($user_key)
    {
        $query = "SELECT * FROM supplier_lentose WHERE key_grant='$user_key'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->key_grant = $row['key_grant'];
            $obj->vendor_code = $row['vendor_code'];
            $obj->vendor_name = $row['vendor_name'];
            $obj->address = $row['address'];
            $obj->city = $row['city'];
            $obj->state = $row['state'];
            $obj->zip = $row['zip'];
            $obj->phone = $row['phone'];
            $obj->phone2 = $row['phone2'];
            $obj->status = $row['status'];
            $obj->note = $row['note'];
            $obj->email = $row['email'];
            $obj->website = $row['website'];
            $categories[] = $obj;
        }
        return $categories;
    }

    /** function to get shop customer_lentose **/
    public function getcustomer_lentose($user_key)
    {
        $query = "SELECT * FROM customer_lentose WHERE key_grant='$user_key'";
        $query = $this->run_query($query);
        $categories = array();
        while ($row = $this->get_result($query)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->key_grant = $row['key_grant'];
            $obj->vendor_code = $row['vendor_code'];
            $obj->vendor_name = $row['vendor_name'];
            $obj->address = $row['address'];
            $obj->city = $row['city'];
            $obj->state = $row['state'];
            $obj->zip = $row['zip'];
            $obj->phone = $row['phone'];
            $obj->phone2 = $row['phone2'];
            $obj->status = $row['status'];
            $obj->note = $row['note'];
            $obj->email = $row['email'];
            $obj->website = $row['website'];
            $categories[] = $obj;
        }
        return json_encode($categories);
    }


    public function del_banks_statement($code)
    {
        $query1 = "delete from bank_statement where dcode='$code'";
        return $this->runner($query1);
    }


    public function runner($query)
    {
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //All user info sorted by id
    public function get_user_infos($id)
    {
        $query = "select * from staffs_accounts where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->user_id = $row['id'];
        $obj->email = $row['email'];
        $obj->fullname = $row['fullname'];
        return $obj;
    }

    //vt rp
    public function rt_rost($s, $e)
    {
        $query = "select * from vault_report where date_cr >= '$s' and date_cr <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->balance = $row['balance'];
            $obj->date_cr = $row['date_cr'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    /** function to reduce the lenght of a string **/
    public function stringFormat($string, $len)
    {
        if (strlen($string) > $len) {
            return substr($string, 0, $len) . '...';
        } else {
            return $string;
        }
    }


    public function add_bansks($bn, $acn, $bads)
    {
        $pwd_gen = uniqid();
        $get_date = date('m/d/y');
        $query = "INSERT INTO `banks` (`id`, `bank_name`, `account_no`, `bank_address`, `status`, `date_created`) VALUES (NULL, '$bn', '$acn', '$bads', '0', '$get_date');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function axnx($bn)
    {
        $query = "INSERT INTO `despense_account` (`id`, `account_name`) VALUES (NULL,'$bn');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_plans($uid, $cus_id)
    {
        $pwd_gen = uniqid();
        $get_date = date('m/d/y');
        $query = "INSERT INTO `repayment` (`id`, `loan_id`,`customer_id`) VALUES (NULL,'$uid','$cus_id')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_trials($accname, $description)
    {
        $pwd_gen = uniqid();
        $get_date = date('m/d/y');
        $query = "INSERT INTO `trial_balance_cats` (`id`, `cats`, `description`, `date_added`) VALUES (NULL,'$accname','$description','$get_date');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_interests($interest, $amount)
    {
        $pwd_gen = uniqid();
        $get_date = date('m/d/y');
        $query = "INSERT INTO `interest` (`id`, `loans`,`amount`,`dated_cr`) VALUES (NULL,'$interest','$amount','$get_date');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_dptsn($dpt)
    {
        $get_date = date('m/d/y');
        $query = "INSERT INTO `department` (`id`, `dpt`,`dated_added`) VALUES (NULL,'$dpt','$get_date');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_center($wc, $work_center)
    {
        $pwd_gen = uniqid();
        $get_date = date('m/d/y');
        $query = "INSERT INTO `work_center` (`id`, `center_name`, `center_code`, `date_created`, `status`) VALUES (NULL, '$wc', '$work_center', '$get_date', '0');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_e_category($ec)
    {
        $pwd_gen = uniqid();
        $get_date = date('m/d/y');
        $query = "INSERT INTO `expenses` (`id`, `expenese_name`, `cr_dated`) VALUES (NULL, '$ec', '$get_date');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_es($dc, $cat, $amount, $cdate, $new_account, $fullname, $rand, $user_id, $bank_id, $bank_name)
    {
        $decode = rand(123456, 12345678);
        $acc_types = 4;
        $pwd_gen = uniqid();
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `expenses_data` (`id`, `date_added`, `description`, `type`, `account`, `status`, `dr`, `balance`, `by_user`, `dcode`, `types`, `bank_id`, `approved_by`, `auto_transaction`) VALUES (NULL, '$cdate', '$dc from $bank_name acc', '$cat', '0', '0', '$amount','$new_account','$fullname','$rand','0','$bank_id','bank','0');";

        $query1 = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`, `description`, `balance`, `dcode`, `trans_types`, `approved_by`, `auto_transaction`) VALUES (NULL, NULL, NULL, '$amount', NULL, '$cdate', '$bank_id', NULL, '$dc from $bank_name acc', '$new_account', '$rand','$acc_types','bank','0');";

        //$query2 = "update banks set bal='$new_account' where id='$bank_id'";
        //cash day report
        $query3 = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `balance`, `trans_date`, `status`, `dcode`) VALUES (NULL, '$dc from $bank_name acc', '$user_id', '$amount', NULL, '$new_account', '$get_date', NULL, '$rand');";
        //day expenses reports
        $query4 = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `balance`, `trans_date`, `status`, `dcode`) VALUES (NULL, '$dc to expenses acc', '$user_id', '0', $amount, '$new_account', '$get_date', NULL, '$rand');";

        $run_qry = $this->run_query($query);
        $run_qry1 = $this->run_query($query1);
        //$run_qry2 = $this->run_query($query2);
        $run_qry3 = $this->run_query($query3);
        $run_qry4 = $this->run_query($query4);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function inter_banks($new_acc_bal_from, $new_acc_bal_to, $bank_id_from, $bank_id_to, $amount, $cdate, $dc)
    {
        $pwd_gen = uniqid();
        $get_date = date('Y-m-d H:i:s');

        $cdate = date("Y-m-d H:i:s", strtotime($cdate));
        //to
        $query1 = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`, `description`, `balance`, `dcode`) VALUES (NULL, NULL, NULL, '0', '$amount', '$cdate', '$bank_id_to', NULL, '$dc', '$new_acc_bal_to', '0');";

        //from
        $query11 = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`, `description`, `balance`, `dcode`) VALUES (NULL, NULL, NULL, '$amount', NULL, '$cdate', '$bank_id_from', NULL, '$dc', '$new_acc_bal_from', '0');";

        $query = "update banks set bal='$new_acc_bal_from' where id='$bank_id_from'";

        $query2 = "update banks set bal='$new_acc_bal_to' where id='$bank_id_to'";

        $run_qry = $this->run_query($query);
        $run_qry1 = $this->run_query($query1);
        $run_qry2 = $this->run_query($query2);
        $query11 = $this->run_query($query11);

        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function add_e($dc, $cat, $amount, $cdate, $new_account, $fullname, $rand, $user_id)
    {
        $pwd_gen = rand(123456, 12345678);
        $get_dates = date(strtotime('Y-m-d H:i:s'));
        //$get_date = date('Y-m-d H:i:s', $get_dates);
        $query = "INSERT INTO `expenses_data` (`id`, `date_added`, `description`, `type`, `account`, `status`, `dr`, `balance`, `by_user`, `dcode`, `types`, `trans_types`,`approved_by`,`auto_transaction`) VALUES (NULL, '$cdate', '$dc', '$cat', '0', '0', '$amount','$new_account','$fullname','$pwd_gen','1','4','cash','0');";
        $query1 = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `cr`, `dr`, `balance`, `date_cr`, `dcode`,`trans_types`,`approved_by`,`auto_transaction`) VALUES (NULL,'$dc', '0', '$amount', '0','$new_account','$cdate','$pwd_gen','4','cash','0')";
        //$query2 = "UPDATE `cash_account` SET `balance` = '$new_account' WHERE `cash_account`.`id` ='1'";

        //cash day report
        $query3 = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `balance`, `trans_date`, `status`, `dcode`) VALUES (NULL, '$dc from cash acc', '$user_id', '$amount', NULL, '$new_account', '$cdate', NULL, '$pwd_gen');";
        //day expenses reports
        $query4 = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `balance`, `trans_date`, `status`, `dcode`) VALUES (NULL, '$dc to expenses acc', '$user_id', '0', $amount, '$new_account', '$cdate', NULL, '$pwd_gen');";

        $run_qry = $this->run_query($query);
        $run_qry1 = $this->run_query($query1);
        //$run_qry2 = $this->run_query($query2);
        $run_qry3 = $this->run_query($query3);
        $run_qry4 = $this->run_query($query4);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_sus_e($dc, $cat, $amount, $cdate, $new_account, $fullname, $rand, $user_id)
    {
        $pwd_gen = uniqid();
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `expenses_data` (`id`, `date_added`, `description`, `type`, `account`, `status`, `cr`, `balance`, `by_user`, `dcode`) VALUES (NULL, '$cdate', '$dc', '$cat', '0', '0', '$amount','$new_account','$fullname','$rand');";
        $query1 = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `cr`, `dr`, `balance`, `date_cr`, `dcode`) VALUES (NULL, '$dc', '0', '$amount', '0','$new_account','$cdate','$rand')";
        $query2 = "UPDATE `cash_account` SET `balance` = '$new_account' WHERE `cash_account`.`id` ='1'";
        //cash day report
        $query3 = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `balance`, `trans_date`, `status`, `dcode`) VALUES (NULL, '$dc from cash acc', '$user_id', '$amount', NULL, '$new_account', '$get_date', NULL, '$rand');";
        //day expenses reports
        $query4 = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `balance`, `trans_date`, `status`, `dcode`) VALUES (NULL, '$dc to expenses acc', '$user_id', '0', $amount, '$new_account', '$get_date', NULL, '$rand');";

        $run_qry = $this->run_query($query);
        $run_qry1 = $this->run_query($query1);
        $run_qry2 = $this->run_query($query2);
        $run_qry3 = $this->run_query($query3);
        $run_qry4 = $this->run_query($query4);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function d_report1($amount, $cname, $bankid, $status, $user_id, $rand)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `trans_date`, `status`, `balance`, `dcode`) VALUES (NULL, 'Disburse Loan -$cname', '$user_id', NULL, '$amount','$get_date', NULL,'$amount','$rand')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function bf_fk($hos_key)
    {
        $query = "SELECT * FROM staffs where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fn = $row['fn'];
            $obj->ln = $row['ln'];
            $obj->email = $row['email'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function d_report2($amount, $cname, $bankid, $status, $user_id, $due_date, $rand)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `trans_date`, `status`, `balance`, `dcode`) VALUES (NULL, 'Loan Start $get_date - $due_date -  $cname', '$user_id', '$amount', '0','$get_date', NULL,'0','$rand')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //Add New staff
    public function add_staff($fullname, $position, $department, $email, $address, $phone, $gender, $work_center)
    {
        $pwd_gen = uniqid();
        $get_date = date('m/d/y');
        $query = "INSERT INTO `staffs_accounts` (`id`, `fullname`, `postion`, `department`, `email`, `password`, `address`, `phone`, `gender`, `work_center`) VALUES (NULL, '$fullname', '$position', '$department', '$email', '$pwd_gen','$address','$phone','$gender','$work_center');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function loan_grant($rtype, $s, $e)
    {
        $query = "SELECT * FROM `loans` WHERE center_id='$rtype' and loan_date >= '$s' and loan_date <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];
            $get_work_cen = $this->edit_customer($row['customer_id']);
            $obj->c_name = $get_work_cen->c_name;
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function loan_interest_free($s, $e)
    {
        $query = "SELECT * FROM `loans` WHERE loan_type='Interest Free' and loan_date >= '$s' and loan_date <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];
            $get_work_cen = $this->edit_customer($row['customer_id']);
            $obj->c_name = $get_work_cen->c_name;
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function sum_free_lonas($s, $e)
    {
        $query = "SELECT SUM(loan_amount) AS xc FROM loans WHERE status='0' and loan_type='Interest Free' and loan_date>='$s' and loan_date <='$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->xc = $row['xc'];
        $user_list[] = $obj;
        return $obj;
    }


    public function lc_total_work_center($rtype, $s, $e)
    {
        $query = "SELECT SUM(loan_amount) AS xc FROM loans WHERE status='0' and center_id='$rtype' and loan_date>='$s' and loan_date <='$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->xc = $row['xc'];
        $user_list[] = $obj;
        return $obj;
    }

    public function grant_loans_by_centers($rtype, $s, $e)
    {
        $query = "SELECT loans.id,loans.customer_id,loans.center_id,customer.c_name, repayment.cheque_amount,repayment.principal,repayment.interest,repayment.due_date FROM customer,loans,repayment WHERE loans.id=repayment.loan_id AND customer.id=repayment.customer_id AND loans.center_id='$rtype' AND repayment.due_date BETWEEN '$s' AND '$e' ORDER BY `loans`.`customer_id` ASC";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->cheque_amount = $row['cheque_amount'];
            $obj->interest = $row['interest'];
            $obj->c_name = $row['c_name'];
            $obj->due_date = $row['due_date'];

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function loan_grantss($s, $e)
    {
        $query = "SELECT * FROM `loans` WHERE status=0 and loan_date >= '$s' and loan_date <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];

            $get_work_cen = $this->edit_customer($row['customer_id']);
            $obj->c_name = $get_work_cen->c_name;
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //Add New staff
    public function new_loans($surety_address, $surety_dpt, $surety_phone, $surety_name, $rate, $loan_type, $due_date, $amount, $loan_date, $client, $wc, $cus_bankid, $bankid, $rand)
    {
        $pwd_gen = uniqid();
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `loans` (`id`, `customer_id`, `loan_date`, `loan_amount`, `Due_date`, `loan_type`, `rate`, `surety_name`, `surety_work_address`, `surety_phone`, `surety_dpt`,`center_id`,`cus_bankid`,`bank_id`,`dcode`) VALUES (NULL,'$client','$loan_date', '$amount', '$due_date', '$loan_type', '$rate', '$surety_name', '$surety_address', '$surety_phone', '$surety_dpt','$wc','$cus_bankid','$bankid','$rand')";
        $acc = "INSERT INTO `trial_account` (`id`, `trial_cat_id`, `cr`, `dr`, `date_cr`, `status`) VALUES (NULL, '14', 0, $amount, '$get_date', '0')";
        $run_qry = $this->run_query($query);
        $run_acc = $this->run_query($acc);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //retrieve staff list from database to table
    public function new_record_info()
    {
        $query = "select * from staffs_accounts where status='1'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fullname = $row['fullname'];
            $obj->position = $row['postion'];
            $obj->department = $row['department'];
            $obj->email = $row['email'];
            $obj->phone = $row['phone'];
            $obj->address = $row['address'];
            $obj->gender = $row['gender'];
            $obj->ban = $row['ban'];
            $obj->work_center = $row['work_center'];
            //get work center name
            $get_work_cen = $this->get_work_center($row['work_center']);
            $obj->center_name = $get_work_cen->center_name;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function loans_data()
    {
        $query = "select * from loans where status='0' order by id desc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];
            $obj->balance = $row['balance'];
            $obj->due_date = $row['Due_date'];
            $obj->loan_type = $row['loan_type'];
            $obj->rate = $row['rate'];
            $obj->surety_name = $row['surety_name'];
            $obj->surety_work_address = $row['surety_work_address'];
            $obj->surety_phone = $row['surety_phone'];
            $obj->surety_dpt = $row['surety_dpt'];
            $obj->status = $row['status'];
            $obj->cus_bankid = $row['cus_bankid'];
            $obj->bank_id = $row['bank_id'];
            $obj->dcode = $row['dcode'];

            if ($obj->customer_id == 0) {
                $obj->c_name = 'unset';
            } else {
                $get_work_cen = $this->edit_customer($row['customer_id']);
                $obj->c_name = $get_work_cen->c_name;
            }

            if ($obj->cus_bankid == 0) {
                $obj->bank_name = 'unset';
            } else {
                $get_work_cen = $this->get_work_bank($row['cus_bankid']);
                $obj->bank_name = $get_work_cen->bank_name;
            }
            if ($obj->bank_id == 0) {
                $obj->bank_names = 'unset';
            } else {
                $get_work_cent = $this->get_work_bank($row['bank_id']);
                $obj->bank_names = $get_work_cent->bank_name;
            }

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function loans_data_free()
    {
        $query = "select * from loans where status='0' and bad_debt='1' order by id desc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];
            $obj->balance = $row['balance'];
            $obj->due_date = $row['Due_date'];
            $obj->loan_type = $row['loan_type'];
            $obj->rate = $row['rate'];
            $obj->surety_name = $row['surety_name'];
            $obj->surety_work_address = $row['surety_work_address'];
            $obj->surety_phone = $row['surety_phone'];
            $obj->surety_dpt = $row['surety_dpt'];
            $obj->status = $row['status'];
            $obj->cus_bankid = $row['cus_bankid'];
            $obj->bank_id = $row['bank_id'];
            $obj->dcode = $row['dcode'];

            if ($obj->customer_id == 0) {
                $obj->c_name = 'unset';
            } else {
                $get_work_cen = $this->edit_customer($row['customer_id']);
                $obj->c_name = $get_work_cen->c_name;
            }

            if ($obj->cus_bankid == 0) {
                $obj->bank_name = 'unset';
            } else {
                $get_work_cen = $this->get_work_bank($row['cus_bankid']);
                $obj->bank_name = $get_work_cen->bank_name;
            }
            if ($obj->bank_id == 0) {
                $obj->bank_names = 'unset';
            } else {
                $get_work_cent = $this->get_work_bank($row['bank_id']);
                $obj->bank_names = $get_work_cent->bank_name;
            }

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function loans_data_frees()
    {
        $query = "select * from loans where status='0' and loan_type='Interest Free' order by id desc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];
            $obj->balance = $row['balance'];
            $obj->due_date = $row['Due_date'];
            $obj->loan_type = $row['loan_type'];
            $obj->rate = $row['rate'];
            $obj->surety_name = $row['surety_name'];
            $obj->surety_work_address = $row['surety_work_address'];
            $obj->surety_phone = $row['surety_phone'];
            $obj->surety_dpt = $row['surety_dpt'];
            $obj->status = $row['status'];
            $obj->cus_bankid = $row['cus_bankid'];
            $obj->bank_id = $row['bank_id'];
            $obj->dcode = $row['dcode'];

            if ($obj->customer_id == 0) {
                $obj->c_name = 'unset';
            } else {
                $get_work_cen = $this->edit_customer($row['customer_id']);
                $obj->c_name = $get_work_cen->c_name;
            }

            if ($obj->cus_bankid == 0) {
                $obj->bank_name = 'unset';
            } else {
                $get_work_cen = $this->get_work_bank($row['cus_bankid']);
                $obj->bank_name = $get_work_cen->bank_name;
            }
            if ($obj->bank_id == 0) {
                $obj->bank_names = 'unset';
            } else {
                $get_work_cent = $this->get_work_bank($row['bank_id']);
                $obj->bank_names = $get_work_cent->bank_name;
            }

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function loans_repayment($loan_id)
    {
        $query = "select * from repayment where status='0' and loan_id='$loan_id'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->principal = $row['principal'];
            $obj->interest = $row['interest'];
            $obj->due_date = $row['due_date'];
            $obj->interest_paid = $row['interest_paid'];
            $obj->principal_paid = $row['principal_paid'];

            $obj->interest_paid_date = $row['interest_paid_date'];
            $obj->principal_paid_date = $row['principal_paid_date'];
            $obj->loan_id = $row['loan_id'];
            $obj->entered_by = $row['entered_by'];
            $obj->status = $row['status'];
            $obj->bank_id = $row['bank_id'];
            $obj->method_pay = $row['method_pay'];
            $obj->cheque_amount = $row['cheque_amount'];
            $obj->dcode = $row['dcode'];

            if ($obj->bank_id == 0) {
                $obj->bank_name = 'Unassigned';
            } else {
                $get_work_bank = $this->work_bank($row['bank_id']);
                $obj->bank_name = $get_work_bank->bank_name;
            }
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function refubsd($id)
    {
        $query = "select * from customer_account where customer_id='$id'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->cr = $row['cr'];
            $obj->dr = $row['dr'];
            $obj->created_date = $row['created_date'];
            $obj->descriptions = $row['descriptions'];


            $user_list[] = $obj;
        }
        return $user_list;
    }


    //All user info sorted by id
    public function getloaninfo($id)
    {
        $query = "select * from loans where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->customer_id = $row['customer_id'];
        $obj->loan_date = $row['loan_date'];
        $obj->loan_amount = $row['loan_amount'];
        $obj->due_date = $row['Due_date'];
        $obj->loan_type = $row['loan_type'];
        $obj->rate = $row['rate'];
        $obj->surety_name = $row['surety_name'];
        $obj->surety_work_address = $row['surety_work_address'];
        $obj->surety_phone = $row['surety_phone'];
        $obj->surety_dpt = $row['surety_dpt'];
        $obj->status = $row['status'];
        $obj->bank_id = $row['bank_id'];
        $obj->cus_bankid = $row['cus_bankid'];

        if ($obj->customer_id == 0) {
            $obj->c_name = 'unset';
        } else {
            $get_work_cen = $this->edit_customer($row['customer_id']);
            $obj->c_name = $get_work_cen->c_name;
        }
        return $obj;
    }

    public function loans_repayment_reports($rtype, $s, $e)
    {
        $query = "SELECT * FROM `repayment` WHERE principal_paid='paid' and principal_paid_date >= '$s' and principal_paid_date<= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->principal = $row['principal'];
            $obj->interest = $row['interest'];
            $obj->due_date = $row['due_date'];
            $obj->interest_paid = $row['interest_paid'];
            $obj->principal_paid = $row['principal_paid'];

            $obj->interest_paid_date = $row['interest_paid_date'];
            $obj->principal_paid_date = $row['principal_paid_date'];
            $obj->loan_id = $row['loan_id'];
            $obj->entered_by = $row['entered_by'];
            $obj->status = $row['status'];

            $get_work_cen = $this->edit_customer($row['customer_id']);
            $obj->c_name = $get_work_cen->c_name;

            $get_work_cen = $this->getloaninfo($row['loan_id']);
            $obj->loan_amount = $get_work_cen->loan_amount;

            //total repaid
            $get_work_cenx = $this->principal_report_db($row['customer_id'], $row['loan_id']);
            $obj->cbal = $get_work_cenx->cbal;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function cumulative_report($rtype, $s, $e)
    {
        $query = "SELECT * FROM `loans` WHERE  loan_date >= '$s' and loan_date <= '$e'";
        // $query = "SELECT * FROM `loans`";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];
            $obj->balance = $row['balance'];
            $obj->due_date = $row['Due_date'];

            if ($obj->customer_id == 0) {
                $obj->c_name = 'unset';
            } else {
                $get_work_cen = $this->edit_customer($row['customer_id']);
                $obj->c_name = $get_work_cen->c_name;
            }

            $get_paid = $this->check_all_principal($row['id']);
            $obj->principal_paid = $get_paid->principal_paid;

            if ($obj->id == 0) {
                $obj->interest_paid = '0';
            } else {
                $get_paid = $this->check_all_interest($row['id']);
                $obj->interest_paid = $get_paid->interest_paid;
            }

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function cumulative_reportads()
    {
        $query = "SELECT * FROM loans";
        // $query = "SELECT * FROM `loans`";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];
            $obj->balance = $row['balance'];
            $obj->due_date = $row['Due_date'];

            if ($obj->customer_id == 0) {
                $obj->c_name = 'unset';
            } else {
                $get_work_cen = $this->edit_customer($row['customer_id']);
                $obj->c_name = $get_work_cen->c_name;
            }

            $get_paid = $this->check_all_principal($row['id']);
            $obj->principal_paid = $get_paid->principal_paid;

            if ($obj->id == 0) {
                $obj->interest_paid = '0';
            } else {
                $get_paid = $this->check_all_interest($row['id']);
                $obj->interest_paid = $get_paid->interest_paid;
            }

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function cumulative_reportads_months($s, $e)
    {
        $query = "SELECT * FROM loans WHERE  loan_date >= '$s' and loan_date <= '$e'";
        // $query = "SELECT * FROM `loans`";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->loan_date = $row['loan_date'];
            $obj->loan_amount = $row['loan_amount'];
            $obj->balance = $row['balance'];
            $obj->due_date = $row['Due_date'];

            if ($obj->customer_id == 0) {
                $obj->c_name = 'unset';
            } else {
                $get_work_cen = $this->edit_customer($row['customer_id']);
                $obj->c_name = $get_work_cen->c_name;
            }

            $get_paid = $this->check_all_principal($row['id']);
            $obj->principal_paid = $get_paid->principal_paid;

            if ($obj->id == 0) {
                $obj->interest_paid = '0';
            } else {
                $get_paid = $this->check_all_interest($row['id']);
                $obj->interest_paid = $get_paid->interest_paid;
            }

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function check_all_principal($load_id)
    {
        $query = "SELECT SUM(principal) AS principal_paidz FROM repayment where loan_id='$load_id' and principal_paid='paid'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->principal_paid = $row['principal_paidz'];
        return $obj;
    }

    public function check_all_interest($load_id)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(interest) AS interest_paid FROM repayment where loan_id='$load_id' and interest_paid='paid'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->interest_paid = $row['interest_paid'];
        $user_list[] = $obj;
        return $obj;
    }

    public function general_repayment_reports($rtype, $s, $e)
    {
        $query = "SELECT * FROM `repayment` WHERE  due_date >= '$s' and due_date <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->principal = $row['principal'];
            $obj->interest = $row['interest'];
            $obj->due_date = $row['due_date'];
            $obj->interest_paid = $row['interest_paid'];
            $obj->principal_paid = $row['principal_paid'];

            $obj->interest_paid_date = $row['interest_paid_date'];
            $obj->principal_paid_date = $row['principal_paid_date'];
            $obj->loan_id = $row['loan_id'];
            $obj->entered_by = $row['entered_by'];
            $obj->status = $row['status'];

            $get_work_cen = $this->edit_customer($row['customer_id']);
            $obj->c_name = $get_work_cen->c_name;

            $get_work_cen = $this->getloaninfo($row['loan_id']);
            $obj->loan_amount = $get_work_cen->loan_amount;

            $get_work_cenx = $this->principal_report_db($row['customer_id'], $row['loan_id']);
            $obj->cbal = $get_work_cenx->cbal;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function interest_m($check_month)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(interest) AS mothly FROM repayment where MONTH(interest_paid_date)='$check_month' and interest_paid='paid'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->mothly = $row['mothly'];
        $user_list[] = $obj;
        return $obj;
    }

    public function sum_work_centers($rtype, $s, $e)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(repayment.interest) as total FROM customer,loans,repayment WHERE loans.id=repayment.loan_id AND customer.id=repayment.customer_id AND loans.center_id='$rtype' AND  repayment.due_date >= '$s' and repayment.due_date <= '$e'  ORDER BY `loans`.`customer_id` ASC";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->total = $row['total'];
        $user_list[] = $obj;
        return $obj;
    }

    public function pricv($check_month)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(principal) AS mothly FROM repayment where MONTH(principal_paid_date)='$check_month' and principal_paid='paid'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->mothly = $row['mothly'];
        $user_list[] = $obj;
        return $obj;
    }


    public function suspenses_acx()
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(balance) AS despense_account FROM despense_account";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->balancexc = $row['despense_account'];
        $user_list[] = $obj;
        return $obj;
    }


    public function vault_xx()
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(balance) AS vault FROM vault";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->balancexcx = $row['vault'];
        $user_list[] = $obj;
        return $obj;
    }


    public function due_loans($check_day)
    {
        $query = "SELECT * FROM `repayment` WHERE MONTH(due_date)='$check_day' order by due_date asc ";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->principal = $row['principal'];
            $obj->interest = $row['interest'];
            $obj->due_date = $row['due_date'];
            $obj->interest_paid = $row['interest_paid'];
            $obj->principal_paid = $row['principal_paid'];

            $obj->interest_paid_date = $row['interest_paid_date'];
            $obj->principal_paid_date = $row['principal_paid_date'];
            $obj->loan_id = $row['loan_id'];
            $obj->entered_by = $row['entered_by'];
            $obj->status = $row['status'];
            $obj->cheque_amount = $row['cheque_amount'];

            if ($obj->customer_id == 0) {
                $obj->customer_id = "Unset";
            } else {
                $student_house = $this->edit_customer($obj->customer_id);
                $obj->c_name = $student_house->c_name;
            }


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function shedulesx($rtype, $s, $e)
    {
        $query = "SELECT * FROM `repayment` WHERE bank_id='$rtype' and due_date >= '$s' and due_date <= '$e')";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->principal = $row['principal'];
            $obj->interest = $row['interest'];
            $obj->due_date = $row['due_date'];
            $obj->interest_paid = $row['interest_paid'];
            $obj->principal_paid = $row['principal_paid'];

            $obj->interest_paid_date = $row['interest_paid_date'];
            $obj->principal_paid_date = $row['principal_paid_date'];
            $obj->loan_id = $row['loan_id'];
            $obj->entered_by = $row['entered_by'];
            $obj->status = $row['status'];

            $obj->cheque_amount = $row['cheque_amount'];

            if ($obj->customer_id == 0) {
                $obj->customer_id = "na";
            } else {
                $student_house = $this->edit_customer($obj->customer_id);
                $obj->c_name = $student_house->c_name;
            }

            $get_work_cen = $this->getloaninfo($row['loan_id']);
            $obj->loan_amount = $get_work_cen->loan_amount;

            $get_work_cenx = $this->principal_report_db($row['customer_id'], $row['loan_id']);
            $obj->cbal = $get_work_cenx->cbal;

            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function loans_interest_reports($rtype, $s, $e)
    {

        $query = "SELECT * FROM `repayment` WHERE interest_paid='paid' and interest_paid_date >= '$s' and interest_paid_date <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->customer_id = $row['customer_id'];
            $obj->principal = $row['principal'];
            $obj->interest = $row['interest'];
            $obj->due_date = $row['due_date'];
            $obj->interest_paid = $row['interest_paid'];
            $obj->principal_paid = $row['principal_paid'];

            $obj->interest_paid_date = $row['interest_paid_date'];
            $obj->principal_paid_date = $row['principal_paid_date'];
            $obj->loan_id = $row['loan_id'];
            $obj->entered_by = $row['entered_by'];
            $obj->status = $row['status'];

            if ($obj->customer_id == '') {
                $obj->c_name = 'unset';
            } else {
                $get_work_cen = $this->edit_customer($row['customer_id']);
                $obj->c_name = $get_work_cen->c_name;
            }
            if ($obj->loan_id == 0) {
                $obj->loan_amount = '0';
            } else {
                $get_work_cen = $this->getloaninfo($row['loan_id']);
                $obj->loan_amount = $get_work_cen->loan_amount;

            }
            if ($obj->customer_id == '' && $obj->loan_id == 0) {
                $obj->cbal = 0;
            } else {
                $get_work_cenx = $this->principal_report_db($row['customer_id'], $row['loan_id']);
                $obj->cbal = $get_work_cenx->cbal;

            }

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function customer_data()
    {
        $query = "select * from customer where status='1' order by  c_name asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->tittle = $row['tittle'];
            $obj->c_name = $row['c_name'];
            $obj->sex = $row['sex'];
            $obj->work_center = $row['work_center'];
            $obj->work_address = $row['work_address'];
            $obj->home_address = $row['home_address'];
            $obj->cphone = $row['cphone'];
            $obj->cemail = $row['cemail'];
            $obj->dpt = $row['dpt'];
            $obj->status = $row['status'];
            $obj->marketer = $row['marketer'];
            $obj->createdDate = $row['createdDate'];
            //get work center name

            if ($obj->work_center == 0) {
                $obj->center_name = 'Not Assigned';
            } else {
                $get_work_cen = $this->get_work_center($row['work_center']);
                $obj->center_name = $get_work_cen->center_name;
            }

            if ($obj->marketer == 0) {
                $obj->fullname = "na";
            } else {
                $get_work_cenw = $this->statt($row['marketer']);
                $obj->fullname = $get_work_cenw->fullname;
            }


            $user_list[] = $obj;
        }
        return $user_list;
    }

    //All user info sorted by id
    public function get_work_center($id)
    {
        $query = "select * from work_center where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->center_name = $row['center_name'];
        $obj->center_code = $row['center_code'];
        $obj->date_created = $row['date_created'];

        return $obj;
    }

    //All user info sorted by id
    public function get_expenses($id)
    {
        $query = "select * from expenses where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->expenese_name = $row['expenese_name'];

        return $obj;
    }

    public function despense_account($id)
    {
        $query = "select * from despense_account where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->account_name = $row['account_name'];
        $obj->balance = $row['balance'];

        return $obj;
    }

    public function cashout_account($id)
    {
        $query = "select * from despense_account where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->account_name = $row['account_name'];
        $obj->balance = $row['balance'];
        return $obj;
    }

    public function cash_acc()
    {
        $query = "select * from cash_account where id='1'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->balance = $row['balance'];
        return $obj;
    }

    public function bk_bal($id)
    {
        $query = "select * from banks where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->balance = $row['bal'];
        return $obj;
    }

    public function suspense_balance()
    {
        $query = "select * from despense_account where id='1'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->balance = $row['balance'];
        return $obj;
    }

    //All user info sorted by id
    public function update_expenses($id)
    {
        $query = "select * from expenses_data where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->date_added = $row['date_added'];
        $obj->description = $row['description'];
        $obj->amount = $row['amount'];
        $obj->type = $row['type'];

        $hod_info = $this->get_expenses($row['type']);
        $obj->expenese_name = $hod_info->expenese_name;

        return $obj;
    }

    public function get_loans($id)
    {
        $query = "select * from loans where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->customer_id = $row['customer_id'];
        $obj->loan_date = $row['loan_date'];
        $obj->loan_amount = $row['loan_amount'];
        $obj->Due_date = $row['Due_date'];
        $obj->rate = $row['rate'];
        $obj->loan_type = $row['loan_type'];
        return $obj;
    }

    public function get_work_bank($id)
    {
        $query = "select * from banks where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->bank_name = $row['bank_name'];
        $obj->account_no = $row['account_no'];
        $obj->bank_address = $row['bank_address'];
        $obj->date_created = $row['date_created'];
        $obj->balance = $row['bal'];
        return $obj;
    }

    public function work_bank($id)
    {
        $query = "select * from banks where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->bank_name = $row['bank_name'];
        return $obj;
    }

    public function get_work_accounts($id)
    {
        $query = "select * from trial_balance_cats where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->cats = $row['cats'];
        $obj->description = $row['description'];
        return $obj;
    }


    public function get_dpt_id($id)
    {
        $query = "select * from department where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->cats = $row['dpt'];
        return $obj;
    }

    public function get_interest($id)
    {
        $query = "select * from interest where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->loans = $row['loans'];
        return $obj;
    }

    //All user info sorted by id
    public function edit_customer($id)
    {

        $query = "select * from customer where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->tittle = $row['tittle'];
        $obj->c_name = $row['c_name'];
        $obj->sex = $row['sex'];
        $obj->work_center = $row['work_center'];
        $obj->work_address = $row['work_address'];
        $obj->home_address = $row['home_address'];
        $obj->cphone = $row['cphone'];
        $obj->cemail = $row['cemail'];
        $obj->dpt = $row['dpt'];
        $obj->status = $row['status'];
        $obj->createdDate = $row['createdDate'];
        //get work center name

        if ($obj->work_center == 0) {
            $obj->center_name = 'Not Assigned';
        } else {
            $get_work_cen = $this->get_work_center($row['work_center']);
            $obj->center_name = $get_work_cen->center_name;
        }

//
//        $get_work_cen = $this->get_work_center($row['work_center']);
//        $obj->center_name = $get_work_cen->center_name;
        return $obj;
    }

    //All user info sorted by id
    public function staff_p($id)
    {
        $query = "select * from staff_position where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->position_name = $row['position_name'];
        return $obj;
    }

    //All user info sorted by id
    public function staff_dpt($id)
    {
        $query = "select * from department where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->dpt = $row['dpt'];
        return $obj;
    }

    public function lite_plans($id)
    {
        $query = "select * from repayment where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->principal = $row['principal'];
        $obj->interest = $row['interest'];
        $obj->due_date = $row['due_date'];
        $obj->interest_paid = $row['interest_paid'];
        $obj->principal_paid = $row['principal_paid'];
        $obj->interest_paid_date = $row['interest_paid_date'];
        $obj->principal_paid_date = $row['principal_paid_date'];
        $obj->loan_id = $row['loan_id'];
        $obj->status = $row['status'];
        $obj->cheque_amount = $row['cheque_amount'];
        $obj->bank_id = $row['bank_id'];
        return $obj;
    }

    //All user info sorted by id
    public function edit_staffs($id)
    {
        $query = "select * from staffs_accounts where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->fullname = $row['fullname'];
        $obj->position = $row['postion'];
        $obj->department = $row['department'];
        $obj->email = $row['email'];
        $obj->phone = $row['phone'];
        $obj->address = $row['address'];
        $obj->gender = $row['gender'];
        $obj->password = $row['password'];

        if ($obj->position == 0) {
            $obj->position_name = 'Unassigned';
        } else {
            $get_positons = $this->staff_p($row['postion']);
            $obj->position_name = $get_positons->position_name;
        }

        if ($obj->department == 0) {
            $obj->dpt = 'Unassigned';
        } else {
            $get_dpt = $this->staff_dpt($row['department']);
            $obj->dpt = $get_dpt->dpt;
        }
        return $obj;
    }


    //All user info sorted by id
    public function statt($id)
    {
        if (isset($id)) {
            $query = "select * from staffs_accounts where id='$id'";
        }
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->fullname = $row['fullname'];
        return $obj;
    }

    public function work_center()
    {
        $query = "select * from work_center where status=0";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->center_name = $row['center_name'];
            $obj->center_code = $row['center_code'];
            $obj->date_created = $row['date_created'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function expenses()
    {
        $query = "select * from expenses order by expenese_name asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->expenese_name = $row['expenese_name'];
            $obj->date_created = $row['cr_dated'];
            $obj->status = $row['status'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function expenses_data_pl($s, $e)
    {
        $query = "select type,cr,dr,date_added,description,account,balance,amount,id, sum(dr) as tal from expenses_data WHERE status='0' and rev!=1 and date_added >= '$s' and date_added <= '$e' and auto_transaction='1' and type not in (101205,30062,30031,30032,30030,30072,30080,101208,50107,101189,101193,50109,50114,101187,50110,101216,101209) group by type";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->date_added = $row['date_added'];
            $obj->description = $row['description'];
            $obj->amount = $row['amount'];
            $obj->type = $row['type'];
            $obj->cr = $row['cr'];
            $obj->tal = $row['tal'];
            $obj->account = $row['account'];
            $obj->dr = $row['dr'];
            $obj->balance = $row['balance'];

            if ($obj->type == 0) {
                $obj->expenese_name = 'unset';
            } else {
                $hod_info = $this->get_expenses($row['type']);
                $obj->expenese_name = $hod_info->expenese_name;
            }

            if ($obj->account == 0) {
                $obj->account_name = 'unset';
            } else {
                $hod_info = $this->despense_account($row['account']);
                $obj->account_name = $hod_info->account_name;
            }


            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function expenses_data_s()
    {
        $query = "select * from expenses_data where status=0";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->date_added = $row['date_added'];
            $obj->description = $row['description'];
            $obj->amount = $row['amount'];
            $obj->type = $row['type'];
            $obj->cr = $row['cr'];
            $obj->account = $row['account'];
            $obj->dr = $row['dr'];
            $obj->balance = $row['balance'];
            $obj->dcode = $row['dcode'];
            $obj->types = $row['types'];
            $obj->bank_id = $row['bank_id'];
            $obj->rev = $row['rev'];

            $hod_info = $this->get_expenses($row['type']);
            $obj->expenese_name = $hod_info->expenese_name;

            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function res_point($s, $e)
    {
        $query = "SELECT SUM(amount) AS principal_paid FROM expenses_data and date_added >= '$s' and date_added <= '$e')";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;
    }

    public function report_xx($s, $e)
    {

        $query = "SELECT SUM(cr) AS principal_paid FROM expenses_data where date_added >= '$s' and date_added <= '$e'";

        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;
    }

    public function report_xxcc($s, $e)
    {
        $query = "SELECT SUM(dr) AS principal_paiddr FROM expenses_data where date_added >= '$s' and date_added <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paiddr'];
        $user_list[] = $obj;
        return $obj;
    }

    public function report_xxx($s, $e, $rtype)
    {
        $query = "SELECT SUM(cr) AS principal_paid FROM expenses_data where type='$rtype' and date_added >= '$s' and date_added <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;
    }

    public function report_xxxdr($s, $e, $rtype)
    {
        $query = "SELECT SUM(dr) AS principal_paiddr FROM expenses_data where type='$rtype' and date_added >= '$s' and date_added <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paiddr'];
        $user_list[] = $obj;
        return $obj;
    }

    public function expenses_data_ses($rtype, $s, $e)
    {
        $query = "SELECT * FROM `expenses_data` WHERE  status='0'and type='$rtype' and date_added >= '$s' and date_added <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->date_added = $row['date_added'];
            $obj->description = $row['description'];
            $obj->amount = $row['cr'];
            $obj->dr = $row['dr'];
            $obj->type = $row['type'];
            $obj->by_user = $row['by_user'];

            if ($obj->type == 0) {
                $obj->expenese_name = 'Null';
            } else {
                $hod_info = $this->get_expenses($row['type']);
                $obj->expenese_name = $hod_info->expenese_name;
            }
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function expenses_data_se($rtype, $s, $e)
    {
        $query = "SELECT * FROM `expenses_data` WHERE  status='0' and date_added >= '$s' and date_added <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->date_added = $row['date_added'];
            $obj->description = $row['description'];
            $obj->cr = $row['cr'];
            $obj->dr = $row['dr'];
            $obj->type = $row['type'];
            $obj->by_user = $row['by_user'];

            if ($obj->type == 0) {
                $obj->expenese_name = 'Null';
            } else {
                $hod_info = $this->get_expenses($row['type']);
                $obj->expenese_name = $hod_info->expenese_name;
            }
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function banks()
    {
        $query = "SELECT * FROM `banks` where status=0";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->bank_name = $row['bank_name'];
            $obj->account_no = $row['account_no'];
            $obj->bank_address = $row['bank_address'];
            $obj->date_created = $row['date_created'];
            $obj->bal = $row['bal'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function ex()
    {
        $query = "SELECT * FROM `despense_account` where status=0";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->bank_name = $row['account_name'];
            $obj->balance = $row['balance'];
            $obj->date_created = $row['date_created'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function account_types()
    {
        $query = "SELECT * FROM `trial_balance_cats` where status=0";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->cats = $row['cats'];
            $obj->description = $row['description'];
            $obj->date_added = $row['date_added'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function departments()
    {
        $query = "SELECT * FROM `department` where status=0";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->cats = $row['dpt'];
            $obj->date_added = $row['dated_added'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function interestx()
    {
        $query = "SELECT * FROM `interest` where status=0";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->loans = $row['loans'];
            $obj->amount = $row['amount'];
            $obj->date_added = $row['dated_cr'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function staff_position()
    {
        $query = "select * from staff_position";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->position_name = $row['position_name'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function staff_department_x()
    {
        $query = "select * from department";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->dpt = $row['dpt'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    //sum cr for vt
    public function cr_person($s, $e, $user_id)
    {
        $query = "SELECT SUM(cr) AS person_cr FROM day_reports where trans_date >= '$s' and trans_date <= '$e' and staff_id='$user_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['person_cr'];
        $user_list[] = $obj;
        return $obj;

    }

    //sum cr for vt
    public function dr_person($s, $e, $user_id)
    {
        $query = "SELECT SUM(dr) AS person_dr FROM day_reports where trans_date >= '$s' and trans_date <= '$e' and staff_id='$user_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['person_dr'];
        $user_list[] = $obj;
        return $obj;
    }


    //vt rp
    public function rt_rp($s, $e, $user_id)
    {
//        $query = "select * from day_reports where staff_id='$user_id' and (cast(trans_date as date) BETWEEN '$s' AND
//'$e')";

        $query = "select * from day_reports where staff_id='$user_id' and trans_date >= '$s' and trans_date <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->balance = $row['balance'];
            $obj->trans_date = $row['trans_date'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //cash acc rp
    public function cash_reportsx($s, $e)
    {
        $query = "select * from cash_report where date_cr >= '$s' and date_cr <= '$e' and auto_transaction='1' order by id asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    //cash acc rp
    public function cash_reportsx_proved($s, $e)
    {
        $query = "select * from cash_report where date_cr >= '$s' and date_cr <= '$e' and auto_transaction='1' order by id asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //cash acc rp
    public function cash_bf($s, $e)
    {
        $query = "select * from cash_report where date_cr >= '$s' and date_cr <= '$e' order by date_cr desc limit 1";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function vt_bf($s, $e)
    {
        $query = "select * from vault_report where date_cr >= '$s' and date_cr <= '$e' order by id desc limit 1";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function opening_bal($e, $s, $check_month)
    {
        $query = "select * from cash_report where date_cr<'$s' order by id desc limit 1";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function opening_balsc($s)
    {
        $query = "select * from cash_report where date_cr<'$s' order by date_cr desc limit 1";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function opening_bank_statement($s, $rtype)
    {
        $query = "select * from bank_statement where date_cr<'$s' and bank_id=$rtype and auto_transaction='1' order by date_cr desc limit 1";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function opening_vault_report($s)
    {
        $query = "select * from vault_report where date_cr <'$s' order by id desc limit 1";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    //cash acc rp
    public function banks_reportsx($s, $e)
    {
        $query = "select * from bank_statement where date_cr >= '$s' and date_cr <= '$e' order  by date_cr asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->balance = $row['balance'];
            $obj->date_cr = $row['date_cr'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //bank auto
    public function banks_autos()
    {
        $query = "select * from bank_statement where  auto_transaction='0' order by id asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->bank_id = $row['bank_id'];
            $obj->trans_types = $row['trans_types'];
            $obj->balance = $row['balance'];
            $obj->dcode = $row['dcode'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function cash_autos()
    {
        $query = "select * from cash_report where  auto_transaction='0' and approved_by='cash' order by id asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->trans_types = $row['trans_types'];
            $obj->balance = $row['balance'];
            $obj->dcode = $row['dcode'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function suspense_autos()
    {
        $query = "select * from despense_account_history where  auto_transaction='0' and approved_by='suspense' order by id asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['cr_date'];
            $obj->trans_types = $row['trans_types'];
            $obj->balance = $row['balance'];
            $obj->dcode = $row['dcode'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //cash acc rp
    public function banks_report_rc($rtype, $s, $e)
    {
        $query = "select * from bank_statement where date_cr >= '$s' and date_cr <= '$e' and bank_id='$rtype' and auto_transaction='1' order by id asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    public function banks_proved($s, $e)
    {
        $query = "select * from bank_statement where date_cr >= '$s' and date_cr <= '$e' and auto_transaction='1' order by id asc";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->date_cr = $row['date_cr'];
            $obj->balance = $row['balance'];
            $user_list[] = $obj;
        }
        return $user_list;
    }

    //suspense acc rp
    public function despense_account_history($s, $e)
    {
        $query = "select * from despense_account_history where cr_date >= '$s' and cr_date <= '$e' and auto_transaction='1'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->balance = $row['balance'];
            $obj->cr_date = $row['cr_date'];
            $user_list[] = $obj;
        }
        return $user_list;
    }  //suspense acc rp

    public function despense_account_history_proved($s, $e)
    {
        $query = "select * from despense_account_history where cr_date >= '$s' and cr_date <= '$e' and auto_transaction='1'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['description'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->balance = $row['balance'];
            $obj->cr_date = $row['cr_date'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function customer_account_history($s, $e)
    {
        $query = "select * from customer_account where created_date >= '$s' and created_date <= '$e'";
        $qx = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($qx)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->description = $row['descriptions'];
            $obj->dr = $row['dr'];
            $obj->cr = $row['cr'];
            $obj->balance = $row['bal'];
            $obj->cr_date = $row['created_date'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function delete_staff_n($uid)
    {
        $query = "update staffs_accounts set status='0' where id='$uid'";
        return $this->runner($query);
    }


    public function bd_deths($sid)
    {
        $query = "update loans set bad_debt='1' where id='$sid'";
        return $this->runner($query);
    }


    public function update_exxx($dc, $cat, $amount, $cid)
    {
        $query = "update expenses_data set description='$dc', amount='$amount', type='$cat' where id='$cid'";
        return $this->runner($query);
    }

    public function mode_banks($id, $datec, $dr, $cr, $balance, $description)
    {
        $query = "update bank_statement set dr='$dr', cr='$cr',balance='$balance',description='$description' where id='$id'";
        return $this->runner($query);
    }


//    public function mode_banks_cash_acc($id,$datec,$dr,$cr,$cv,$balance,$description)
//    {
//          $query ="update cash_report set balance='$cv' where id='$id'";
//        return $this->runner($query);
// }
    public function mode_banks_cash_acc($id, $datec, $dr, $cr, $balance, $description)
    {
        $query = "update cash_report set dr='$dr', cr='$cr',balance='$balance',description='$description' where id='$id'";
        return $this->runner($query);
    }


    public function mode_banks_suspense($id, $datec, $dr, $cr, $balance, $description)
    {
        $query = "update despense_account_history set dr='$dr', cr='$cr',balance='$balance',description='$description' where id='$id'";
        return $this->runner($query);
    }


    public function delete_loan_n($uid)
    {
        $query = "update loans set status='1' where id='$uid'";
        return $this->runner($query);
    }

    public function update_loans_cus($cus_bankid, $bankid, $surety_address, $surety_dpt, $surety_phone, $surety_name, $rate, $loan_type, $due_date, $amount, $loan_date, $client)
    {
        $query = "update loans set bank_id='$bankid',cus_bankid='$cus_bankid', loan_date='$loan_date',loan_amount='$amount',Due_date='$due_date',loan_type='$loan_type',rate='$rate',surety_name='$surety_name',surety_work_address='$surety_address',surety_phone='$surety_phone',surety_dpt='$surety_dpt' where id='$client'";
        return $this->runner($query);
    }

    public function delete_loanpans($uid)
    {
        $query = "update repayment set status='1' where id='$uid'";
        return $this->runner($query);
    }

    public function ban_staffs($uid)
    {
        $query = "update staffs_accounts set ban='1' where id='$uid'";
        return $this->runner($query);
    }

    public function delete_customers($uid)
    {
        $query = "update customer set status='0' where id='$uid'";
        return $this->runner($query);
    }

    public function delete_wc($uid)
    {
        $query = "update work_center set status='1' where id='$uid'";
        return $this->runner($query);
    }

    public function delete_expense_cxat($uid)
    {
        $query = "update expenses set status='1' where id='$uid'";
        return $this->runner($query);
    }

    public function expenses_data($uid)
    {
        $query = "delete from expenses_data where dcode='$uid'";
        return $this->runner($query);
    }

    public function re_suspense($dcode, $description, $cr, $suspense, $types, $ty)
    {
        $theDate = new DateTime('Y-m-d H:i:s');
        $get_date = $theDate->format('Y-m-d H:i:s');

        $query = "INSERT INTO `expenses_data` (`id`, `date_added`, `description`, `type`, `account`, `status`,`cr`,`balance`,`by_user`,`dcode`,`types`,`bank_id`,`rev`) VALUES (NULL, '$get_date', '$description', '$ty', '0', '0', '$cr','$suspense','0','$dcode','2','0','1')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function rev_cash($dcode, $description, $cr, $v, $types, $ty)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `expenses_data` (`id`, `date_added`, `description`, `type`, `account`, `status`,`cr`,`balance`,`by_user`,`dcode`,`types`,`bank_id`,`rev`) VALUES (NULL, '$get_date', '$description', '$ty', '0', '0', '$cr','$v','0','$dcode','1','0','1')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function rev_bank($dcode, $description, $cr, $cv, $types, $ty, $banks_id)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `expenses_data` (`id`, `date_added`, `description`, `type`, `account`, `status`,`cr`,`balance`,`by_user`,`dcode`,`types`,`bank_id`,`rev`) VALUES (NULL, '$get_date', '$description', '$ty', '0', '0', '$cr','$cv','0','$dcode','0','$banks_id','1')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function re_suspense_cash($dcode, $description, $cr, $v, $types, $ty)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `expenses_data` (`id`, `date_added`, `description`, `type`, `account`, `status`,`cr`,`balance`,`by_user`,`dcode`,`types`,`bank_id`,`rev`) VALUES (NULL, '$get_date', '$description', '$ty', '0', '0', '$cr','$v','0','$dcode','0','0','1')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function re_suspense_history($dcode, $description, $cr, $suspense, $types, $ty)
    {
        $theDate = new DateTime('Y-m-d H:i:s');
        $get_date = $theDate->format('Y-m-d H:i:s');

        $query = "INSERT INTO `despense_account_history` (`id`, `description`, `cr`, `dr`, `balance`, `cr_date`, `dcode`) VALUES (NULL, '$description', '', '$cr', '$suspense','$get_date','$dcode')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function expenses_data_rs($dcode)
    {
        $query = "update expenses_data set rev='1' where dcode='$dcode'";
        return $this->runner($query);
    }


    public function despenses_data_rs($dcode, $description)
    {
        $query = "update despense_account_history set rev='1' where dcode='$dcode'";
        return $this->runner($query);
    }

    public function cash_report_rv($dcode)
    {
        $query = "update cash_report set rev='1' where dcode='$dcode'";
        return $this->runner($query);
    }

    public function bank_report_rv($dcode)
    {
        $query = "update bank_statement set rev='1' where dcode='$dcode'";
        return $this->runner($query);
    }


    public function delete_suspensec($uid)
    {
        $query = "delete from despense_account_history where dcode='$uid'";
        return $this->runner($query);
    }

    public function delete_day_rp($uid)
    {
        $query = "delete from day_reports where dcode='$uid'";
        return $this->runner($query);
    }

    public function del_from_cash_account($uid)
    {
        $query = "delete from cash_report where dcode='$uid'";
        return $this->runner($query);
    }

    public function del_from_bank_statement($uid)
    {
        $query = "delete from bank_statement where dcode='$uid'";
        return $this->runner($query);
    }

    public function addfund_cash($v)
    {
        $query = "update cash_account set balance='$v' where id='1'";
        return $this->runner($query);
    }

    public function addfund_cash_vt($v)
    {
        $query = "update vault set balance='$v' where id='1'";
        return $this->runner($query);
    }

    public function approveds_volt($volt, $decode)
    {
        $query = "update vault set balance='$volt' where id='1'";
        return $this->runner($query);
    }

    public function approveds_volt_history($volt, $decode)
    {
        $query1 = "update vault_report set balance='$volt',auto_transaction='1' where decode='$decode'";
        return $this->runner($query1);
    }

    public function approveds_cash_history($new_cash, $decode)
    {
        $query1 = "update cash_report set balance='$new_cash',auto_transaction='1' where dcode='$decode'";
        return $this->runner($query1);
    }

    public function despense_history_approved($new_suspense, $decode)
    {
        $query1 = "update despense_account_history set balance='$new_suspense',auto_transaction='1' where dcode='$decode'";
        return $this->runner($query1);
    }

    public function expenses_data_approved($bank_balance, $decode)
    {
        $query1 = "update expenses_data set balance='$bank_balance',auto_transaction='1' where dcode='$decode'";
        return $this->runner($query1);
    }

    public function staff_report($bank_balance, $decode)
    {
        $query1 = "update day_reports set auto_transaction='1',balance='$bank_balance' where dcode='$decode'";
        return $this->runner($query1);
    }

    public function add_funds_suspense($v)
    {
        $query = "update despense_account set balance='$v' where id='1'";
        return $this->runner($query);
    }


    public function debit_cash_account($cv)
    {
        $query = "update cash_account set balance='$cv' where id='1'";
        return $this->runner($query);
    }

    public function dr_banks($bank_balance, $banks_id)
    {
        $query = "update banks set bal='$bank_balance' where id='$banks_id'";
        return $this->runner($query);
    }

    public function approved_banks($bank_balance, $banks_id)
    {
        $query1 = "update banks set bal='$bank_balance' where id='$banks_id'";
        return $this->runner($query1);
    }

    public function approved_banks_statement($bank_balance, $banks_id, $decode)
    {
        $query = "update bank_statement set balance='$bank_balance',auto_transaction='1' where dcode='$decode' and bank_id='$banks_id'";
        return $this->runner($query);
    }

    public function dr_cashvt($cv)
    {
        $query = "update vault set balance='$cv' where id='1'";
        return $this->runner($query);
    }

    public function dr_suspense($cv)
    {
        $query = "update despense_account set balance='$cv' where id='1'";
        return $this->runner($query);
    }

    public function new_acc_bal($v, $acc)
    {
        $query = "update despense_account set balance='$v' where id='$acc'";
        return $this->runner($query);
    }


    public function add_rc($cr, $bal, $acc, $v)
    {
        $query = "INSERT INTO `despense_account_history` (`id`, `description`, `depense_id`, `cr`, `dr`, `balance`,`cancel_transaction`) VALUES (NULL, 'Cancelled Transaction', '$acc', '0', '$cr', '$v', 'yes');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function delete_bank($uid)
    {
        $query = "update banks set status='1' where id='$uid'";
        return $this->runner($query);
    }


    //delete bank pending transaction
    public function approved_bank_del($decode, $bid)
    {
        $query = "delete from bank_statement where id='$bid'";
        return $this->runner($query);
    }

    public function approved_bank_del_despense($decode, $bid)
    {
        $query = "delete from despense_account_history where dcode='$decode'";
        return $this->runner($query);
    }

    public function approved_bank_del_expenses_data($decode, $bid)
    {
        $query2 = "delete from expenses_data where dcode='$decode'";
        return $this->runner($query2);
    }

    public function approved_bank_del_cash_report($decode, $bid)
    {
        $query3 = "delete from cash_report where dcode='$decode'";
        return $this->runner($query3);
    }

    public function approved_bank_del_vault_report($decode, $bid)
    {
        $query4 = "delete from vault_report where decode='$decode'";
        return $this->runner($query4);
    }


    public function delete_bank_statement($uid)
    {
        $query = "delete from bank_statement where id='$uid'";
        return $this->runner($query);
    }

    public function delete_depenses($uid)
    {
        $query = "update despense_account set status='1' where id='$uid'";
        return $this->runner($query);
    }

    public function delete_trial_balance_cats($uid)
    {
        $query = "update trial_balance_cats set status='1' where id='$uid'";
        return $this->runner($query);
    }

    public function delete_dptsx($uid)
    {
        $query = "update department set status='1' where id='$uid'";
        return $this->runner($query);
    }

    public function delete_interests($uid)
    {
        $query = "update interest set status='1' where id='$uid'";
        return $this->runner($query);
    }

    public function change_work_center($wc, $work_center, $cus_id)
    {
        $query = "update work_center set center_name='$wc',center_code='$work_center' where id='$cus_id'";
        return $this->runner($query);
    }

    public function change_info($wc, $cus_id, $status)
    {
        $query = "update expenses set expenese_name='$wc',status='$status' where id='$cus_id'";
        return $this->runner($query);
    }

    public function update_banks($bn, $acn, $bads, $cus_id, $bals)
    {
        $query = "update banks set bank_name='$bn',account_no='$acn', bank_address='$bads',bal='$bals'  where id='$cus_id'";
        return $this->runner($query);
    }

    public function update_dpts($cats, $cus_id)
    {
        $query = "update department set dpt='$cats' where id='$cus_id'";
        return $this->runner($query);
    }

    //=======================================
    public function update_pay_principal($uid)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "update repayment set principal_paid='paid', principal_paid_date='$get_date', interest_paid='paid', interest_paid_date='$get_date' where id='$uid'";
        return $this->runner($query);
    }

    //=======================================
    public function update__principal($uid)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "update repayment set principal_paid='paid', principal_paid_date='$get_date' where id='$uid'";
        return $this->runner($query);
    }

    public function update_pay_ie($uid)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "update repayment set interest_paid='paid', interest_paid_date='$get_date' where id='$uid'";
        return $this->runner($query);
    }

    public function x_interest($uid)
    {
        $query = "update repayment set interest_paid='unpaid', interest_paid_date='' where id='$uid'";
        return $this->runner($query);
    }

    public function x_principal($uid)
    {
        $query = "update repayment set principal_paid='unpaid', principal_paid_date='',interest_paid='unpaid',interest_paid_date='' where id='$uid'";
        return $this->runner($query);
    }

    public function update_pay_interest($uid)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "update repayment set interest_paid='paid', interest_paid_date='$get_date' where id='$uid'";
        return $this->runner($query);
    }


    public function update_pay_laons($uid)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "update repayment set principal_paid='paid', principal_paid_date='$get_date' where id='$uid'";
        return $this->runner($query);
    }

    public function update_loanrepayments($loan_id, $principal, $interest, $due_date, $camount, $cus_bankid)
    {
        $query = "update repayment set principal='$principal',interest='$interest', due_date='$due_date',cheque_amount='$camount',bank_id='$cus_bankid' where id='$loan_id'";
        return $this->runner($query);
    }

    public function update_loans($cats, $cus_id)
    {
        $query = "update interest set loans='$cats' where id='$cus_id'";
        return $this->runner($query);
    }

    public function update_acount_ifo($cats, $dsc, $cus_id)
    {
        $query = "update trial_balance_cats set cats='$cats',description='$dsc' where id='$cus_id'";
        return $this->runner($query);
    }

    public function update_staffss($fullname, $position, $department, $email, $address, $phone, $gender, $staff_id, $pwd)
    {
        $query = "update staffs_accounts set fullname='$fullname',postion='$position', department='$department',email='$email', address='$address', phone='$phone', gender='$gender',ban='0',password='$pwd' where id='$staff_id'";
        return $this->runner($query);
    }

    public function update_cus_info($tittle, $c_name, $sex, $work_center, $dpt, $work_address, $home_address, $cphone, $cemail, $cus_id)
    {
        $query = "UPDATE `customer` SET `tittle`='$tittle',`c_name`='$c_name',`sex`='$sex',`work_center`='$work_center',`dpt`='$dpt',`work_address`='$work_address',`home_address`='$home_address',`cphone`='$cphone',`cemail`='$cemail' WHERE id='$cus_id'";
        return $this->runner($query);
    }


    //count number of client in hospital
    public function count_staffs()
    {
        $query = "select * from staffs_accounts";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of client in hospital
    public function sus_pending()
    {
        $query = "select * from despense_account_history where auto_transaction=0";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function cash_pending()
    {
        $query = "select * from cash_report where auto_transaction=0";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function count_debt()
    {
        $query = "select * from loans where bad_debt='1'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    public function banks_pending()
    {
        $query = "select * from bank_statement where auto_transaction=0";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }

    //count number of client in hospital active
    public function customer()
    {
        $query = "select * from customer";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    public function get_valuts()
    {
        $query = "select * from vault where id='1'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->balance = $row['balance'];
        $obj->cr = $row['cr'];
        $obj->dr = $row['dr'];

        return $obj;
    }

    public function get_sus()
    {
        $query = "select * from despense_account where id='1'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->balance = $row['balance'];


        return $obj;
    }

    public function get_cahs_acc()
    {
        $query = "select * from cash_account where id='1'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->balance = $row['balance'];
        $obj->cr = $row['cr'];
        $obj->dr = $row['dr'];

        return $obj;
    }


    //All user info sorted by id
    public function get_user_info($id)
    {
        $query = "select * from staffs_accounts where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->user_id = $row['id'];
        $obj->email = $row['email'];
        $obj->fullname = $row['fullname'];
        return $obj;
    }


    public function get_staffs_info($id)
    {
        $query = "select * from staffs where id='$id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->fn = $row['fn'];
        $obj->ln = $row['ln'];

        return $obj;
    }


    // teacher list in school
    public function bank_infos($get_user_id)
    {
        $query = "SELECT * FROM banks where id='$get_user_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->id = $row['id'];
        $obj->bank_name = $row['bank_name'];
        $obj->bal = $row['bal'];
        $user_list[] = $obj;
        return $obj;
    }


    public function de_statement($uid, $status)
    {
        if ($status == 'i') {
            $query = "delete from bank_statement where loan_id='$uid' and repay_id='i'";
        } elseif ($status == 'p') {
            $query = "delete from bank_statement where loan_id='$uid' and repay_id='p'";
        } elseif ($status == 'c') {
            $query = "delete from bank_statement where loan_id='$uid'";
        }
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function de_s($uid, $status)
    {
        $query = "delete from bank_statement where loan_id='$uid'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function bank_statement_rp($uid, $loan_id, $amount, $cus, $bank, $status, $nbal, $bank_name, $avlc_name, $dcode)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`,`balance`,`description`,`dcode`) VALUES (NULL,'$uid','$status','0','$amount','$get_date','$bank','$cus','$nbal','Loan Repayment from $avlc_name','$dcode')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function bank_state($amount, $banks_id, $status, $cv, $banks_name, $description, $decode, $acc_types)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`,`balance`,`description`,`trans_types`,`auto_transaction`,`dcode`,`approved_by`) VALUES (NULL,'0','$status','$amount','0','$get_date','$banks_id','0','$cv','$description / from $banks_name','$acc_types','0','$decode','bank')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //vault Reports
    public function vault_history($amount, $v, $banks_name, $description, $decode)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `vault_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`, `trans_types`, `auto_transaction`, `decode`, `approved_by`) VALUES (NULL, '$description / From $banks_name', NULL, '$amount', NULL, '$get_date', '$v','5','0','$decode','bank')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //vault Reports
    public function vault_history_refunds($amount, $vot_bal, $bank_names, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `vault_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, '$de / Transferred to  $bank_names', 'NULL', '0', '$amount', '$get_date', '$vot_bal')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //vault Reports vault to cash-vot
    public function cash_to_vot($amount, $cv, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `vault_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, '$de', NULL, '$amount', '0', '$get_date', '$cv')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //vault Reports vault to cash
    public function vault_historyx($amount, $cv, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `vault_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, '$de', NULL, '0', '$amount', '$get_date', '$cv')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash
    public function cashreports($amount, $v, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, '$de ', NULL, '$amount', '0', '$get_date', '$v')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //cash Reports vault to cash
    public function bank_cash_rp($amount, $v, $banks_name, $description, $decode)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`, `trans_types`, `auto_transaction`,`dcode`,`approved_by`) VALUES (NULL, '$description / from $banks_name', NULL, '$amount', '0', '$get_date', '$v','2','0','$decode','bank')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash
    public function rev_cash_report($dcode, $description, $cr, $cv, $types, $ty)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, '$description', NULL, '$cr', '0', '$get_date', '$cv')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash
    public function rev_bank_report($dcode, $description, $cr, $cv, $types, $ty, $banks_id)
    {
        $get_date = date('Y-m-d H:i:s');
        $cdate = date("Y-m-d H:i:s", strtotime($get_date));
        //to
        $query1 = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`, `description`, `balance`, `dcode`) VALUES (NULL, NULL, NULL, '0', '$cr', '$cdate', '$banks_id', NULL, '$description','$cv', '$dcode');";
        $run_qry = $this->run_query($query1);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //cash Reports vault to cash
    public function cashreportscc($amount, $cash_bal, $bank_names, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, '$de / Cash acc to $bank_names', NULL, '0', '$amount', '$get_date', '$cash_bal')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash
    public function suspense_cash($amount, $v)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, 'Transferred from Suspense Account to Cash Account ', NULL, '$amount', '0', '$get_date', '$v')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash dr
    public function cash_vot_rp($amount, $cv, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, '$de', NULL, '0', '$amount', '$get_date', '$cv')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash dr
    public function cashreportdrs($amount, $cv, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `cash_report` (`id`, `description`, `transaction_id`, `dr`, `cr`, `date_cr`, `balance`) VALUES (NULL, '$de', NULL, '0', '$amount', '$get_date', '$cv')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash dr
    public function dr_suspenesesx($amount, $suspense_bal, $bank_names, $de, $vot_balh, $tdates)
    {
        $get_date = $tdates;
        $query = "INSERT INTO `despense_account_history` (`id`, `description`, `cr`, `dr`, `balance`, `cr_date`) VALUES (NULL, '$de', '$amount', '0', '$vot_balh','$tdates')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash dr
    public function suspense_to_customer($amount, $suspense_bal, $bank_names, $de, $vot_balh, $tdate, $decode)
    {
        $get_date = $tdate;
        $query = "INSERT INTO `despense_account_history` (`id`, `description`, `cr`, `dr`, `balance`, `cr_date`, `dcode`) VALUES (NULL, '$de', '$amount', '0', '$vot_balh', '$get_date','$decode')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash dr
    public function refund_to_customer($amount, $bank_bal, $de, $tdate, $decode, $cus_id, $bank_id)
    {
        $get_date = $tdate;
        $query1 = "INSERT INTO `customer_account` (`id`, `customer_id`, `cr`, `dr`, `created_date`, `descriptions`, `bal`, `dcode`) VALUES (NULL, '$cus_id', NULL, '$amount', '$tdate', '$de', '$bank_bal', '$decode');";
        $run_qry1 = $this->run_query($query1);
        if ($run_qry1 == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash dr
    public function refund_to_customers_banks($amount, $bank_bal, $de, $tdate, $decode, $cus_id, $bank_id)
    {
        $get_date = $tdate;
        $query = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`, `description`, `balance`, `dcode`, `rev`) VALUES (NULL, '0', '0', '$amount', NULL, '$get_date', '$bank_id', '$cus_id', '$de', '$bank_bal', '$decode', '')";
        $run_qry = $this->run_query($query);
        if ($query == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    //cash Reports vault to cash dr
    public function bank_suspense($amount, $v, $banks_name, $description, $decode)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `despense_account_history` (`id`, `description`, `cr`, `dr`, `balance`, `cr_date`, `dcode`,`auto_transaction`,`approved_by`) VALUES (NULL, '$description', '0', '$amount', '$v', '$get_date','$decode','0','bank')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function funds_to_customer($amount, $suspense_bal, $cus_id, $bank_names, $de, $vot_balh, $tdate, $decode)
    {
        $get_date = $tdate;
        $query = "INSERT INTO `customer_account` (`id`, `customer_id`, `cr`, `dr`, `created_date`, `descriptions`, `bal`, `dcode`) VALUES (NULL, '$cus_id', '0', '$amount', '$get_date', '$de', '$suspense_bal','$decode');";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function add_history_suspenses($amount, $new_account, $dc, $cdate, $cat, $user_id)
    {
        $dcode = rand(1234567, 1234567890);
        $get_date = date('Y-m-d H:i:s');
        //suspense history
        $query = "INSERT INTO `despense_account_history` (`id`, `description`, `cr`, `dr`, `balance`, `cr_date`, `dcode`, `approved_by`, `auto_transaction`) VALUES (NULL, '$dc', '$amount', '0', '$new_account','$cdate','$dcode','suspense','0')";

        //expenses history
        $query1 = "INSERT INTO `expenses_data` (`id`, `date_added`, `description`, `type`, `account`, `status`, `dr`, `balance`, `dcode`, `types`, `approved_by`, `auto_transaction`) VALUES (NULL, '$cdate', '$dc', '$cat', '0', '0', '$amount','$new_account','$dcode','2','suspense','0');";


        //cash day report
        $query3 = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `balance`, `trans_date`, `status`, `dcode`) VALUES (NULL, '$dc from expenses acc', '$user_id', '$amount', NULL, '$new_account', '$get_date', NULL, '$dcode');";
        //day expenses reports
        $query4 = "INSERT INTO `day_reports` (`id`, `description`, `staff_id`, `dr`, `cr`, `balance`, `trans_date`, `status`, `dcode`) VALUES (NULL, '$dc to expenses acc', '$user_id', '0', $amount, '$new_account', '$get_date', NULL, '$dcode');";


        $run_qry = $this->run_query($query);
        $run_qry1 = $this->run_query($query1);
        $run_qry3 = $this->run_query($query3);
        $run_qry4 = $this->run_query($query4);

        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //cash Reports vault to cash dr
    public function dr_suspenese($amount, $v, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `despense_account_history` (`id`, `description`, `cr`, `dr`, `balance`, `cr_date`) VALUES (NULL, '$de', NULL, '$amount', '$v', '$get_date')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function cr_suspenese($amount, $v)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `despense_account_history` (`id`, `description`, `cr`, `dr`, `balance`, `cr_date`) VALUES (NULL, 'Transferred from Suspense acc to cash account', '$amount', '0', '$v', current_timestamp());";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //bal account to bank to vault
    public function bank_statem($uid, $loan_id, $amount, $cus, $bank, $status, $nbal)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`,`balance`) VALUES (NULL, '$uid', '$status', '0', '$amount', '$get_date', '$bank','$cus','$nbal')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //bal account to bank to vault
    public function bank_refundsc($amount, $bank_bal, $banks_id, $bank_names, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `bank_statement` (`id`, `cr`, `dr`, `date_cr`, `bank_id`,`balance`,`description`) VALUES (NULL, '0', '$amount', '$get_date', '$banks_id', '$bank_bal','$de / cash acc to $bank_names')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //bal account to bank to vault
    public function bank_refundscxx($amount, $bank_bal, $banks_id, $bank_names, $de, $tdates)
    {
        $get_date = $tdates;
        $query = "INSERT INTO `bank_statement` (`id`, `cr`, `dr`, `date_cr`, `bank_id`,`balance`,`description`) VALUES (NULL, '0', '$amount', '$get_date', '$banks_id', '$bank_bal','$de / suspense acc to $bank_names')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //bal account to bank to vault
    public function bank_refunds($amount, $bank_bal, $banks_id, $bank_names, $de)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `bank_statement` (`id`, `cr`, `dr`, `date_cr`, `bank_id`,`balance`,`description`) VALUES (NULL, '0', '$amount', '$get_date', '$banks_id', '$bank_bal','$de /from Vault to $bank_names')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    public function bank_new_loan($amount, $client, $bankid, $status, $nbal)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`, `balance`, `description`) VALUES (NULL, '0', '$status', '$amount', '0', '$get_date', '$bankid','$client','$nbal','New Loan')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function bank_new_loans($amount, $client, $bankid, $status, $nbal, $cname, $rand)
    {
        $get_date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `bank_statement` (`id`, `loan_id`, `repay_id`, `cr`, `dr`, `date_cr`, `bank_id`, `cus_id`, `balance`, `description`, `dcode`) VALUES (NULL, '0', '$status', '$amount', '0', '$get_date', '$bankid','$client','$nbal','$cname / New Loan','$rand')";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


    public function staffs_account($hos_key)
    {
        $query = "SELECT * FROM staffs where host_key='$hos_key'";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fn = $row['fn'];
            $obj->ln = $row['ln'];
            $obj->email = $row['email'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    public function count_staff_per_dpt($class_id)
    {
        $query = "select * from staffs where dpt_id='$class_id'";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    public function db_banks($bankid, $nbal)
    {
        $query = "update banks set bal='$nbal' where id='$bankid'";
        return $this->runner($query);
    }


    public function cash_cr($s, $e)
    {
        echo $query = "SELECT SUM(cr) AS cash_c FROM cash_report where date_cr<'$s'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->cash_c = $row['cash_c'];
        $user_list[] = $obj;
        return $obj;

    }


    public function cummulative($s, $e)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(principal) AS principal_paid FROM repayment where principal_paid='paid' and principal_paid_date >= '$s' and principal_paid_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;

    }

    public function cummulative_paid($s, $e)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(principal) AS principal_paid FROM repayment where principal_paid='paid'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;

    }

    public function cummulative_dbt($s, $e)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(loan_amount) AS loan_taken FROM loans where  loan_date >= '$s' and loan_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->loan_taken = $row['loan_taken'];
        $user_list[] = $obj;
        return $obj;

    }

    public function cummulative_loans($s, $e)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(loan_amount) AS loan_taken FROM loans";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->loan_taken = $row['loan_taken'];
        $user_list[] = $obj;
        return $obj;

    }


    public function inteest_dbt($s, $e)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(interest) AS interest_paid FROM repayment where interest_paid='unpaid' and due_date >= '$s' and due_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['interest_paid'];
        $user_list[] = $obj;
        return $obj;

    }

    public function l_interest($s, $e)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(interest) AS interest_paid FROM repayment where interest_paid='paid' and interest_paid_date>= '$s' and interest_paid_date<='$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts_i = $row['interest_paid'];
        $user_list[] = $obj;
        return $obj;

    }


    public function principal_report($s, $e)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(principal) AS principal_paid FROM repayment where principal_paid='paid'  and principal_paid_date >= '$s' and principal_paid_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;
    }

    public function interest_report($s, $e)
    {
        $query = "SELECT SUM(interest) AS principal_paid FROM repayment where interest_paid='paid' and interest_paid_date >= '$s' and interest_paid_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;
    }

//sum cr for vt
    public function cr_vts($s, $e)
    {
        $query = "SELECT SUM(cr) AS principal_paid FROM vault_report where date_cr >= '$s' and date_cr <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;
    }

//sum cr for cash
    public function cr_csah($s, $e)
    {
        $query = "SELECT SUM(cr) AS cash_report FROM cash_report where date_cr >= '$s' and date_cr <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['cash_report'];
        $user_list[] = $obj;
        return $obj;
    }

    //sum cr for cash
    public function cr_bank_acc($s, $e)
    {
        $query = "SELECT SUM(cr) AS bank_statement FROM bank_statement where date_cr >= '$s' and date_cr <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['bank_statement'];
        $user_list[] = $obj;
        return $obj;
    }

    //sum cr for cash
    public function cr_bank_acc_s($rtype, $s, $e)
    {
        $query = "SELECT SUM(cr) AS bank_statement FROM bank_statement where date_cr >= '$s' and date_cr <= '$e' and bank_id='$rtype' and auto_transaction='1'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['bank_statement'];
        $user_list[] = $obj;
        return $obj;
    }

//sum cr for suspense
    public function cr_suspense($s, $e)
    {
        $query = "SELECT SUM(cr) AS despense_account_history FROM despense_account_history where cr_date >= '$s' and cr_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['despense_account_history'];
        $user_list[] = $obj;
        return $obj;
    }


    public function cr_suspense_cus($s, $e)
    {
        $query = "SELECT SUM(cr) AS amounts FROM customer_account where created_date >= '$s' and created_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['amounts'];
        $user_list[] = $obj;
        return $obj;
    }

    //sum dr for vt
    public function cr_vtsxx($s, $e)
    {
        $query = "SELECT SUM(dr) AS principal_x FROM vault_report where date_cr >= '$s' and date_cr <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amountsx = $row['principal_x'];
        $user_list[] = $obj;
        return $obj;
    }


    //sum dr for cash
    public function cr_vtsxxx($s, $e)
    {
        $query = "SELECT SUM(dr) AS principal_x FROM cash_report where date_cr >= '$s' and date_cr <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amountsx = $row['principal_x'];
        $user_list[] = $obj;
        return $obj;
    }


    //sum dr for cash
    public function dr_bank_acc($s, $e)
    {
        $query = "SELECT SUM(dr) AS bank_statement FROM bank_statement where date_cr >= '$s' and date_cr <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amountsx = $row['bank_statement'];
        $user_list[] = $obj;
        return $obj;

    }


    //sum dr for cash
    public function dr_bank_acc_s($rtype, $s, $e)
    {
        $query = "SELECT SUM(dr) AS bank_statement FROM bank_statement where date_cr >= '$s' and date_cr <= '$e' and bank_id='$rtype' and auto_transaction='1'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amountsx = $row['bank_statement'];
        $user_list[] = $obj;
        return $obj;

    }

    public function dr_suspense_cus($s, $e)
    {
        $query = "SELECT SUM(dr) AS amounts FROM customer_account where created_date >= '$s' and created_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['amounts'];
        $user_list[] = $obj;
        return $obj;
    }


    //sum dr for suspense
    public function suspense_dr($s, $e)
    {
        $query = "SELECT SUM(dr) AS despense_account_history FROM despense_account_history where cr_date >= '$s' and cr_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amountsx = $row['despense_account_history'];
        $user_list[] = $obj;
        return $obj;

    }


    public function seh_amount($rtype, $s, $e)
    {
        $query = "SELECT SUM(cheque_amount) AS cc FROM repayment where status='0' and bank_id='$rtype' and due_date >= '$s' and due_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->ccc = $row['cc'];
        $user_list[] = $obj;
        return $obj;

    }


    public function lc_total($s, $e)
    {
        $query = "SELECT SUM(loan_amount) AS ccc FROM loans where status='0' and loan_date >= '$s' and loan_date <= '$e'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->ccc = $row['ccc'];
        $user_list[] = $obj;
        return $obj;

    }

    public function expen_rs($s, $e)
    {
        $query = "SELECT SUM(dr) AS total_ex FROM expenses_data where status='0' and date_added >= '$s' and date_added <= '$e' and auto_transaction='1' and type not in (101205,30062,30031,30032,30030,30072,30080,101208,50107,101189,101193,50109,50114,101187,50110,101216,101209)";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->total_ex = $row['total_ex'];
        $user_list[] = $obj;
        return $obj;

    }

    public function principal_report_db($c, $lid)
    {
        $query = "SELECT SUM(principal) AS principal_paid FROM repayment where principal_paid='paid' and loan_id='$lid' and customer_id='$c'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->cbal = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;

    }

    public function loanpaid_cus($loan_id)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(principal) AS principal_paid FROM repayment where principal_paid='paid' and loan_id='$loan_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['principal_paid'];
        $user_list[] = $obj;
        return $obj;

    }

    public function loanpaid_interest($loan_id)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(interest) AS interest_paid FROM repayment where interest_paid='paid' and loan_id='$loan_id'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts_in = $row['interest_paid'];
        $user_list[] = $obj;
        return $obj;

    }


    public function month_profit($hos_key, $check_month)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(amount) AS amounts FROM quee_user_test where host_key='$hos_key' and  month(date_added)='$check_month' and payment='paid'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->amounts = $row['amounts'];
        $user_list[] = $obj;
        return $obj;

    }


    public function yearly_profit($hos_key, $check_yearly)
    {
        $get_date = date('Y/M/D');
        $query = "SELECT SUM(amount) AS yearlys FROM quee_user_test where host_key='$hos_key' and  YEAR(date_added)='$check_yearly' and payment='paid'";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->yearlys = $row['yearlys'];
        $user_list[] = $obj;
        return $obj;
    }

    public function getallDate($e)
    {
        $query = "SELECT MONTH('$e') as mdates";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->mdates = $row['mdates'];
        $user_list[] = $obj;
        return $obj;
    }

    public function getallDates()
    {
        $get_date = date('Y/m/d');
        $query = "SELECT MONTH('$get_date') as mdates";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->mdates = $row['mdates'];
        $user_list[] = $obj;
        return $obj;
    }

    public function getallDateyear()
    {
        $get_date = date('Y/m/d');
        $query = "SELECT YEAR('$get_date') as mdates_year";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->mdates_year = $row['mdates_year'];
        $user_list[] = $obj;
        return $obj;

    }

    public function getall_today()
    {
        $get_date = date('Y/m/d');
        $query = "SELECT DAY('$get_date') as todays";
        $row = $this->get_result($this->run_query($query));
        $obj = new stdClass();
        $obj->todays = $row['todays'];
        $user_list[] = $obj;
        return $obj;

    }

    //count number of staff in school
    public function count_staff()
    {
        $query = "select * from staffs";
        $run_query = $this->run_query($query);
        return $this->get_number_of_row($run_query);
    }


    // teacher list in school
    public function staffs_list()
    {
        $query = "SELECT * FROM staffs order by fullname asc";
        $q = $this->run_query($query);
        $user_list = array();
        while ($row = $this->get_result($q)) {
            $obj = new stdClass();
            $obj->id = $row['id'];
            $obj->fullname = $row['fullname'];
            $obj->nationality = $row['nationality'];
            $obj->state = $row['state'];
            $obj->city = $row['city'];
            $obj->qualification = $row['qualification'];
            $obj->gender = $row['gender'];
            $obj->marital = $row['marital'];
            $obj->address = $row['address'];
            $obj->phone = $row['phone'];
            $obj->email = $row['email'];
            $obj->photo_st = $row['photo_st'];
            $user_list[] = $obj;
        }
        return $user_list;
    }


    //update password staff end
    public function update_staff_password($get_user_id, $main_pass)
    {
        $query = "update staffs set password='$main_pass' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //update password student end
    public function update_student_password($get_user_id, $main_pass)
    {
        $query = "update student set password='$main_pass' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //update staff pic
    public function upload_staff_profile_pics($path, $get_user_id)
    {
        $query = "update staffs set photo_st='$path' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }

    //update student pic
    public function upload_student_profile_pics($path, $get_user_id)
    {
        $query = "update student set photo='$path' where id='$get_user_id'";
        $run_qry = $this->run_query($query);
        if ($run_qry == true) {
            return "success";
        } else {
            return "Invalid Command";
        }
    }


}

