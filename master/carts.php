<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: Cart Manager List</title>
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
                                        class="fa fa-arrow-left"></i></a> Cart Manager List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="user_dir"><i class="icon-home"></i></a></li>
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
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="header">
                                <h2>You can add, edit or delete Item from cart</small> </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item Name</th>
                                        <th>Amount</th>
                                        <th>Quantity</th>
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
                                            <td>
                                                <b><?= $cc->items_name; ?></b><br><?= $app->stringFormat($cc->description_inventory, 50); ?>
                                                <label class=""><?= $cc->category_postomg; ?></label></td>
                                            <td><?= number_format($cc->regular_price); ?></td>
                                            <td><?= $cc->on_hand_qty; ?></td>
                                            <td>
                                                <button class="btn btn-primary font-weight-bold addtocart" data-pid="<?= $cc->pid; ?>" data-item="<?= $cc->items_name; ?>" data-selling="<?= $cc->regular_price; ?>" data-cost_price="<?= $cc->order_price; ?>">Add</button>
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


                    <div class="col-lg-5">
                        <div class="card">
                            <div class="header">
                                <h2></small>
                                    <button class="btn btn-primary pull-right font-weight-bold">Check out</button>
                                    <button class="btn btn-danger pull-right font-weight-bold">Clear Cart</button>
                                    <button class="btn btn-warning pull-right font-weight-bold">Refresh Cart</button>
                                </h2>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th>Item Name</th>
                                        <th>Amount</th>
                                        <th> Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $get_category = $app->fetch_carts($key_grant);
                                    $count = 0;
                                    foreach ($get_category as $cc) {
                                        $count++;
                                        ?>
                                        <tr>
                                            <th><?= $count++; ?></th>
                                            <td><b><?= $app->stringFormat($cc->item_name, 25); ?></b></td>
                                            <td><?= number_format($cc->price_sold); ?></td>
                                            <td><?= $cc->qty; ?></td>
                                            <td>
                                                <button class="btn btn-primary font-weight-bold edel" data-id="<?= $cc->id; ?>">X</button>
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

                        $(document).on('click', '.addtocart', function () {
                            const pid = $(this).attr("data-pid");
                            const item = $(this).attr("data-item");
                            const selling = $(this).attr("data-selling");

                            // show in text field
                            $("#pid").val(pid);
                            $("#selling").val(selling);
                            $("#fullname").val(item);
                            //display modal
                            $('#del_staff').modal('show');
                        });

                        $("#addcartse").on('submit', (function (e) {
                            e.preventDefault();
                            var btn = $("#addcarts");
                            btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
                            var datas = new FormData(this);
                            $.ajax({
                                url: "script/new_cart",
                                type: "POST",
                                data: datas,
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: (data) => {
                                    if (data.trim() == "done") {
                                        toastr.success('Added to cart.', 'Success');
                                        window.location.href = 'carts.php';
                                    } else {
                                    }
                                },

                            });
                        }));

                        $(document).on('click', '.edel', function () {
                            var btn = $(".edel");
                            btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
                            const ads_id = $(this).attr("data-id");
                            $.ajax({
                                url: "script/del_carts",
                                method: "POST",
                                data: {
                                    ads_id:ads_id
                                },
                                success: function (data) {
                                    if (data.trim() == "done") {
                                        toastr.success('Product Removed From Cart.', 'Success');
                                        window.location.href = 'carts';
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
        <form method="post" id="addcartse">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title font-weight-bold" id="defaultModalLabel">New Cart Manager</h6>
            </div>
            <span class="m-l-10 text-danger">Please note this action is not permanent</span>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-10">
                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" class="form-control font-weight-bold" name="items" id="fullname"
                                   placeholder="" readonly>
                        </div>
                    </div>

                    <div class="col-10">
                        <div class="form-group">
                            <label>Selling Price</label>
                            <input type="text" class="form-control font-weight-bold" id="selling"
                                   placeholder="" name="amount" required>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" class="form-control font-weight-bold" id="qty"
                                   placeholder="" name="qty" data-parsley-min="1" required>
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="hidden" id="pid" name="pid">
                        <input type="hidden" id="sb">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" id="addcarts" class="btn btn-primary font-weight-bold" value="Add To Cart">
                <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">X</button>
            </div>
        </div>
        </form>
    </div>
</div>


