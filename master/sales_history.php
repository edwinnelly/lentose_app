<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Customer sales History</title>
    <?php
    require_once 'component/meta_config.php';
    ?>
</head>

<body class="theme-cyan">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../vector/default-monochrome.svg" width="60" height="48" alt="Lucid"></div>
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
                            <h4><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Sales Histroy</h4>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user_dir"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Add</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ul>
                            <br>
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

                            <div class="col-lg-12 ">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Customer Sales Receipt <small>You can view customers history here</small></h2>
                                            </div>
                                            <div class="body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom" id="examples">
                                                        <thead>

                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>Transaction ID</th>
                                                                <th>Customer Name</th>
                                                                <th>Customer Phone</th>
                                                                <th>Amount</th>
                                                                <th>Payment Method</th>
                                                                <th>Sold By</th>

                                                                <th>Created Date</th>
                                                                <th>Branch</th>
                                                                <th></th>
                                                            </tr>

                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $get_category = $app->fetch_sales_history($key_grant);
                                                        $count = 0;
                                                        foreach ($get_category as $cc) {
                                                        $count++;
                                                        ?>
                                                            <tr>
                                                                <td><?= $count; ?></td>
                                                                <td><span><?php echo $cc->sales_id; ?></span></td>
                                                                <td style="text-transform: capitalize"><?php $vb = $cc->vendor_name;  if($vb==''){echo 'Unset';}else{echo $vb;} ?></td>
                                                                <td style="text-transform: capitalize"><?php $vb = $cc->phone;  if($vb==''){echo 'Unset';}else{echo $vb;} ?></td>
                                                                <td><?php $plant =$app->total_paid_carts($cc->sales_id,$key_grant); echo  number_format($plant->price_sold);  ?></td>
                                                                <td><?php echo $cc->payment_method;  ?></td>
                                                                <td style="text-transform: capitalize"><?= $cc->seller_name;  ?></td>
                                                                <td><?= $cc->date_sold;  ?></td>
                                                                <td>Head Branch</td>
                                                                <td>
                                                                    <div class="dropdown show">
                                                                        <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            Action
                                                                        </a>

                                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                            <a class="dropdown-item" href="invoice_prints?sid=<?= base64_encode($cc->sales_id); ?>">Print Receipt</a>
                                                                            <a class="dropdown-item" href="invoice_pos?sid=<?= base64_encode($cc->sales_id); ?>">Print Receipt POS</a>
                                                                            <a class="dropdown-item" href="new_return_receipt">Return Items</a>
                                                                            <a class="dropdown-item" href="#">Send Invioce</a>
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
                                const url = 'https://lentose.com/master/sales_history';
                                const cacheOptions = {
                                    headers: {
                                        'Cache-Control': 'max-age=3600'
                                    }
                                };

                                fetch(new Request(url, cacheOptions))
                                    .then(response => {
                                        // Handle the response
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
</body>

</html>

