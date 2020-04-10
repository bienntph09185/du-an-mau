<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy thông tin từ form gửi lên
$id = trim($_POST['id']);
$name = trim($_POST['name']);
$price = trim($_POST['price']);

// validate bằng php
$nameerr = "";

// check name
if(strlen($name) < 2 || strlen($name) > 191){
    $nameerr = "Yêu cầu nhập loại dịch vụ nằm trong khoảng 2-191 ký tự";
}

if($nameerr != "" ){
    header('location: ' . ADMIN_URL . "services/edit-form.php?id=$id&nameerr=$nameerr");
    die;
}


$updateservicesTypeQuery = "update services 
                    set
                          name = '$name', 
                          price = '$price'
                    where id = $id";

queryExecute($updateservicesTypeQuery, false);
header("location: " . ADMIN_URL . "services");
die;