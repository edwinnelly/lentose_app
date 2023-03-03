<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: emp List</title>
    <?php
    require_once 'component/meta_config.php';
    ?>

    <style>
        td.details-control {
            background: url('assets/images/details_open.png') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('assets/images/details_close.png') no-repeat center center;
        }

    </style>
    <!-- Print styles. -->
    <style type="text/css" media="print">

        div#DivIdToPrint {
            display: inline;
        }

    </style>

</head>
<body class="theme-cyan">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../logo/lentose1.png" height="150" alt="Lentose"></div>
        <p>Please wait...</p>
    </div>
</div>
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a>Customer Invoice</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="user_dir"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Customer</li>
                            <li class="breadcrumb-item active">Invoice </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        </div>
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card" id="DivIdToPrint">
                        <div class="header">
                            <button class="fa-pull-right btn btn-primary m-l-30 font-weight-bold" id="ccv"
                                    onclick='printContent("DivIdToPrint");'>Print Report
                            </button>
                            <br>
                        </div>


                        <div class="card">
                            <div class="body w_user" style="font-weight: bold;color: black;font-size: 20px">
                                <img class="" src="https://cdn1.iconfinder.com/data/icons/digital-business-i-1/178/Digital_Business_Set-01-02-256.png"
                                     alt="" style="height: 68px;">
                                <div class="wid-u-info">
                                    <h5 style="font-weight: bold;color: black;font-size: 29px"><?= $business_name; ?></h5>
                                    <p style="font-size: 16px" class="text-muted m-b-0">Customer Invoice No : 8838382</p>
                                    <p style="font-size: 16px" class="text-muted m-b-0">Tel: <?= $phone_number;  ?></p>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-3">
                                        <small class="font-weight-bold" style="font-size: 15px">Total Amount</small>
                                        <h5 class="m-b-0">₦12,345</h5>

                                    </div>

                                    <div class="col-3">
                                        <small class="font-weight-bold" style="font-size: 15px">Sold By</small>
                                        <h5 class="m-b-0">Daniel Bensin</h5>
                                    </div>

                                    <div class="col-3">
                                        <small class="font-weight-bold" style="font-size: 15px"> Tax</small>
                                        <h5 class="m-b-0">
                                            ₦00.00</h5>

                                    </div>


                                    <div class="col-3">
                                        <small class="font-weight-bold" style="font-size: 15px">Printed date</small>
                                        <h5 class="m-b-0"><?php $get_date = date('Y-m-d H:i:s');
                                            echo $newDate = date("d-m-Y:h:i:s", strtotime($get_date)); ?></h5>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-examples dataTables table-custom" id="examples">
                                    <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Item Name</th>
                                        <th>Amount</th>
                                        <th> Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $get_category = $app->fetch_carts($key_grant);
                                    $count = 0;
                                    foreach ($get_category as $cc) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <th><?= $count++; ?></th>
                                            <td><span class="fa fa-circle-o descvs text-success pull-right font-23" id="descv"></span><?= $app->stringFormat($cc->item_name, 25); ?><br> </td>
                                            <td><?= number_format($cc->price_sold); ?></td>
                                            <td><?= $cc->qty; ?></td>
                                            <td>
                                                <?= number_format($cc->price_sold); ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    <tr>
                                        <td rowspan="2" colspan="2">Thanks For Your Patronage...</td>
                                        <td>Sub Total: -</td>
                                        <td>-</td>
                                        <td>Total :</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    </div>

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
    <script src="../assets/vendor/toastr/toastr.js"></script>
    <script>

        function printContent(el) {
            $("#ccv").hide();
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }

        $(".descvs").on('mouseover', (function(e) {
            toastr.success('Please Note That You Can Add Product ID.', 'Add Product Serial Number');
            // hide toastr notification after 3 seconds
            setTimeout(function() {
                toastr.clear();
            }, 6000);

        }));
    </script>
</body>
</html>
