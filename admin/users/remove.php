<?php
/**
 * Created by PhpStorm.
 * User: ginv2
 * Date: 2/17/20
 * Time: 18:41
 * 1. lấy id xuống
 * 2. kiểm tra xem có quyền để xóa tài khoản với id đc nhận hay không
 * 4. thực hiện câu lệnh xóa với csdl
 * 5. điều hướng về danh sách
 *
 */
session_start();
include_once "../../config/utils.php";
checkAdminLoggedIn();
// lấy dữ liệu id trên url nếu id trên url= true thì trả về bằng chính nó,nếu k thì k ra kết quả
$id = isset($_GET['id']) ? $_GET['id'] : -1;

$getRemoveUserQuery = "select * from users where id = $id";
$removeUser = queryExecute($getRemoveUserQuery, false);
if(!$removeUser){
    header("location: " . ADMIN_URL . "users?msg=Tài khoản không tồn tại");
    die;
}

if($removeUser['role_id'] >= $_SESSION[AUTH]['role_id']){
    header("location: " . ADMIN_URL . "users?msg=Không đủ quyền hạn thực hiện hành động này");
    die;
}

$removeUserQuery = "delete from users where id = $id";
queryExecute($removeUserQuery, false);
header("location: " . ADMIN_URL . "users?msg=Xóa tài khoản thành công");
die;