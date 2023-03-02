<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
@$cc = $_GET['cat'];
@$public_key = $_GET['key'];
$app = new controller;
$get_category = $app->fetch_products_cat_four($public_key,$cc);
echo json_encode($get_category);

