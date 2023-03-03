<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Customer History</title>
    <?php
    require_once 'component/meta_config.php';
    ?>
</head>

<body class="theme-cyan">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
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
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Sales Histroy</h2>
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
                                <h2>Customer Receipt <small>You can view customers history here</small></h2>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="header">
                                            </div>
                                            <div class="body">
                                                <div class="table-responsive">
                                                    <table class="table m-b-0">
                                                        <thead>
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>Transaction ID</th>
                                                                <th>Customer Name</th>
                                                                <th>Amount</th>
                                                                <th>Sold By</th>
                                                                <th>Created Date</th>
                                                                <th>Branch</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><span>John</span></td>
                                                                <td>Xd777</td>
                                                                <td>100</td>
                                                                <td>Mary</td>
                                                                <td>7th June 2000</td>
                                                                <td>L branch</td>
                                                                <td>
                                                                    <div class="dropdown show">
                                                                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Action
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                            <a class="dropdown-item" href="view_receipt.php">View Receipt</a>
                                                                            <a class="dropdown-item" href="#">Return Items</a>
                                                                            <a class="dropdown-item" href="#">Send Invioce</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td><span>John</span></td>
                                                                <td>Xd777</td>
                                                                <td>100</td>
                                                                <td>Mary</td>
                                                                <td>7th June 2000</td>
                                                                <td>L branch</td>
                                                                <td>
                                                                    <div class="dropdown show">
                                                                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Action
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                            <a class="dropdown-item" href="#">View Receipt</a>
                                                                            <a class="dropdown-item" href="#">Return Items</a>
                                                                            <a class="dropdown-item" href="#">Send Invioce</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                                $(document).on('click', '.del_cat', function() {
                                    const uid = $(this).attr("data-id");
                                    const info = $(this).attr("data-info");
                                    // show in text field
                                    $("#catname").val(info);
                                    $("#cpids").val(uid);
                                    //display modal
                                    $('#del_cat').modal('show');

                                    $("#del_btn_cat").click(function() {
                                        const info = $("#info").val();
                                        const pid = $("#pid").val();

                                        $("#postcatdel").on('submit', (function(e) {
                                            e.preventDefault();
                                            const btn = $("#del_btn_cat");
                                            btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting Category...');
                                            var datas = new FormData(this);
                                            $.ajax({
                                                url: "script/del_customer",
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
                                                                window.location.href = 'customer-list';
                                                            }, 2000);
                                                    } else {

                                                    }
                                                },

                                            });
                                        }));

                                    });

                                });
                            </script>
</body>

</html>

<div class="modal fade" id="del_cat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Delete Customer</h6>
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
                <input type="submit" class="btn btn-primary font-weight-bold" id="del_btn_cat" value="Delete Customer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>

    </div>
</div>