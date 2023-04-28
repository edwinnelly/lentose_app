<!doctype html>
<html lang="en">
<head>
    <title>:: Lentose :: emp List</title>
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
<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Quantity Adjustment History</h2>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
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
<h2> Quantity Adjustment History <small>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</small> </h2>
</div>
<div class="body table-responsive">
<table class="table table-bordered table-hover js-basic-example dataTable table-custom">
<thead>
<tr>
<th>Item #</th>
<th>Category NAME</th>
<th>Item NAME</th>
<th>Item Description</th>
<th>Attributes</th>
<th>Size</th>
<th>Regular Pricing</th>
<th>On-hand Quantity</th>
<th>On Order</th>
<th>Rating</th>
<th>Trend</th>
<th>Alternate Lookup</th>
<th>O/H Quantity</th>
<th>BackOrd Quantity</th>
<th>Picture Assinged</th>
<th>Creation Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
<td>@mdo</td>
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
                                                        <a class="dropdown-item" href="#">Edit</a>

                                                        <a href="#"class="dropdown-item">Add</a>
                                                        <!-- <hr>
                                                        <a href="#" class="dropdown-item">Delete</a>
                                                        <hr>
                                                        <a href="#" class="dropdown-item">Payment Schedule</a> -->
                                                        <hr>
                                                        <a class="dropdown-item del_staff_remove " href="#">Delete</a>
                                                    </div>
                                                </div>
</td>
</tr>

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
</body>
</html>
