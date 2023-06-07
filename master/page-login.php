<?php
include_once "component/controller.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-cyan">

<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">

                <div class="card ">
                    <div class="top">
                        <?php

@$email = $app->post_request('email');
@$password = $app->post_request('password');
$login = $app->auth_users($email, $password);
if($login == 'success'){
    $URL = "user_dir.php";
    echo "<script>location.href='$URL'</script>";
}else{
    echo "<br>";
    echo '<div class="alert alert-danger alert-dismissible" role="alert">
<div class="alert-message">
    <strong>Hello there!</strong> The login details is incorrect!
</div>

<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
                        ?>
                    </div>
                    <div class="header">
                        <img src="logo/lentose2.svg.svg" alt="Lucid" style="height: 50px">
                        <p class="lead font-weight-bold">Login to your account</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" method="post">
                            <div class="form-group">
                                <label for="signin-email" class="control-label">Email</label>
                                <input type="email" class="form-control" id="signin-email" name="email" value="edwineke24@gmail.com"
                                       placeholder="Email">
                                <span class="small">Standard call, message, or data rates may apply.
</span>
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label">Password</label>
                                <input type="password" class="form-control" id="signin-password"
                                       value="1" placeholder="Password" name="password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox">
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block font-weight-bold btn-outline" name="auth_user">
                                Login
                            </button>

                            <div class="bottom">
                                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a
                                            href="page-forgot-password.php">Forgot password?</a></span>
                                <span>Don't have an account? <a href="page-register.php">Register</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
