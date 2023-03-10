<?php
include_once "component/user_data.php";
$app = new controller;

$cc = $app->count_pid_products($key_grant);
$customer = $app->count_cus_($key_grant);
$category = $app->count_category_($key_grant);

$cc = $app->count_pid_products($key_grant);
$customer = $app->count_cus_($key_grant);
$category = $app->count_category_($key_grant);

?>
<!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: Dashboard</title>
    <meta name="description" content="Place the meta description text here.">
    <meta name=”robots” content="index, follow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">

    <style>
        @media screen and (max-width: 320px) {
            #cc {
                visibility: hidden;
                clear: both;
                float: left;
                margin: 10px auto 5px 20px;
                width: 28%;
                display: none;
            }
        }
    </style>
</head>
<body class="theme-blue">
<!--<div class="page-loader-wrapper">-->
<!--    <div class="loader">-->
<!--        <div class="m-t-30"><img src="../logo/lentose1.png" height="150" alt="Lentose"></div>-->
<!--        <p>Please wait...</p>-->
<!--    </div>-->
<!--</div>-->
<div id="wrapper">
    <?php
    require_once 'component/header.php';
    require_once 'component/sidebar.php';
    ?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Welcome back, <?=$app->stringFormat($business_name, 12);?></h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">You have <?php
                                echo $cc->total_prod; ?>  Item and <?php  echo $customer->total_customer; ?> new customers.</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px"
                                 data-line-Width="1" data-line-Color="#00c5dc" data-fill-Color="transparent">
                                3,5,1,6,5,4,8,3
                            </div>
                            <span>Visitors</span>
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px"
                                 data-line-Width="1" data-line-Color="#f4516c" data-fill-Color="transparent">
                                4,6,3,2,5,6,5,4
                            </div>
                            <span>Visits</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3><?php
                                echo $cc->total_prod; ?> <i class="icon-basket-loaded float-right"></i></h3>
                            <span>Products</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-blue m-b-0">
                            <div class="progress-bar" data-transitiongoal="64"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3> <?php  echo $customer->total_customer; ?> <i class="icon-user-follow float-right"></i></h3>
                            <span>My Customers</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-purple m-b-0">
                            <div class="progress-bar" data-transitiongoal="67"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3><?php echo $category->total_category; ?> <i
                                        class="fa fa-dollar float-right"></i></h3>
                            <span>Item Categories</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-yellow m-b-0">
                            <div class="progress-bar" data-transitiongoal="89"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card overflowhidden">
                        <div class="body">
                            <h3>0 <i class=" icon-heart float-right"></i></h3>
                            <span>My Stores</span>
                        </div>
                        <div class="progress progress-xs progress-transparent custom-color-green m-b-0">
                            <div class="progress-bar" data-transitiongoal="68"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Annual Report <small>Description text here...</small></h2>

                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span class="text-muted">Sales Report</span>
                                    <h3 class="text-warning">₦</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span class="text-muted">Annual Revenue </span>
                                    <h3 class="text-info">₦</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span class="text-muted">Total Profit</span>
                                    <h3 class="text-success">₦</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span class="text-muted">Total Loss</span>
                                    <h3 class="text-success">₦</h3>
                                </div>

                            </div>

                            <!--<div id="area_chart" class="graph"></div>-->
                        </div>

                    </div>
                </div>


            </div>
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Recent Transactions</h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th style="width:60px;">#</th>
                                        <th>Name</th>
                                        <th>Item</th>
                                        <th>Address</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="http://via.placeholder.com/60x50" alt="Product img"></td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td><span class="badge badge-success">-</span></td>
                                        <td>-</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
            </div>
        </div>
    </div>
</div>

<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<!--<script src="assets/bundles/jvectormap.bundle.js"></script>-->
<!--<script src="assets/bundles/morrisscripts.bundle.js"></script>-->
<script src="assets/bundles/knob.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/index8.js"></script>
<script>
    const url = 'https://lentose.com/master/user_dir';
    const cacheOptions = {
        headers: {
            'Cache-Control': 'max-age=3600'
        }
    };

    fetch(new Request(url, cacheOptions))
        .then(response => {
            // Handle the response
        })
        .catch(error => {
            console.error(error);
        });
</script>
</body>
</html>
