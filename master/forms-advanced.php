<?php
include_once "component/user_data.php";
$app = new controller;
?>
<!doctype html>
<html lang="en">
<head>
    <title> Add New Item</title>
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
<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add Items</h2>
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
<div class="col-md-12">
<div class="card">
<div class="header">
        <h2> Basic Info</h2>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-3 col-md-6">
<label class="control-label"> Item type</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option></option>
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select>
</div>
<div class="col-lg-3 col-md-6">
<label class="control-label"> Category Name</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option></option>
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select>
</div>
<div class="col-lg-3 col-md-6">
<label class="control-label"> Vendor Name</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option></option>
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">Item Name</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone-ex" class="control-label">Item Description</label>
<textarea class="control-label form-control"></textarea>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">Attribute</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="ssn" class="control-label">Size</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">On Hand Quantity</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Available Quantity</label>
<input type="number" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Recorder Point</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6">
<label class="control-label"> Unit Of Measurement</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option></option>
<option>kg</option>
<option>tons</option>
<option>gram</option>
</select>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class="col-md-12">
<div class="card">
<div class="header">
        <h2> Alternate Look-up</h2>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Item #</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">UPC</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Alternate Look-up</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Regular Price</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Order Price</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Average Unit Cost</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6">
<label class="control-label">Tax Code</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option>Tax</option>
<option>Mustard</option>
<option>Ketchup</option>
<option>Relish</option>
</select>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<button type="button" class="btn btn-primary float-right m-t-35 " data-toggle="modal" data-target="#smallModal">
    Save
</button> 
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="title" id="smallModalLabel">Add to Chat</h4>
</div>
<div class="modal-body"> 
    <form action="" method="post">
<div class="row">
        <div class="col-sm-12 col-md-12">
        <input type="text" placeholder="add to chat" class="float-right form-control">
</div>
</div>
</div>
</form>
<div class="modal-footer">
<button type="button" class="btn btn-primary">SAVE CHANGES</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
</div>
</div>
</div>
</div>
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
</body>
</html>
