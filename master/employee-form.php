
<!doctype html>
<html lang="en">
<head>
<title>:: Lentose :: Add New Employee</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
<link rel="stylesheet" href="../assets/vendor/multi-select/css/multi-select.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
<link rel="stylesheet" href="../assets/vendor/nouislider/nouislider.min.css" />

<link rel="stylesheet" href="../assets/vendor/select2/select2.css" />

<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">

<style>
    .demo-card label{ display: block; position: relative;}
    .demo-card .col-lg-4{ margin-bottom: 30px;}
</style>
</head>
<body class="theme-cyan">


<div id="wrapper">
<nav class="navbar navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-btn">
<button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
</div>
<div class="navbar-brand">
<a href="index.html"><img src="../assets/images/logo.svg" alt="Lucid Logo" class="img-responsive logo"></a>
</div>
<div class="navbar-right">
<form id="navbar-search" class="navbar-form search-form">
<input value="" class="form-control" placeholder="Search here..." type="text">
<button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
</form>
<div id="navbar-menu">
<ul class="nav navbar-nav">
<li>
<a href="file-dashboard.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="fa fa-folder-open-o"></i></a>
</li>
<li>
<a href="app-calendar.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i class="icon-calendar"></i></a>
</li>
<li>
<a href="app-chat.html" class="icon-menu d-none d-sm-block"><i class="icon-bubbles"></i></a>
</li>
<li>
<a href="app-inbox.html" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
</li>
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
<i class="icon-bell"></i>
<span class="notification-dot"></span>
</a>
<ul class="dropdown-menu notifications">
<li class="header"><strong>You have 4 new Notifications</strong></li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="media-left">
<i class="icon-info text-warning"></i>
</div>
<div class="media-body">
<p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
<span class="timestamp">10:00 AM Today</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="media-left">
<i class="icon-like text-success"></i>
</div>
<div class="media-body">
<p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
<span class="timestamp">11:30 AM Today</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="media-left">
<i class="icon-pie-chart text-info"></i>
</div>
<div class="media-body">
<p class="text">Website visits from Twitter is 27% higher than last week.</p>
<span class="timestamp">04:00 PM Today</span>
</div>
</div>
</a>
</li>
<li>
<a href="javascript:void(0);">
<div class="media">
<div class="media-left">
<i class="icon-info text-danger"></i>
</div>
<div class="media-body">
<p class="text">Error on website analytics configurations</p>
<span class="timestamp">Yesterday</span>
</div>
</div>
</a>
</li>
<li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
</ul>
</li>
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown"><i class="icon-equalizer"></i></a>
<ul class="dropdown-menu user-menu menu-icon">
<li class="menu-heading">ACCOUNT SETTINGS</li>
<li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a></li>
 <li><a href="javascript:void(0);"><i class="icon-equalizer"></i> <span>Preferences</span></a></li>
<li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a></li>
<li><a href="javascript:void(0);"><i class="icon-bell"></i> <span>Notifications</span></a></li>
<li class="menu-heading">BILLING</li>
<li><a href="javascript:void(0);"><i class="icon-credit-card"></i> <span>Payments</span></a></li>
<li><a href="javascript:void(0);"><i class="icon-printer"></i> <span>Invoices</span></a></li>
<li><a href="javascript:void(0);"><i class="icon-refresh"></i> <span>Renewals</span></a></li>
</ul>
</li>
<li>
<a href="page-login.html" class="icon-menu"><i class="icon-login"></i></a>
</li>
</ul>
</div>
</div>
</div>
</nav>
<?php
    require_once 'component/header.php';
    require_once 'component/sidebar.php';
    ?>
<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-5 col-md-8 col-sm-12">
<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>New Employee</h2>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
<li class="breadcrumb-item">New</li>
<li class="breadcrumb-item active">Employee</li>
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
        <h2>Employee Info</h2>
        <div class="col-lg-12 ">
<a href="employee-list.php"><button class="btn btn-primary float-right">View Employee</button></a>
</div>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">Login Name</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-group">
<label for="phone" class="control-label">First</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">Last</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">Street</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">Street 2</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone-ex" class="control-label">City</label>
<input type="Text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">State</label>
<input type="text" id="tax-id" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">ZIP</label>
<input type="text" id="tax-id" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<label class="control-label">Security Group</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option></option>
<option>Mr</option>
<option>Mrs</option>
<option>Miss</option>
<option>Master</option>
</select>
</div>
</div>
</div>
</div>
</div>
<div class="row clearfix">
<div class=" col-lg-12 col-md-12">
<div class="card">
<div class="header">
        <h2> Additional Details</h2>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Phone</label>
<textarea class="control-label form-control"></textarea>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Phone 2</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">E-mail</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Alternate Contact</label>
<input type="email"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 ">
<div class="form-group">
<label for="product-key" class="control-label">Alternate phone</label>
<input type="email"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 ">
<div class="form-group">
<label for="product-key" class="control-label">Commission</label>
<input type="email"  class="form-control">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-check m-t-40">
  <label class="form-check-label m-r-20" for="flexCheckChecked">Hourly</label>
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Track hours worked for this employee
  </label>
</div>
</div>
<div class="col-lg-12 col-md-6 ">
<a href="#"><button class="btn btn-primary m-t-30 ">Save</button></a>
</div>
</div>
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
