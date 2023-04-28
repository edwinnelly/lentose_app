<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Customer debt List</title>
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
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Debt Manager</h2>
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
                    <!-- start from here tomorrow ================================================================================================================ -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2> Customer Debt List <small>You can add, edit or delete customer log here</small></h2>
                                
                                    <button class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#smallModal1111">Create Debt</button>
                               
                            </div>
                            <div class="col-lg-12 ">

                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Logged By</th>
                                            <th>Transaction ID</th>
                                            <th>Customer Name</th>
                                            <th>Description</th>
                                            <th>Created on</th>
                                            <th>Amount</th>
                                            <th>Paid</th>
                                            <th>Outstanding</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get_categoryq = $app->fetch_debt($key_grant);
                                        $count = 0;
                                        //var_dump($get_category);
                                        foreach ($get_categoryq as $cc) {
                                            $count++;
                                            //echo $cc->title;
                                        ?>
                                            <tr>
                                                <th scope="row"><?= $count; ?></th>
                                                <th><?= htmlspecialchars($cc->opened_by); ?></th>
                                                <th><?= htmlspecialchars($cc->transaction_id); ?></th>
                                                <th><?= htmlspecialchars($cc->vendor_name); ?></th>
                                                <th><?= htmlspecialchars($cc->description); ?></th>
                                                <th><?= $cc->date_opened; ?></th>
                                                <th><?= number_format($cc->amount_total); ?></th>
                                                <th><?= number_format($cc->fornow); ?></th>
                                                <th><?= number_format($cc->amount_total-$cc->fornow); ?></th>
                                                <th><?php if($cc->fornow==$cc->amount_total){echo '<span class="text-danger">Closed</span>';}else{echo '<span class="text-success">Open</span>';} ?></th>
                                               <td>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a class="dropdown-item change_state" style="cursor: pointer;" data-info="<?= $cc->title; ?>" data-id="<?= $cc->id;  ?>">Make Payment</a>
                                                            <a class="dropdown-item" href="debt_history?fib=<?php echo base64_encode($cc->id); ?>&&sid=<?= base64_encode($cc->vendor_name); ?>">View History</a>
                                                            <hr>
                                                            <a class="dropdown-item del_cat" style="cursor: pointer;" data-info="<?= $cc->vendor_name; ?> / <?= number_format($cc->amount_total); ?>" data-id="<?= $cc->id;  ?>">Delete</a>
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

                        $(document).on('click', '.del_cat', function() {
                            const uid = $(this).attr("data-id");
                            const info = $(this).attr("data-info");
                            // show in text field
                            $("#catname").val(info);
                            $("#cpids").val(uid);
                            //display modal
                            $('#del_cat').modal('show');

                            $("#live_btn_cat").click(function() {
                                const info = $("#info").val();
                                const pid = $("#pid").val();

                                $("#postcatdel").on('submit', (function(e) {
                                    e.preventDefault();
                                    const btn = $("#del_btn_cat");
                                    btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting loan...');
                                    var datas = new FormData(this);
                                    $.ajax({
                                        url: "script/del_loans",
                                        type: "POST",
                                        data: datas,
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        success: (data) => {
                                            if (data.trim() == "done") {
                                                toastr.success('Completed.', 'Success');
                                                setTimeout(
                                                    function() {
                                                        window.location.href = 'debt';
                                                    }, 2000);
                                            } else {

                                            }
                                        },

                                    });
                                }));

                            });

                        });
                    });


                        $(document).ready(function () {

                        $(document).on('click', '.change_state', function() {
                            const uid = $(this).attr("data-id");
                            const info = $(this).attr("data-info");
                            // show in text field
                            $("#catname").val(info);
                            $("#cpids1").val(uid);
                            //display modal
                            $('#updated_status').modal('show');

                            $("#ccx").click(function() {
                                const info = $("#info").val();
                                const pid = $("#cpids1").val();

                                $("#postcatdel1").on('submit', (function(e) {
                                    e.preventDefault();
                                    const btn = $("#del_btn_cat");
                                    btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting Category...');
                                    var datas = new FormData(this);
                                    $.ajax({
                                        url: "script/update_paylog",
                                        type: "POST",
                                        data: datas,
                                        contentType: false,
                                        cache: false,
                                        processData: false,
                                        success: (data) => {
                                           
                                            if (data.trim() == "done") {
                                                toastr.success('Completed.', 'Success');
                                                setTimeout(
                                                    function() {
                                                        window.location.href = 'debt';
                                                    }, 2000);
                                            } else {

                                            }
                                        },

                                    });
                                }));

                            });

                        });


            $("#postcatdel12").on('submit', (function (e) {
            e.preventDefault();
            var btn = $("#save_btn_cat1234");
            btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
            var datas = new FormData(this);
            const create_date = $("#create_date").val();
            const description = $("#description").val();
            const last_id = $("#last_id").val();
            $.ajax({
                url: "script/newdebt",
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
                              location.reload();
                            }, 3000);
                    } else {
                        toastr.error(data, 'Success');
                        setTimeout(
                            function () {
                                var btn = $("#save_btn_cat");
                                btn.attr('disabled', false).html("<i class='fa fa-spin fa-spinner'></i> processing");
                            }, 1000);
                    }
                },

            });
        }));
                        

                    });
                    </script>
</body>

</html>

<div class="modal fade" id="del_cat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Delete customer loan</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">
                <form id="postcatdel" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder="Delete Loan" class="float-right form-control" name="catname" id="catname" readonly="" required>
                            <input type="hidden" name="cpid" id="cpids">
                            <input type="hidden" name="secure" id="" value="<?= $binder;  ?>">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="live_btn_cat" value="Delete loan">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>

    </div>
</div>



<div class="modal fade" id="updated_status" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Update customer payment </h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is not permanent</span>
            <div class="modal-body">
                <form id="postcatdel1" method="post">
                    <div class="row">

                    <div class="col-12">
                            <label class="control-label">Amount</label>
                            <div class="form-group">
                                <input type="text" name="amount" id='create_date' class="form-control" placeholder="Amount" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                        <label class="control-label">Payment Method</label>
                            <select class='form-control' name="pay_method">
                                <option>Cash</option>
                                <option>POS</option>
                                <option>Bank Transfer</option>
                                <option>Cheque</option>
                                <option>Others</option>
                               
                            </select>
                            <input type="hidden" name="cpids1" id="cpids1">
                            <input type="hidden" name="secure" id="" value="<?= $binder;  ?>">
                        </div>

                        <div class="col-12">
                            <label class="control-label">Payment Date</label>
                            <div class="form-group">
                                <input type="datetime-local" name="payment_date" id='create_date' class="form-control" placeholder="Create Date" required>
                            </div>
                        </div>  </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="ccx" value="Make Payment">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>

    </div>
</div>


<div class="modal fade" id="smallModal1111" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">New Debt</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is not permanent</span>
            <div class="modal-body">
                <form id="postcatdel12" method="post">
                    <div class="row">

                    <div class="col-12">
                            <label class="control-label">Amount</label>
                            <div class="form-group">
                                <input type="text" name="amount" id='create_date' class="form-control" placeholder="Amount" required maxlength="10">
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                        
                        <div class="form-group">
                                <label>Select Customer</label>
                                <select class="form-control show-tick ms select2"
                                        data-placeholder="Select" name="customer">
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


                                <label class="control-label">Description</label>
                            <div class="form-group">
                                <textarea type="number" name="description" id='description' class="form-control" placeholder="Description" required></textarea>
                            </div>
                        
                            </div>

                            <input type="hidden" name="cpids1" id="cpids1">
                            <input type="hidden" name="secure" id="" value="<?= $binder;  ?>">
                        </div>

                        <div class="col-12">
                            <label class="control-label">Payment Date</label>
                            <div class="form-group">
                                <input type="date" name="payment_date" id='create_date' class="form-control" placeholder="Create Date" required>
                            </div>
                        </div>  </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="save_btn_cat1234" value="Create Payment">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>

    </div>
</div>