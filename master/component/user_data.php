    <?php
    include_once "session.php";
    include_once "controller.php";
    $app = new controller;
    $user_log = $app->checkLogin();
    if ($user_log == "logged") {
        //echo "ok";
    } else {
        echo '<script>window.location.href="./page-login.php";</script>';
    }
    //Get user info
    $userInfo = $app->get_user_data($_SESSION['login_user']);
    $key_grant = $userInfo->key_grant;
    $business_name = $userInfo->business_name;


    $cc = $app->count_pid_products($key_grant);
    $customer = $app->count_cus_($key_grant);
    $category = $app->count_category_($key_grant);
