<?php
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$cfpassword = trim($_POST['cfpassword']);
$contract_number = trim($_POST['contract_number']);
$identity_id = trim($_POST['identity_id']);
$role_id = trim($_POST['role_id']);
$avatar = $_FILES['avatar'];

// check password
if(strlen($password) < 6){
    $passworderr = "Mật khẩu cần >= 6 ký tự";
}

if($passworderr == "" && $password != $cfpassword){
    $passworderr = "Mật khẩu và nhập lại mật khẩu không khớp nhau";
}

if($nameerr . $emailerr . $passworderr != "" ){
    header('location: ' . ADMIN_URL . "users/add-form.php?nameerr=$nameerr&emailerr=$emailerr&passworderr=$passworderr");
    die;
}
// mã hóa mật khẩu
$password = password_hash($password, PASSWORD_DEFAULT);
// upload file ảnh
$filename = "";
if($avatar['size'] > 0){
    $filename = uniqid() . '-' . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], "../../public/images/" . $filename);
    $filename = "public/images/" . $filename;
}
$insertUserQuery = "insert into users 
                          (name, email, password, role_id, identity_id, contract_number, avatar)
                    values 
                          ('$name', '$email', '$password', '$role_id', '$identity_id', '$contract_number', '$filename')";
                         
queryExecute($insertUserQuery, false);
header("location: " . ADMIN_URL . "users");
die;