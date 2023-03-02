<!doctype html>
<html lang="en">
<head>
<title>:: Lucid :: Form Advanced</title>
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

<div class="page-loader-wrapper">
<div class="loader">
<div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
<p>Please wait...</p>
</div>
</div>

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
<div id="left-sidebar" class="sidebar">
<div class="sidebar-scroll">
<div class="user-account">
<img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
<div class="dropdown">
<span>Welcome,</span>
<a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Alizee Thomas</strong></a>
<ul class="dropdown-menu dropdown-menu-right account">
<li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
<li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
<li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
<li class="divider"></li>
<li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
</ul>
</div>
<hr>
<ul class="row list-unstyled">
<li class="col-4">
<small>Sales</small>
<h6>456</h6>
</li>
<li class="col-4">
<small>Order</small>
<h6>1350</h6>
</li>
<li class="col-4">
<small>Revenue</small>
<h6>$2.13B</h6>
</li>
</ul>
</div>
<?php
include_once "component/header.php"
?>

<div class="tab-pane p-l-15 p-r-15" id="Chat">
<form>
<div class="input-group m-b-20">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-magnifier"></i></span>
</div>
<input type="text" class="form-control" placeholder="Search...">
</div>
</form>
<ul class="right_chat list-unstyled">
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
<div class="media-body">
<span class="name">Chris Fox</span>
<span class="message">Designer, Blogger</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
<div class="media-body">
<span class="name">Joge Lucky</span>
<span class="message">Java Developer</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
<div class="media-body">
<span class="name">Isabella</span>
<span class="message">CEO, Thememakker</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="offline">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
<div class="media-body">
<span class="name">Folisise Chosielie</span>
 <span class="message">Art director, Movie Cut</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
<li class="online">
<a href="javascript:void(0);">
<div class="media">
<img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
<div class="media-body">
<span class="name">Alexander</span>
<span class="message">Writter, Mag Editor</span>
<span class="badge badge-outline status"></span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="tab-pane p-l-15 p-r-15" id="setting">
<h6>Choose Skin</h6>
<ul class="choose-skin list-unstyled">
<li data-theme="purple">
<div class="purple"></div>
<span>Purple</span>
</li>
<li data-theme="blue">
<div class="blue"></div>
<span>Blue</span>
</li>
<li data-theme="cyan" class="active">
<div class="cyan"></div>
<span>Cyan</span>
</li>
<li data-theme="green">
<div class="green"></div>
<span>Green</span>
</li>
<li data-theme="orange">
<div class="orange"></div>
<span>Orange</span>
</li>
<li data-theme="blush">
<div class="blush"></div>
<span>Blush</span>
</li>
</ul>
<hr>
<h6>General Settings</h6>
<ul class="setting-list list-unstyled">
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox">
<span>Report Panel Usag</span>
</label>
</li>
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox" checked>
<span>Email Redirect</span>
</label>
</li>
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox" checked>
<span>Notifications</span>
</label>
</li>
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox">
<span>Auto Updates</span>
</label>
</li>
<li>
<label class="fancy-checkbox">
<input type="checkbox" name="checkbox">
<span>Offline</span>
</label>
</li>
<li>
 <label class="fancy-checkbox">
<input type="checkbox" name="checkbox">
<span>Location Permission</span>
</label>
</li>
</ul>
</div>
<div class="tab-pane p-l-15 p-r-15" id="question">
<form>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="icon-magnifier"></i></span>
</div>
<input type="text" class="form-control" placeholder="Search...">
</div>
</form>
<ul class="list-unstyled question">
<li class="menu-heading">HOW-TO</li>
<li><a href="javascript:void(0);">How to Create Campaign</a></li>
<li><a href="javascript:void(0);">Boost Your Sales</a></li>
<li><a href="javascript:void(0);">Website Analytics</a></li>
<li class="menu-heading">ACCOUNT</li>
<li><a href="javascript:void(0);">Cearet New Account</a></li>
<li><a href="javascript:void(0);">Change Password?</a></li>
<li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
<li class="menu-heading">BILLING</li>
<li><a href="javascript:void(0);">Payment info</a></li>
<li><a href="javascript:void(0);">Auto-Renewal</a></li>
<li class="menu-button m-t-30">
<a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div id="main-content">
<div class="container-fluid">
<div class="block-header">
<div class="row">
<div class="col-lg-5 col-md-8 col-sm-12">
<h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>New Customer</h2>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
<li class="breadcrumb-item">new</li>
<li class="breadcrumb-item active">customer</li>
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
        <h2>Basic Info</h2>
        <div class="col-lg-12 ">
<a href="vendor-list.php"><button class="btn btn-primary float-right">View Suppliers</button></a>
</div>
</div>
<div class="body">
<div class="row clearfix">
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="phone" class="control-label">Vendor Code</label>
<input type="text" id="text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="form-group">
<label for="phone" class="control-label">Company</label>
<input type="text" id="text" class="form-control">
</div>
</div>

<div class="col-lg-3 col-md-6 col-sm-12">
<label class="control-label">Title</label>
<select class="form-control show-tick ms select2" data-placeholder="Select">
<option></option>
<option>Mr</option>
<option>Mrs</option>
<option>Miss</option>
<option>Master</option>
</select>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
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
<label for="phone-ex" class="control-label">Street</label>
<input type="Text" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">Street 2</label>
<input type="text" id="tax-id" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">City</label>
<input type="text" id="tax-id" class="form-control">
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
<div class="form-group">
<label for="tax-id" class="control-label">Phone</label>
<input type="text" id="tax-id" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">Alternate Phone</label>
<input type="text" id="tax-id" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">Alternate Contact</label>
<input type="text" id="tax-id" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="tax-id" class="control-label">Phone 2</label>
<input type="text" id="tax-id" class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-check m-t-40">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    Inactive
  </label>
</div>
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
<label for="product-key" class="control-label">Vendor Note</label>
<textarea class="control-label form-control"></textarea>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Account #</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">Terms</label>
<input type="text"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-12">
<div class="form-group">
<label for="product-key" class="control-label">E-mail</label>
<input type="email"  class="form-control">
</div>
</div>
<div class="col-lg-3 col-md-6 ">
<div class="form-group">
<label for="product-key" class="control-label">Vendor Web site</label>
<input type="email"  class="form-control">
</div>
</div>
<div class="col-lg-9 col-md-6 ">
<a href="#"><button class="btn btn-primary m-t-30 float-right">Save</button></a>
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
