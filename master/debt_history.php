<?php
include_once "component/user_data.php";
$app = new controller;
 @$fib_id = base64_decode($app->get_request('fib'));
@$titles = base64_decode($app->get_request('sid'));
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
                            <h2><a href="" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Log History Manager</h2>
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
                                <h2> <?= $app->stringFormat($titles,40);  ?> <small>You can add, edit or delete customer log here</small></h2>
                                
                                <a href="debt">
                                    <button class="btn btn-primary float-right">Manage Debt</button>
                                </a>
                            </div>
                            <div class="col-lg-12 ">

                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                           <th>Amount Paid</th>
                                            <th>Paid On</th>
                                            <th>Method</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get_categoryq = $app->fetch_debt_views($key_grant,$fib_id);
                                        $count = 0;
                                        $totl_count = count($get_categoryq);
                                        foreach ($get_categoryq as $cc) {
                                            $count++;
                                        ?>
                                            <tr class="tr-<?= $cc->id; ?>">
                                                <th scope="row"><?= $count; ?></th>
                                                <th><?php echo number_format($cc->amount_paid); ?></th>
                                                <th><?php echo $cc->date_paid; ?></th>
                                                <th><?php echo $cc->payment_method; ?></th>
                                                <td>
                                                <button class='btn btn-danger del_cat' data-id="<?= $cc->id; ?>" data-hidetable='tr-<?= $cc->id; ?>'>X</button>
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
                            const info = $(this).attr("data-hidetable");
                            let text1='.';
                            let result = text1.concat(info);
                            $(result).hide();
                            var btn = $(".del_cat");
            btn.attr('disabled', false).html("<i class='fa fa-spin fa-spinner'></i> Wait");
                                    $.ajax({
                                        url: "script/del_debts_hist",
                                        type: "POST",
                                        data: {
                                            uid: uid
                                        },
                                        success: (data) => {
                                           
                                            if (data.trim() == "done") {
                                                toastr.success('Completed.', 'Success');
                                                setTimeout(
                                                    function() {
                                                        $('.tr-17').hide();
                                                        var btn = $(".del_cat");
            btn.attr('disabled', false).html("<i class=''></i> X");
                                                    }, 2000);
                                            } else {

                                            }
                                        },
                                    });
                        });

    });
                    </script>
</body>

</html>
