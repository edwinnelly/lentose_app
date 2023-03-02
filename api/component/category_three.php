<?php
include_once('cores.php');
include_once('db-config.php');
include_once('controller.php');
$cc = $_GET['cat'];
$app = new controller;
$public_key ="6241e664ef7671e9945829bd1d401f275bc7693e";
$get_category = $app->getCategories_ecom_fours($public_key, $cc);
echo json_encode($get_category);

