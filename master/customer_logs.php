<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title>:: Customer Log List</title>
    <?php
    require_once 'component/meta_config.php';
    ?>
    <!-- CSS file from CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.min.css" />

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
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a>Customer Log List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="user_dir"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">App</li>
                            <li class="breadcrumb-item active">Log Card</li>
                            <li class="breadcrumb-item active"><a href="e_logs"> <button type="button" class="btn btn-primary btn-outline-primary" style="margin-left: 16px">
                                      Log Manager
                                    </button></a></li>

                                    <li class="breadcrumb-item active"><a href="customer-elogs"> <button type="button" class="btn btn-primary btn-outline-primary" style="margin-left: 16px">
                                      All Log Manager
                                    </button></a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row clearfix">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <div class="p-t-65 p-b-65">
                                <h6>Add New Log</h6>
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#smallModal11"><i class="fa fa-plus-circle"></i></button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <div class="p-t-65 p-b-65">
                                <h6>Add Log Category</h6>
                                <button type="button" data-toggle="modal"
                                        data-target="#smallModal1" class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#addcontact"><i class="fa fa-plus-circle"></i></button>
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

    // A $( document ).ready() block.
    $(document).ready(function () {


        $("#postcat").on('submit', (function (e) {
            e.preventDefault();
            var btn = $("#save_btn_cat");
            btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
            var datas = new FormData(this);
            $.ajax({
                url: "script/add_customer_cat",
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
                                window.location.href = 'customer_logs';
                            }, 2000);
                    } else {
                        toastr.success(data, 'Success');
                    }
                },

            });
        }));

        $("#newlogs").on('submit', (function (e) {
            e.preventDefault();
            var btn = $("#save_btn_cat1");
            btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
            var datas = new FormData(this);
            $.ajax({
                url: "script/add_customer_logs",
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
                                window.location.href = 'customer_logs';
                            }, 2000);
                    } else {
                        toastr.error(data, 'Success');
                        setTimeout(
                            function () {
                                var btn = $("#save_btn_cat1");
                                btn.attr('disabled', false).html("<i class='fa fa-spin fa-spinner'></i> processing");
                            }, 4000);

                    }
                },

            });
        }));


    });


</script>

<script>
    $(document).ready(function () {
        $('#my-select').selectize({
            sortField: 'text'
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>


</body>
</html>

<div class="modal fade" id="smallModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="smallModalLabel">Add to Categories</h4>
            </div>
            <div class="modal-body">
                <form id="postcat" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder="Add to Categories"
                                   class="float-right form-control" name="catname" required>
                         <input type="hidden" name="binder" value="<?= $binder;  ?>">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="save_btn_cat" value="Add Category">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="smallModal11" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add New Log</h6>
            </div>
            <div class="modal-body">
                <form method="post" name="newlogs" id="newlogs">
                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label"> Log Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Log Title" required>
                                <input type="hidden" name="binder" value="<?= $binder;  ?>">
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="control-label">Select Customer</label>
                            <select class="form-control show-tick ms select2"
                                        data-placeholder="Select" name="customerid">
                                    <option value="0">Default</option>
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


                        <div class="col-12">
                            <label class="control-label">Choose Transaction</label>
                            <select class="form-control show-tick m-b-10" id="my-select" name="transaction">
                                <option value="1">Choose Transaction</option>
                                <?php
                                                        $get_category = $app->fetch_sales_history($key_grant);
                                                        foreach ($get_category as $cc) {
                                                        ?>
                                <option value="<?= $cc->sales_id  ?> "><?= $cc->sales_id  ?> / <?= $cc->vendor_name; ?> / <?php $plant =$app->total_paid_carts($cc->sales_id,$key_grant); echo  number_format($plant->price_sold);  ?></option>
                                <?php

                                                        }
                                                        ?>
                            </select>
                        </div>

                      

                        <div class="col-12">
                            <label class="control-label">Choose Category</label>
                            <select class="form-control show-tick m-b-10" name="category_id">
                                <option value="1">Choose Category</option>
                                <?php
                                $get_category = $app->get_log_cats($key_grant);
                                foreach ($get_category as $cc) {
                                    ?>
                                    <option value="<?= $cc->id; ?>"><?= $cc->category_name; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="control-label">Description</label>
                            <div class="form-group">
                                <textarea type="number" name="description" class="form-control" placeholder="Description" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="control-label">Choose Status</label>
                            <select class="form-control show-tick m-b-10" name="status">
                                <option value="Pending">Choose Status</option>
                                <option value="Pending">Pending</option>
                                <option value="Completed">Completed</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="control-label">Create Date</label>
                            <div class="form-group">
                                <input type="datetime-local" name="create_date" class="form-control" placeholder="Create Date" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="control-label">Set Due Date</label>
                            <div class="form-group">
                                <input type="datetime-local" name="due_date" class="form-control" placeholder="Set Due Date" required>
                            </div>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="save_btn_cat1" value="Add Log">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>

            </form>
        </div>
    </div>
</div>
