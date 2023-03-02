<!doctype html>
<html lang="en">
<head>
    <title>Lentose Sign Up</title>
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
                <!-- <div class="top">
                <img src="../assets/images/logo-white.svg" alt="Lucid">
                </div> -->
                <div class="card lit">
                    <div class="header">
                        <img src="logo/lentose2.svg.svg" alt="Lucid" style="height: 47px">
                        <h3>Sign up for a Trial</h3>
                        <!-- <p class="lead">Already have a QuickBooks Online account?</p> -->
                        <span class="helper-text">Already have an account? <a href="page-login.php">Login</a></span>
                    </div>
                    <div class="body">
                        <form class="" id="kt_sign_up_form1" method="post" data-parsley-validate novalidate>
                            <div class="form-group">
                                <label for="signup-email" class="control-label">Email</label>
                                <input type="email" class="form-control" id="signup-email" name="email"
                                       data-parsley-trigger="keyup" placeholder="Your email"
                                       data-parsley-trigger="change" data-parsley-maxlength="125" required>
                            </div>
                            <div class="form-group">
                                <label for="signup-email" class="control-label">First Name</label>
                                <input type="text" class="form-control" name="fn" placeholder="First Name" required
                                       data-parsley-length="[4,30]">
                            </div>
                            <div class="form-group">
                                <label for="signup-email" class="control-label">Last Name</label>
                                <input type="text" class="form-control" name="ln" placeholder="Last Name"
                                       data-parsley-length="[4,30]" required>
                            </div>
                            <div class="form-group">
                                <label for="signup-email" class="control-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="Number"
                                       data-parsley-validation-threshold="1" data-parsley-trigger="keyup"
                                       data-parsley-type="digits" required min="9">
                                <span class="small">Standard call, message, or data rates may apply.
</span>
                            </div>
                            <div class="form-group">
                                <label for="signup-password" class="control-label ">Password</label>
                                <input type="password" class="form-control" name="password" id="signup-password"
                                       data-parsley-length="[8,30]" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="signup-password" class="control-label ">Confirm</label>
                                <input type="password" class="form-control" name="password_again"
                                       data-parsley-length="[8,30]" placeholder="Confirm Password" required>
                            </div>
                            <div class="col-1 col-11">
                                <input type="checkbox" class="check" data-parsley-mincheck="1" required><span
                                        class="checking">I’d like to receive helpful marketing emails and SMS from Lentose Online Simple Start and its partners.</span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block font-weight-bold"
                                    id="reset-btn"><i class="fa fa-lock font-weight-bold"></i> Start Free Trial
                            </button>
                            <div class="bottom">
                            </div>
                        </form>
                        <p style="font-size:12px;">By selecting Start Free Trial, you agree to our<a
                                    href="#page-register.php"> Terms </a> and have read and acknowledge our<a
                                    href="#page-register.php"> Global Privacy Statement</a>.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script src="../assets/vendor/parsleyjs/js/parsley.min.js"></script>
<script src="js/js.js"></script>
