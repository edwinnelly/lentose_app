<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Customer Log List</title>
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
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Log Manager</h2>
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
                                <h2> Customer Log List <small>You can add, edit or delete customer log here</small></h2>
                                <a href="e_logs">
                                    <button class="btn btn-primary float-right">Manage Log</button>
                                </a>
                            </div>
                            <div class="col-lg-12 ">

                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Log Title</th>
                                            <th>Transaction ID</th>
                                            <th>Customer Name</th>
                                            <th>Description</th>
                                            <th>Created on</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get_categoryq = $app->fetch_logs($key_grant);
                                        $count = 0;
                                        //var_dump($get_category);
                                        foreach ($get_categoryq as $cc) {
                                            $count++;
                                            //echo $cc->title;
                                        ?>
                                            <tr>
                                                <th scope="row"><?= $count; ?></th>
                                                <th><?= htmlspecialchars($cc->title); ?></th>
                                                <th><?= htmlspecialchars($cc->transaction_id); ?></th>
                                                <th><?= htmlspecialchars($cc->vendor_name); ?></th>
                                                <th><?= htmlspecialchars($cc->description); ?></th>
                                                <th><?= $cc->created_date; ?></th>
                                                <th><?= $cc->due_date; ?></th>
                                                <th><?php if($cc->status=='Pending'){echo '<span class="text-danger">Pending</span>';}else{echo '<span class="text-success">Completed</span>';} ?></th>
                                               <td>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="top-start" style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a class="dropdown-item change_state" style="cursor: pointer;" data-info="<?= $cc->title; ?>" data-id="<?= $cc->id;  ?>">Change Status</a>
                                                            <a class="dropdown-item" href="customer-elogs_views.php?fib=<?php echo base64_encode($cc->id); ?>&&sid=<?= base64_encode($cc->title); ?>">View Log</a>
                                                            <hr>
                                                            <a class="dropdown-item del_cat" style="cursor: pointer;" data-info="<?= $cc->title; ?>" data-id="<?= $cc->id;  ?>">Delete</a>
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
                                    btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting Category...');
                                    var datas = new FormData(this);
                                    $.ajax({
                                        url: "script/del_customer_logged",
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
                                                        window.location.href = 'customer-elogs';
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
                                        url: "script/updatelog_state",
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
                                                        window.location.href = 'customer-elogs';
                                                    }, 2000);
                                            } else {

                                            }
                                        },

                                    });
                                }));

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
                <h6 class="title font-weight-bold" id="defaultModalLabel">Delete customer log</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">
                <form id="postcatdel" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder="Add to Categories" class="float-right form-control" name="catname" id="catname" readonly="" required>
                            <input type="hidden" name="cpid" id="cpids">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="live_btn_cat" value="Delete Log">
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
                <h6 class="title font-weight-bold" id="defaultModalLabel">Update customer log status </h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">
                <form id="postcatdel1" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <select class='form-control' name="status">
                                <option value='Success'>Mark as Completed</option>
                                <option value='Pending'>Mark as Pending</option>
                            </select>
                            <input type="hidden" name="cpids1" id="cpids1">
                            <input type="hidden" name="secure" id="" value="<?= $binder;  ?>">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="ccx" value="Update status">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>

    </div>
</div>