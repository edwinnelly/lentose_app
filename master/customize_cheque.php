<?php
include_once "component/user_data.php";
$app = new controller;
$get_id = base64_decode($app->get_request('fib'));
$ccc = $app->edit_cheque($key_grant, $get_id);
?><!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: Edit Cheque </title>
    <meta name="description" content="Place the meta description text here.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">

    <meta http-equiv="Content-Security-Policy"
          content="
                 object-src 'none';
                 base-uri 'self';
                 form-action 'self';
                 frame-ancestors 'none';
                 manifest-src 'self';
                 worker-src 'self';
                 block-all-mixed-content;
                 upgrade-insecure-requests;
                 reflected-xss block;
                ">
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
                                        class="fa fa-arrow-left"></i></a>Edit Cheque</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="user_dir"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">new</li>
                            <li class="breadcrumb-item active">Customer</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="header">
                                    <h2>Basic Cheque Info</h2>
                                    <div class="col-lg-12 ">
                                        <img id="cvb" for="return" alt="return" onclick="window.location.href='chque_man'" src="icon/2876986_dashboard_keyboard_keyboard left_left_icon.png" style="width: 30px">
                                    </div>
                                </div>
                                <div class="body">

                                    <div class="col-10">
                                        <form id="submitForm" method="post" name="submitForm">
                                            <input type="hidden" name="binder" value="<?= $binder;  ?>" aria-label="cheque finder">
                                            <input type="hidden" name="binder_id" value="<?= $get_id;  ?>" aria-label="cheque finder">
                                            <div class="form-group">
                                                <label for="Choose Customer">Select Customer</label>
                                                <select class="form-control show-tick ms select2"
                                                        data-placeholder="Select" name="customer" for="Choose Customer" aria-label="fetch params">

                                                    <option value="<?= $ccc->id; ?>"><?= $ccc->vendor_name; ?></option>
                                                    <?php
                                                    $get_category = $app->getcustomer_lentose($key_grant);
                                                    foreach ($get_category as $cc) {
                                                        ?>
                                                        <option value="<?= $cc->id; ?>"><?= $cc->vendor_name; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                    </div>


                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="Select Cheque Status">Select Cheque Status</label>
                                            <select class="form-control show-tick ms select2"
                                                    data-placeholder="Select" for="Select Cheque Status" name="payment" id="pay_status" aria-label="fetch params">
                                                <option><?= $ccc->status; ?></option>
                                                <option>Paid</option>
                                                <option>Unpaid</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="Choose Bank Cheque">Choose Bank Cheque </label>
                                            <select class="form-control show-tick ms select2"
                                                    data-placeholder="Select" for="Choose Bank Cheque" name="bnak" aria-label="fetch params">
                                                <option value="0">Default</option>
                                                <?php
                                                $get_category = $app->fetch_all_bank($key_grant);
                                                foreach ($get_category as $cc) {
                                                    ?>
                                                    <option value="<?= $cc->id; ?>"><?= $cc->bank_name; ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="phone" class="control-label" for="Cheque Number">Cheque Number</label>
                                            <input type="text" id="text" name="cn" for="Cheque Number" value="<?= $ccc->cheque_no ?>" aria-label="fetch params" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="phone" class="control-label" for="Cheque Amount">Cheque Amount</label>
                                            <input type="text" id="text" for="Cheque Amount" aria-label="fetch params" name="camount" for="Cheque Amount" aria-label="fetch params" value="<?= $ccc->amount ?>" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="phone" class="control-label" for="Cheque Date">Cheque Date</label>
                                            <input type="date" id="text" name="chqe_date" aria-label="fetch params" value="<?= $ccc->created_date ?>" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="phone" class="control-label" for="Cheque Due Date">Cheque Due Date</label>
                                            <input type="date" id="text" name="duedate" aria-label="fetch params" value="<?= $ccc->due_date ?>" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <input type="hidden" id="pid" name="pid">
                                        <input type="hidden" id="sb">
                                    </div>
                                    <div class="col-12">
                                    <input type="submit" id="save_btn" class="btn btn-primary font-weight-bold" value="Update Cheque">
<br>
<br
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                        </form>
                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="assets/bundles/libscripts.bundle.js"></script>
                        <script src="assets/bundles/vendorscripts.bundle.js"></script>
                        <script src="assets/bundles/mainscripts.bundle.js"></script>
                        <script src="../assets/vendor/toastr/toastr.js"></script>
                        <script>
                            $(document).ready(function () {

                                $("#submitForm").on('submit',(function(e) {
                                    e.preventDefault();
                                    const btn = $("#save_btn");
                                    btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Saving Changes...');
                                    var datas = new FormData(this);
                                    $.ajax({
                                        url: "script/editcreate_chqe",
                                        type: "POST",
                                        data: datas,
                                        contentType: false,
                                        cache: false,
                                        processData:false,
                                        success: (data)=> {
                                            if(data.trim() == "done"){
                                                toastr.success('Completed.', 'Success');
                                                setTimeout(
                                                    function () {
                                                        window.location.href='chque_man';
                                                    }, 2000);
                                            }else{
                                                toastr.error(data, 'Bad Request');
                                                setTimeout(
                                                    function () {
                                                        const btn = $("#save_btn");
                                                        btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Update Cheque');
                                                    }, 2000);
                                            }
                                        },

                                    });
                                }));

                            });
                        </script>
</html>
