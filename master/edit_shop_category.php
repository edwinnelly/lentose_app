<?php
include_once "component/user_data.php";
$app = new controller;
$sid = base64_decode($app->get_request('sid'));
?>
<!doctype html>
<html lang="en">
<head>
    <title>Update Category</title>
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
                                        class="fa fa-arrow-left"></i></a>Update Category</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Add</li>
                            <li class="breadcrumb-item active">Edit</li>
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

                        <form method="post" id="add_vendors">
                            <div class="col-md-12">

                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2> Product / Shop Information Look-up</h2>
                                            </div>
                                            <div class="body">
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-6">
                                                        <label class="control-label"> Category One</label>
                                                        <select class="form-control show-tick ms select2"
                                                                data-placeholder="Select" name="cat1" id="category1" required>
                                                            <option value="0">Choose Category One</option>
                                                            <?php
                                                            $get_category = $app->getCategories_ecom($key_grant);
                                                            foreach ($get_category as $cc) {
                                                                ?>
                                                                <option value="<?= $cc->id; ?>"><?= $cc->category_postomg; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" value="<?= $sid;  ?>" name="pid">
                                                    <div class="col-lg-3 col-md-6">
                                                        <label class="control-label"> Category Two</label>
                                                        <select class="form-control show-tick ms select2" id="category2"
                                                                data-placeholder="Select" name="cat2" required>
                                                            <option value="0">Choose Category two </option>

                                                        </select>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <label class="control-label"> Category Three</label>
                                                        <select class="form-control show-tick ms select2" id="category3"
                                                                data-placeholder="Select" name="cat3">
                                                            <option value="0">Choose Category three </option>

                                                        </select>
                                                    </div>

                                                    <div class="col-lg-3 col-md-6">
                                                        <label class="control-label"> Category Three</label>
                                                        <select class="form-control show-tick ms select2" id="category4"
                                                                data-placeholder="Select" name="cat4">
                                                            <option value="0">Choose Category four </option>

                                                        </select>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="form-group">
                                                    <input type="submit"
                                                           class="btn btn-primary pull-right font-weight-bold"
                                                           id="add_vendorse" value="Update Category">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                        </form>

                        <script src="assets/bundles/libscripts.bundle.js"></script>
                        <script src="assets/bundles/vendorscripts.bundle.js"></script>
                        <script src="../assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
                        <script src="../assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script>
                        <script src="../assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
                        <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>

                        <script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
                        <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
                        <script src="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
                        <script src="../assets/vendor/nouislider/nouislider.js"></script>
                        <script src="../assets/vendor/select2/select2.min.js"></script>
                        <script src="assets/bundles/mainscripts.bundle.js"></script>
                        <script src="assets/js/pages/forms/advanced-form-elements.js"></script>
                        <script src="../assets/vendor/toastr/toastr.js"></script>

                        <script src="../assets/vendor/parsleyjs/js/parsley.min.js"></script>
                        <script>
                            $(document).ready(function () {
                                //update ticket category field
                                $("#category1").on('change', (function(e) {

                                    var tic_id = $('#category1').val();

                                    $.ajax({
                                        url: "script/choose_two",
                                        type: "GET",
                                        data: {
                                            tic_id: tic_id
                                        },
                                        success: function(data) {
                                            $('#category2').html(data);
                                        },

                                    });
                                }));


                                $("#category2").on('change', (function(e) {

                                    var tic_id = $('#category2').val();
                                    $.ajax({
                                        url: "script/choose_three",
                                        type: "GET",
                                        data: {
                                            tic_id: tic_id
                                        },
                                        success: function(data) {

                                           $('#category3').html(data);
                                        },

                                    });
                                }));


                                $("#category3").on('change', (function(e) {

                                    var tic_id = $('#category3').val();
                                    $.ajax({
                                        url: "script/choose_four",
                                        type: "GET",
                                        data: {
                                            tic_id: tic_id
                                        },
                                        success: function(data) {

                                           $('#category4').html(data);
                                        },

                                    });
                                }));



                                /* function to login user */
                                $("#add_vendors").on('submit', (function (e) {
                                    e.preventDefault();
                                    // var btn = $("#add_vendorse");
                                    // btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
                                    var datas = new FormData(this);
                                    $.ajax({
                                        url: "script/edit_item_category",
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
                                                        window.location.href = 'item_list';
                                                    }, 2000);
                                            } else {
                                            }
                                        },

                                    });
                                }));


                            })
                        </script>
</body>
</html>
