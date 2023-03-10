<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: Item List</title>
    <?php
    require_once 'component/meta_config.php';
    ?>
</head>
<body class="theme-cyan">
<!--<div class="page-loader-wrapper">-->
<!--    <div class="loader">-->
<!--        <div class="m-t-30"><img src="../logo/lentose1.png" height="150" alt="Lentose"></div>-->
<!--        <p>Please wait...</p>-->
<!--    </div>-->
<!--</div>-->
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
                                        class="fa fa-arrow-left"></i></a> Item List</h2>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>You can add, edit or delete Item here</small> </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                <tr>
                                    <th>Item #</th>
                                    <th>Images</th>
                                    <th>Item Name</th>
                                    <th>Item Description</th>
                                    <th>Attributes</th>
                                    <th>Size</th>
                                    <th>Regular Pricing</th>
                                    <th>On-hand Quantity</th>
                                    <th>On Order</th>
                                    <th>Rating</th>
                                    <th>Category</th>
                                    <th>Alternate Lookup</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $get_category = $app->fetch_all_items($key_grant);
                                $count = 0;
                                foreach ($get_category as $cc) {
                                $count++;
                                ?>
                                <tr>
                                    <th><?= $count++; ?></th>
                                    <td><img src="<?php if($cc->photo1==''){echo 'https://lentose.com/master/icons/iconse.png';}else{echo 'master/'.$cc->photo1;} ?>" alt="Item Image" height="80"></td>
                                    <td><?= $cc->items_name; ?></td>
                                    <td><?= $app->stringFormat($cc->description_inventory, 50); ?></td>
                                    <td><?= $cc->attribute; ?></td>
                                    <td><?= $cc->item_size; ?></td>
                                    <td><?= number_format($cc->regular_price); ?></td>
                                    <td><?= $cc->on_hand_qty; ?></td>
                                    <td><?= $cc->reorder_point; ?></td>
                                    <td>-</td>
                                    <td><?= $cc->category_postomg; ?></td>
                                    <td><?= $cc->alt_look_up; ?></td>
                                    <td><?= $cc->cr_date; ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-primary dropdown-toggle "
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu pre-scrollable" aria-labelledby="btnGroupDrop1"
                                                 x-placement="top-start"
                                                 style="position: absolute; transform: translate3d(0px, -2px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item"
                                                   href="edit_basic_info?sid=<?= base64_encode($cc->pid); ?>">Edit Item
                                                    Info</a>

                                                <a href="edit_shop_images?sid=<?= base64_encode($cc->pid); ?>"
                                                   class="dropdown-item">Edit Item Images</a>
                                                <a href="edit_shop_category?sid=<?= base64_encode($cc->pid); ?>"
                                                   class="dropdown-item">Edit Item Category</a>
                                                <a href="#" class="dropdown-item">Mark As Out Of Stock</a>
                                                <a href="#" class="dropdown-item">Items In Other Branches</a>
                                                <a href="#" class="dropdown-item">Restock Item</a>
                                                <a href="#" class="dropdown-item">Returned Item</a>
                                                <?php
                                                $get_category = $app->customads_category($key_grant);
                                                $count = 0;
                                                foreach ($get_category
                                                as $cce) {
                                                $count++;
                                                ?>
                                                <a  class="dropdown-item adsn" data-ads_id="<?= $cce->id; ?>" data-pid="<?= $cc->pid; ?>">Add to <?= $cce->category_postomg; ?></a>
                                    <?php
                                    }
                                    ?>
                                                <hr>
                                                <a class="dropdown-item del_staff_remove remove_items"
                                                   data-id="<?= base64_encode($cc->pid); ?>" data-item="<?= $cc->items_name; ?>">Delete</a>


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

                // $(".remove_items").click(function () {
                    $(document).on('click', '.remove_items', function() {
                    const pid = $(this).attr("data-id");
                    const item = $(this).attr("data-item");
                    // show in text field
                    $("#uid").val(pid);
                    $("#fullname").val(item);

                    //display modal
                    $('#del_staff').modal('show');

                    $("#del_stf").click(function () {
                        const uid = $("#uid").val();
                        const sb = $("#sb").val();
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
                                url: "script/remove_items",
                                method: "GET",
                                data: {
                                    uid: uid
                                },
                                success: function (data) {
                                    if (data.trim() == "done") {
                                        toastr.success('Completed.', 'Success');
                                        setTimeout(
                                            function () {
                                                window.location.href = 'item_list';
                                            }, 2000);
                                    } else {
                                    }
                                    setTimeout(
                                        function () {
                                            window.location.href = 'item_list';
                                        }, 2000);
                                }
                            });
                        }
                    });
                });


                    $(document).on('click', '.adsn', function() {
                    const ads_id = $(this).attr("data-ads_id");
                    const pid = $(this).attr("data-pid");
                    $.ajax({
                        url: "script/add_ads_cat",
                        method: "GET",
                        data: {
                            ads_id: ads_id,pid:pid
                        },
                        success: function (data) {
                            if (data.trim() == "done") {
                                toastr.success('Item Added To Ads Category.', 'Success');
                                setTimeout(
                                    function () {
                                        window.location.href = 'item_list';
                                    }, 2000);
                            }

                        }
                    });
                });
            })
        </script>
</body>
</html>

<div class="modal fade" id="del_staff" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">Delete Item</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is permanent</span>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control font-weight-bold" id="fullname"
                                   placeholder="" readonly>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="hidden" id="uid">
                        <input type="hidden" id="sb">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="del_stf" class="btn btn-primary font-weight-bold">Delete Item</button>
                <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">X</button>
            </div>
        </div>
    </div>
</div>
