<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Account Manager</title>
    <?php
    require_once 'component/meta_config.php';
    ?>
</head>
<body class="theme-cyan">

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
                                        class="fa fa-arrow-left"></i></a>Account Manager</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="user_dir"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Add</li>
                            <li class="breadcrumb-item active">Edit</li>
                            <li class="breadcrumb-item active"> <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                    data-target="#checkout">
                                New Expenses
                            </button></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> Account Manager <small>You can view Account here</small></h2>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                    data-target="#checkout">
                                New Account
                            </button>
                        </div>
                        <div class="col-lg-12 ">

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                <tr>
                                    <th> S/N</th>
                                    <th>Created Date</th>
                                    <th>Account Name</th>
                                    <th>Account Number</th>
                                    <th>T-Debit</th>
                                    <th>T-Credit</th>
                                    <th>Balance</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $get_category = $app->fetch_accounts($key_grant);
                                $count = 0;
                                foreach ($get_category as $cc) {
                                $count++;
                                ?>
                                    <tr>
                                        <th scope="row"><?= $count; ?></th>
                                        <td><?= $cc->created_on;  ?></td>
                                        <td><?= $cc->acc_type;  ?></td>
                                        <td><?= $cc->account_number;  ?></td>
                                        <td><?= number_format($cc->db);  ?></td>
                                        <td><?= $cc->cr;  ?></td>
                                        <td><?= number_format($cc->balance);  ?></td>
                                        
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">

                                                    <a class="dropdown-item app_cheq" style="cursor: pointer;" data-item="<?= $cc->vendor_name; ?> / Cheque: <?= $cc->cheque_no;  ?> / Bank name: <?= $cc->bank_name;  ?>" data-id="<?= $cc->id; ?>" data-secure="<?= $binder; ?>" data-trnx="<?= $cc->transaction_id; ?>"> Toup account</a>
                                                    <?php if($cc->completed=='yes'){echo "<span class='dropdown-item text-danger'>Dispatched</span>";}else{
                                                        include "script/button_cheque_approve.php"; }  ?>

                                                   <a class="dropdown-item" href="customize_cheque?fib=<?= base64_encode($cc->id); ?>">Edit Account</a>
                                                    <hr>
                                                    <a class="dropdown-item remove_items" style="cursor: pointer;" data-item="<?= $cc->vendor_name; ?> / Cheque: <?= $cc->cheque_no;  ?> / Bank name: <?= $cc->bank_name;  ?>" data-id="<?= $cc->id; ?>" data-secure="<?= $binder; ?>">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>
                            </table>
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

                        $("#submitForm").on('submit',(function(e) {
                            e.preventDefault();
                            const btn = $("#save_btn");
                            btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Saving Changes...');
                            let datas = new FormData(this);
                            $.ajax({
                                url: "script/post_expenses",
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
                                                window.location.href='accounts';
                                            }, 2000);
                                    }else{
                                        toastr.error(data, 'Bad Request');
                                       setTimeout(
                                            function () {
                                                const btn = $("#save_btn");
                                                btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Create Cheque');
                                            }, 2000);
                                    }
                                },

                            });
                        }));

                        $(document).on('click', '.remove_items', function() {
                            const pid = $(this).attr("data-id");
                            const item = $(this).attr("data-item");
                            const secure = $(this).attr("data-secure");
                            // show in text field
                            $("#uid2").val(pid);
                            $("#catname2").val(item);
                            $("#secure2").val(secure);
                            //display modal
                            $('#del_cat').modal('show');
                            $("#res_cheque").click(function () {
                                const uid = $("#uid2").val();
                                const secure = $("#secure2").val();
                                const btn = $("#res_cheque");
                                btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting...');
                                if (uid === '' || uid === 0) {
                                    toastr.warning('Please check selection.', 'warning');
                                    const btn = $("#del_stf");
                                    btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Try Again...');
                                } else {
                                    $.ajax({
                                        url: "script/removeCheque",
                                        method: "POST",
                                        data: {
                                            uid: uid,secure:secure
                                        },
                                        success: function (data) {
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
                                                        const btn = $("#res_cheque");
                                                        btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Delete Cheque');
                                                    }, 2000);
                                            }

                                        }
                                    });
                                }
                            });
                        });

                        $(document).on('click', '.app_cheq', function() {
                            const pid = $(this).attr("data-id");
                            const item = $(this).attr("data-item");
                            const trnx = $(this).attr("data-trnx");
                            const secure = $(this).attr("data-secure");
                            // show in text field
                            $("#uid").val(pid);
                            $("#catname").val(item);
                            $("#secure").val(secure);
                            $("#trnx1").val(trnx);
                            //display modal
                            $('#app_cheq').modal('show');
                            $("#del_stf").click(function () {
                                const uid = $("#uid").val();
                                const sb = $("#sb").val();
                                const secure = $("#secure").val();
                                const trnx1 = $("#trnx1").val();
                                const btn = $("#del_stf");
                                btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting...');
                                //validate
                                //call Ajax
                                if (uid === '' || uid === 0) {
                                    toastr.warning('Please check selection.', 'warning');
                                    const btn = $("#del_stf");
                                    btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Try Again...');
                                } else {
                                    $.ajax({
                                        url: "script/approve_cheque",
                                        method: "POST",
                                        data: {
                                            uid: uid,secure:secure,trnx1:trnx1
                                        },
                                        success: function (data) {
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
                                                        const btn = $("#del_stf");
                                                        btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Approve Cheque');
                                                    }, 2000);
                                            }

                                        }
                                    });
                                }
                            });
                        });


                        $(document).on('click', '.app_cheqas', function() {
                            const pid = $(this).attr("data-id");
                            const item = $(this).attr("data-item");
                            const secure = $(this).attr("data-secure");
                            const trnx = $(this).attr("data-trnx");
                            const che = $(this).attr("data-che");
                            // show in text field
                            $("#uid1").val(pid);
                            $("#catname1").val(item);
                            $("#secure1").val(secure);
                            $("#trnx").val(trnx);
                            $("#che").val(che);
                            //display modal
                            $('#app_cheqc').modal('show');
                            $("#app_che").click(function () {
                                const uid1 = $("#uid1").val();
                                const sb = $("#sb").val();
                                const secure = $("#secure").val();
                                const btn = $("#app_che");
                                btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting...');
                                //validate
                                //call Ajax
                                if (uid1 === '' || uid1 === 0) {
                                    toastr.warning('Please check selection.', 'warning');
                                    const btn = $("#app_che");
                                    btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Try Again...');
                                } else {
                                    $.ajax({
                                        url: "script/cheque_dispatch",
                                        method: "POST",
                                        data: {
                                            uid1: uid1,secure:secure,trnx:trnx,che:che
                                        },
                                        success: function (data) {
                                            if(data.trim() == "done"){
                                                toastr.success('Completed.', 'Success');
                                                setTimeout(
                                                    function () {
                                                       // window.location.href='chque_man';
                                                    }, 2000);
                                            }else{
                                                toastr.error(data, 'Bad Request');
                                                setTimeout(
                                                    function () {
                                                        const btn = $("#del_stf");
                                                        btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Approve Cheque');
                                                    }, 2000);
                                            }

                                        }
                                    });
                                }
                            });
                        });


                    });

                </script>
</body>
</html>




<div class="modal fade" id="app_cheqc" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Approve Cheque .....</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder=""
                                   class="float-right form-control" name="catname" id="catname1" readonly="" required>
                            <input type="hidden" name="uid" id="uid1">
                            <input type="hidden" name="trnx" id="trnx">
                            <input type="hidden" name="che" id="che">
                            <input type="hidden" name="secure" id="secure1" value="<?= $binder; ?>">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="app_che" value="Approve Cheque & Dispatch">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>

        </div>

    </div>
</div>




<div class="modal fade" id="app_cheq" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Approve Cheque</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder=""
                                   class="float-right form-control" name="catname" id="catname" readonly="" required>
                            <input type="hidden" name="uid" id="uid">
                            <input type="hidden" name="uid" id="trnx1">
                            <input type="hidden" name="secure" id="secure" value="<?= $binder; ?>">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="del_stf" value="Approve Cheque">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>

        </div>

    </div>
</div>



<div class="modal fade" id="del_cat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Delete Cheque</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder="Delete Cheque"
                                   class="float-right form-control" name="catname" id="catname2" readonly="" required>
                            <input type="hidden" name="uid" id="uid2">
                            <input type="hidden" name="secure" id="secure2">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="res_cheque" value="Delete Cheque">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>

        </div>

    </div>
</div>


<div class="modal fade" id="checkout" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title font-weight-bold" id="defaultModalLabel">Create New Expenses</h6>
                </div>
                <span class="m-l-10 text-danger">Please note this action is not permanent</span>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-10">
                            <form id="submitForm" method="post" name="submitForm">
                                <input type="hidden" name="binder" value="<?= $binder;  ?>">
                            <div class="form-group">
                                <label>Select Account</label>
                                <select class="form-control show-tick ms select2"
                                        data-placeholder="Select" name="account">
                                    <option value="0">Default</option>
                                    <?php
                                    $get_category = $app->fetch_accounts($key_grant);
                                
                                    foreach ($get_category as $cc) {
                                        ?>
                                        <option value="<?= $cc->id; ?>"><?= $cc->acc_type; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>

                        <div class="col-10">
                            <div class="form-group">
                                <label>Choose Expenses Category </label>
                                <select class="form-control show-tick ms select2"
                                        data-placeholder="Select" name="category">
                                    <option value="0">Default</option>
                                    <?php
                                    $get_category = $app->fetch_all_expenses_category($key_grant);
                                    foreach ($get_category as $cc) {
                                        ?>
                                        <option value="<?= $cc->id; ?>"><?= $cc->category_name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-10">
                            <div class="form-group">
                                <label for="phone" class="control-label">Transaction Description</label>
                                <input type="text" id="text" name="info" value="" required class="form-control">
                            </div>
                        </div>

                        <div class="col-10">
                            <div class="form-group">
                                <label for="phone" class="control-label">Expense Amount</label>
                                <input type="text" id="text" name="amount" value="" required class="form-control">
                            </div>
                        </div>

                        <div class="col-10">
                            <div class="form-group">
                                <label for="phone" class="control-label">Transaction Date</label>
                                <input type="date" id="text" name="trans_date" value="" required class="form-control">
                            </div>
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