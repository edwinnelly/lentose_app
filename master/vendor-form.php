<?php
include_once "component/user_data.php";
$app = new controller;
?><!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: Vendor List</title>
    <?php
    require_once 'component/meta_config.php';
    ?>
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
                                        class="fa fa-arrow-left"></i></a>New Suppliers</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="user_dir"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">new</li>
                            <li class="breadcrumb-item active">Suppliers</li>
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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Basic Info</h2>
                                    <div class="col-lg-12 ">
                                        <a href="vendor-list">
                                            <button class="btn btn-primary float-right font-weight-bold">View Suppliers</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="body">
                                    <form method="post" id="add_vendors">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="phone" class="control-label">Vendor Code</label>
                                                <input type="text" name="vcode" id="text" readonly value="<?php  echo $rand = rand(123456,1234567);  ?>" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6">
                                            <div class="form-group">
                                                <label for="phone" class="control-label">Vendor Name</label>
                                                <input type="text" id="text" name="vname" required class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="phone" class="control-label">Street</label>
                                                <input type="text" id="text" name="streets" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="phone" class="control-label">City</label>
                                                <input type="text" id="text" name="city" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="phone-ex" class="control-label">State</label>
                                                <input type="Text" name="state" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="tax-id" class="control-label">Zip</label>
                                                <input type="text" id="tax-id" name="zip" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="tax-id" class="control-label">Phone</label>
                                                <input type="text" id="tax-id" name="phone" required class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="tax-id" class="control-label">Alternate phone</label>
                                                <input type="text" id="tax-id" name="aphone" class="form-control">
                                            </div>
                                        </div>


                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="product-key" class="control-label">Vendor Note</label>
                                                <textarea class="control-label form-control" name="vendor_note"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="product-key" class="control-label">E-mail</label>
                                                <input type="email" class="form-control" name="emails">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="product-key" class="control-label">Website</label>
                                                <input type="text" class="form-control" name="website">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary font-weight-bold" id="add_vendorse" value="Add Vendor">
                                            </div>
                                        </div>
                                    </div>
                                    </form>
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
                                $("#add_vendors").on('submit',(function(e) {
                                    e.preventDefault();
                                    var btn = $("#add_vendorse");
                                    btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
                                    var datas = new FormData(this);
                                    $.ajax({
                                        url: "script/add_vendor",
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




                            })
                        </script>
</html>
