<?php
include_once "component/user_data.php";
$app = new controller;
$get_id = base64_decode($app->get_request('fib'));
$ccc = $app->edit_cheque($key_grant, $get_id);
?><!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: Edit Cheque </title>
    <?php
    require_once 'component/meta_config.php';
    ?>
</head>
<body class="theme-blue">
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
                                        <img id="cvb" onclick="window.location.href='chque_man'" src="icon/2876986_dashboard_keyboard_keyboard left_left_icon.png" style="width: 30px">
                                    </div>
                                </div>
                                <div class="body">

                                    <div class="col-10">
                                        <form id="submitForm" method="post" name="submitForm">
                                            <input type="hidden" name="binder" value="<?= $binder;  ?>">
                                            <div class="form-group">
                                                <label>Select Customer</label>
                                                <select class="form-control show-tick ms select2"
                                                        data-placeholder="Select" name="customer">
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
                                            <label>Select Cheque Status</label>
                                            <select class="form-control show-tick ms select2"
                                                    data-placeholder="Select" name="payment" id="pay_status">
                                                <option><?= $ccc->status; ?></option>
                                                <option>Paid</option>
                                                <option>Unpaid</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label>Choose Bank Cheque </label>
                                            <select class="form-control show-tick ms select2"
                                                    data-placeholder="Select" name="bnak">
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
                                            <label for="phone" class="control-label">Cheque Number</label>
                                            <input type="text" id="text" name="cn" value="" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Cheque Amount</label>
                                            <input type="text" id="text" name="camount" value="" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Cheque Date</label>
                                            <input type="date" id="text" name="chqe_date" value="" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Cheque Due Date</label>
                                            <input type="date" id="text" name="duedate" value="" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <input type="hidden" id="pid" name="pid">
                                        <input type="hidden" id="sb">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" id="save_btn" class="btn btn-primary font-weight-bold" value="Create Now">
                                <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">X</button>
                            </div>
                        </div>
                        </form>
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
                            $(document).ready(function () {

                                /* function to login user */
                                $("#add_vendors").on('submit', (function (e) {
                                    e.preventDefault();
                                    var btn = $("#add_vendorse");
                                    btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
                                    var datas = new FormData(this);
                                    $.ajax({
                                        url: "script/add_customer",
                                        type: "POST",
                                        data: datas,
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        success: (data) => {
                                            if (data.trim() == "done") {
                                                toastr.success('Completed.', 'Success');
                                                setTimeout(
                                                    function () {
                                                        window.location.href = 'customer-list';
                                                    }, 2000);
                                            } else {
                                            }
                                        },

                                    });
                                }));


                            })
                        </script>
</html>
