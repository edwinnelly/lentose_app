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
                                <li class="breadcrumb-item active">
                                    <button class="btn btn-primary float-right btn-outline-primary btn-sm" data-target="#smallModal1" data-toggle="modal">New</button>
                               </li>
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
                                
                                <a href="customer-elogs">
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
                                            
                                           <th>Log History</th>
                                            <th>Created on</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $get_categoryq = $app->fetch_logs_views($key_grant,$fib_id);
                                        $count = 0;
                                        $totl_count = count($get_categoryq);
                                        //var_dump($get_category);
                                        foreach ($get_categoryq as $cc) {
                                            $count++;
                                            //echo $cc->title;
                                        ?>
                                            <tr class="tr-<?= $cc->id; ?>">
                                                <th scope="row"><?= $count; ?></th>
                                               <th><?= htmlspecialchars($cc->description); ?></th>
                                                <th><?= $cc->created_date; ?></th>
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

            $("#newlogs").on('submit', (function (e) {
            e.preventDefault();
            var btn = $("#save_btn_cat");
            btn.attr('disabled', true).html("<i class='fa fa-spin fa-spinner'></i> processing");
            var datas = new FormData(this);
            const create_date = $("#create_date").val();
            const description = $("#description").val();
            const last_id = $("#last_id").val();
            $.ajax({
                url: "script/add_customer_log_tracks",
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
                                var markup = "<tr><th><span class='fa fa-spinner'></span></th><th>" + description + "</th><th>" + create_date + "</th><th><button class='btn btn-danger'>X</button></th></tr>";
           $("table tbody").prepend(markup);
           var btn = $("#save_btn_cat");
                                btn.attr('disabled', false).html("<i class=''></i> Add to log");
                               // location.reload();
                            }, 3000);
                    } else {
                        toastr.error(data, 'Success');
                        setTimeout(
                            function () {
                                var btn = $("#save_btn_cat");
                                btn.attr('disabled', false).html("<i class='fa fa-spin fa-spinner'></i> processing");
                            }, 1000);
                    }
                },

            });
        }));

        $(document).on('click', '.del_cat', function() {
                            const uid = $(this).attr("data-id");
                            const info = $(this).attr("data-hidetable");
                            let text1='.';
                            let result = text1.concat(info);
                            $(result).hide();
                            var btn = $(".del_cat");
            btn.attr('disabled', false).html("<i class='fa fa-spin fa-spinner'></i> Wait");
                                    $.ajax({
                                        url: "script/del_logs",
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
<div class="modal fade" id="smallModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="smallModalLabel">Add to log</h4>
            </div>
            <div class="modal-body">
            <form method="post" name="newlogs" id="newlogs">
                <input type="hidden" name="binder" value="<?= $binder;  ?>">
                <input type="hidden" name="postid" value="<?= $fib_id;  ?>">
                <input type="hidden" id="last_id" value="<?= $totl_count+1;  ?>">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                        <label class="control-label">Description</label>
                            <div class="form-group">
                                <textarea type="number" name="description" id='description' class="form-control" placeholder="Description" required></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="control-label">Created On</label>
                            <div class="form-group">
                                <input type="datetime-local" name="create_date" id='create_date' class="form-control" placeholder="Create Date" required>
                            </div>
                        </div>

                    </div>
            </div>

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary font-weight-bold" id="save_btn_cat" value="Add to log">
                <button type="button" class="btn btn-danger" data-dismiss="modal">X</button>
            </div>
            </form>
        </div>
    </div>
</div>