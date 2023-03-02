<?php
include_once "component/user_data.php";
$app = new controller;
echo $get_sid = base64_decode($app->get_request('sid'));
$get_sib = base64_decode($app->get_request('sib'));
$get_last = base64_decode($app->get_request('last'));
$get_ls = base64_decode($app->get_request('ls'));
?>
<!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: Category List</title>
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
                                        class="fa fa-arrow-left"></i></a> <?= $get_sib;  ?> /  Categories</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Items</li>
                            <li class="breadcrumb-item active">Categories</li>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><?= $get_last;  ?> / <?= $get_sib;  ?> /  <?= $get_ls;  ?><small>You can add, edit or delete Item Categories here</small></h2>
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                    data-target="#smallModal1">
                                New Sub Categories
                            </button>
                        </div>


                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Category Name</th>
                                        <th>Creation Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $get_category = $app->getCategories_ecom_four($key_grant,$get_sid);
                                    $count = 0;
                                    foreach ($get_category as $cc) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <td><?= $count; ?></td>
                                            <td><?= $cc->category_postomg; ?></td>
                                            <td><?= $cc->date_added; ?></td>
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
                                                        <a class="dropdown-item cc" style="cursor: pointer"
                                                           data-info="<?= $cc->category_postomg; ?>"
                                                           data-id="<?= $cc->id; ?>">Edit</a>


                                                        <a class="dropdown-item del_cat" data-info="<?= $cc->category_postomg; ?>"
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
                </div>
                <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="title" id="smallModalLabel">Edit Categories</h5>
                            </div>
                            <div class="modal-body">
                                <form id="submitForm" method="post">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" placeholder="Edit Categories"
                                                   class="float-right form-control font-weight-bold" name="infos" id="info" required maxlength="100">
                                            <input type="hidden" id="pid" name="pid_key">
                                        </div>
                                    </div>
                            </div>

                            <div class="modal-footer">
                                <input type="submit" class="btn btn-primary font-weight-bold" id="save_btn" value="Update Changes">
                                <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">X
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="smallModal1" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="title" id="smallModalLabel">Add Sub Categories</h4>
                            </div>
                            <div class="modal-body">
                                <form id="postcat" method="post">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <input type="text" placeholder="Add to Categories"
                                                   class="float-right form-control" name="catname" required>
                                        </div>
                                        <input type="hidden" value="<?=$get_sid;  ?>" name="sid">
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


            </div>
        </div>
    </div>

    <div class="modal fade" id="del_cat" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title font-weight-bold" id="defaultModalLabel">Delete Category</h6>
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
                    <input type="submit" class="btn btn-primary font-weight-bold" id="del_btn_cat" value="Delete Category">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
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

        $(document).on('click', '.cc', function () {
            const uid = $(this).attr("data-id");
            const info = $(this).attr("data-info");
            // show in text field
            $("#info").val(info);
            $("#pid").val(uid);
            //display modal
            $('#smallModal').modal('show');

            $("#save_btn").click(function () {
                const info = $("#info").val();
                const pid = $("#pid").val();

                $("#submitForm").on('submit',(function(e) {
                    e.preventDefault();
                    const btn = $("#save_btn");
                    btn.attr('disabled', true).html('<i class="fa fa-spin fa-spinner"></i> Saving Changes...');
                    var datas = new FormData(this);
                    $.ajax({
                        url: "script/edit_product_category_ecom_four",
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
                                        window.location.href='ecom_category_four?sid=<?= base64_encode($get_sid); ?>&&sib=<?= base64_encode($get_sib); ?>&&last=<?= base64_encode($get_last); ?>&&ls=<?= base64_encode($get_ls); ?>';
                                    }, 2000);
                            }else{

                            }
                        },

                    });
                }));

            });

        });

        /* function to login user */
        $("#postcat").on('submit',(function(e) {
            e.preventDefault();
            var btn = $("#save_btn_cat");
            btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
            var datas = new FormData(this);
            $.ajax({
                url: "script/add_ecom_cat_four",
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
                                window.location.href='ecom_category_four?sid=<?= base64_encode($get_sid); ?>&&sib=<?= base64_encode($get_sib); ?>&&last=<?= base64_encode($get_last); ?>&&ls=<?= base64_encode($get_ls); ?>';
                            }, 2000);
                    }else{

                    }
                },

            });
        }));


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
                        url: "script/del_category_ecom_four",
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
                                        window.location.href='ecom_category_four?sid=<?= base64_encode($get_sid); ?>&&sib=<?= base64_encode($get_sib); ?>&&last=<?= base64_encode($get_last); ?>&&ls=<?= base64_encode($get_ls); ?>';
                                    }, 2000);
                            }else{

                            }
                        },

                    });
                }));

            });

        });



    })
</script>
</body>
</html>
