<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$price = trim($_POST['price']);

// validate bằng php
$nameerr = "";
$nameExisterr = "";
$priceerr = "";
// check name
if(strlen($name) < 2 || strlen($name) > 191){
    $nameerr = "Yêu cầu nhập tên loại phương tiện nằm trong khoảng 2-191 ký tự";
}

// check loại xe đã tồn tại hay chưa
$checkTypeQuery = "select * from services where name = '$name'";
$types = queryExecute($checkTypeQuery, true);
if($nameExisterr == "" && count($users) > 0){
    $nameExisterr = "Loại phương tiện đã tồn tại";
}

if($nameerr . $nameExisterr!= "" ){
    header('location: ' . ADMIN_URL . "services/add-form.php?nameerr=$nameerr&nameExisterr=$nameExisterr");
    die;
}
$insertTypeQuery = "insert into services values(null,'$name','$price')";
queryExecute($insertTypeQuery, false);
header("location: " . ADMIN_URL . "services");
die;