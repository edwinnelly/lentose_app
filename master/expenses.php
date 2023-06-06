<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Expenses Manager</title>
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
                                        class="fa fa-arrow-left"></i></a>Expenses Manager</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="user_dir"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Add</li>
                            <li class="breadcrumb-item active">Edit</li>
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
                            <h2> Expenses Manager <small>You can view Expenses here</small></h2>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                    data-target="#checkout">
                                New Expenses
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
                                    <th>Description</th>
                                    <th>Expense Category</th>
                                    <th>Credit</th>
                                    <th>Debit</th>
                                    <th>Balance</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                $get_category = $app->fetch_expenses($key_grant);
                                $count = 0;
                                foreach ($get_category as $cc) {
                                $count++;
                                ?>
                                    <tr>
                                        <th scope="row"><?= $count; ?></th>
                                        <td><?= $cc->created_on;  ?></td>
                                        <td><?= $cc->description;  ?></td>
                                        <td><?= $cc->category_name;  ?></td>
                                        <td><?= number_format($cc->cr);  ?></td>
                                        <td><?= number_format($cc->dr);  ?></td>
                                        <td><?= number_format($cc->balance);  ?></td>
                                        
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">

                                                   <hr>
                                                    <a class="dropdown-item remove_items" style="cursor: pointer;" data-item="<?= $cc->description;  ?> " data-id="<?= $cc->id; ?>" data-secure="<?= $binder; ?>" data-cc="<?= base64_encode($cc->dr);  ?>" data-accn='<?= $cc->account_number; ?>'>Undo</a>
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
                
                        $(document).on('click', '.remove_items', function() {
                            const pid = $(this).attr("data-id");
                            const item = $(this).attr("data-item");
                            const secure = $(this).attr("data-secure");
                            const cc = $(this).attr("data-cc");
                            const accn = $(this).attr("data-accn");
                            
                            // show in text field
                            $("#uid2").val(pid);
                            $("#catname2").val(item);
                            $("#secure2").val(secure);
                            $("#cc").val(cc);
                            $("#accn").val(accn);
                           
                             //display modal
                            $('#del_cat').modal('show');
                            $("#res_cheque").click(function () {
                                const uid = $("#uid2").val();
                                const secure = $("#secure2").val();
                                const cc = $("#cc").val();
                                const btn = $("#res_cheque");
                                const accn = $("#accn").val();
                                
                                btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting...');
                                if (uid === '' || uid === 0) {
                                    toastr.warning('Please check selection.', 'warning');
                                    const btn = $("#del_stf");
                                    btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Try Again...');
                                } else {
                                    $.ajax({
                                        url: "script/remove_expenses",
                                        method: "POST",
                                        data: {
                                            uid: uid,secure:secure,cc:cc,accn:accn
                                        },
                                        success: function (data) {
                                            if(data.trim() == "done"){
                                                toastr.success('Completed.', 'Success');
                                                setTimeout(
                                                    function () {
                                                        window.location.href='expenses';
                                                    }, 2000);
                                            }else{
                                                toastr.error(data, 'Bad Request');
                                                setTimeout(
                                                    function () {
                                                        const btn = $("#res_cheque");
                                                        btn.attr('disabled', false).html('<i class="fa fa-spin fa-spinner"></i> Delete Transaction');
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


<div class="modal fade" id="del_cat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Delete Transaction</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder="Delete Cheque"
                                   class="float-right form-control" name="catname" id="catname2" readonly="" required>
                            <input type="hidden" name="uid" id="uid2">
                            <input type="hidden" name="secure" id="secure2">
                            <input type="hidden" name="accn" id="accn">
                            <input type="hidden" name="cc" id="cc">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="res_cheque" value="Delete Transaction">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>

        </div>

    </div>
</div>


