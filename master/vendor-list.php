<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title>Suppliers List</title>
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i
                                        class="fa fa-arrow-left"></i></a>Suppliers List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Add</li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                            <!-- <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#00c5dc" data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                            <span>Visitors</span>
                            </div> -->
                            <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                <!-- <div class="sparkline text-left" data-type="line" data-width="8em" data-height="20px" data-line-Width="1" data-line-Color="#f4516c" data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                                <span>Visits</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start from here tomorrow ================================================================================================================ -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2> Suppliers List <small>You can add, edit or delete Suppliers here</small></h2>
                            <a href="vendor-form.php">
                                <button class="btn btn-primary float-right">Add Suppliers</button>
                            </a>
                        </div>
                        <div class="col-lg-12 ">

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                <tr>
                                    <th> #</th>
                                    <th>Vendor code</th>
                                    <th>Vendor Name</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>ZIP</th>
                                    <th>Phone</th>
                                    <th>Alternate phone</th>
                                    <th>Inactive</th>
                                    <th>Suppliers Note</th>
                                    <th>Email</th>
                                    <th>Suppliers Website</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $get_category = $app->getsuppliers($key_grant);
                                $count = 0;
                                foreach ($get_category as $cc) {
                                $count++;
                                ?>
                                <tr>
                                    <th scope="row"><?= $count; ?></th>
                                    <td><?= $cc->vendor_code; ?></td>
                                    <td><?= $cc->vendor_name; ?></td>
                                    <td><?= $cc->address; ?></td>
                                    <td><?= $cc->city; ?></td>
                                    <td><?= $cc->state; ?></td>
                                    <td><?= $cc->zip; ?></td>
                                    <td><?= $cc->phone; ?></td>
                                    <td><?= $cc->phone2; ?></td>
                                    <td><?= $cc->status; ?></td>
                                    <td><?= $cc->note; ?></td>
                                    <td><?= $cc->email; ?></td>
                                    <td><?= $cc->website; ?></td>

                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-primary dropdown-toggle "
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"
                                                 x-placement="top-start"
                                                 style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="vendor-edit?fib=<?= base64_encode($cc->id+9020); ?>">Edit</a>

                                                <hr>
                                                <a class="dropdown-item del_cat" style="cursor: pointer;" data-info="<?= $cc->vendor_name; ?>"
                                                   data-id="<?= $cc->id; ?>">Delete</a>
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
                    $(document).on('click', '.del_cat', function () {
                        const uid = $(this).attr("data-id");
                        const info = $(this).attr("data-info");
                        // show in text field
                        $("#catname").val(info);
                        $("#cpids").val(uid);
                        //display modal
                        $('#del_cat').modal('show');

                        $("#del_btn_cat").click(function () {
                            const info = $("#info").val();
                            const pid = $("#pid").val();

                            $("#postcatdel").on('submit',(function(e) {
                                e.preventDefault();
                                const btn = $("#del_btn_cat");
                                btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Deleting Category...');
                                var datas = new FormData(this);
                                $.ajax({
                                    url: "script/del_vendor",
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
                                                    window.location.href='vendor-list';
                                                }, 2000);
                                        }else{

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
                <h6 class="title font-weight-bold" id="defaultModalLabel">Delete Supplier</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">
                <form id="postcatdel" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <input type="text" placeholder="Add to Categories"
                                   class="float-right form-control" name="catname" id="catname" readonly="" required>
                            <input type="hidden" name="cpid" id="cpids">
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="del_btn_cat" value="Delete Suppliers">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>

    </div>
</div>
