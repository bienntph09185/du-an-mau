<?php
require_once "./config/utils.php";
if(isset($_POST['luu'])){
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$messages = $_POST['messages'];
$contact_number = $_POST['contact_number'];

$sql = "insert into orders 
                          (id, address_id, contact_number, messages, staff_id, status, order_time,name,email,address)
                    values 
                          (null, null, '$contact_number', '$messages', null, null , null, '$name','$email','$address')";
queryExecute($sql, false);
header("location: " . BASE_URL . "index2.php");

die;
}
?>