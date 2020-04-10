<?php
session_start();
include_once "config/utils.php";
$name = trim($_POST['name']);
$contact_number = trim($_POST['contact_number']);
$email = trim($_POST['email']);
$services = trim($_POST['services']);
$messages = trim($_POST['messages']);


$insertUserQuery = "insert into order 
                          (id, address_id, contact_number, messages, staff_id, status, order_time,name,email)
                    values 
                          (null, null, '$contact_number', $messages, null, '$status', null,'$name','$email')";
queryExecute($insertUserQuery, false);
header("location: " . ADMIN_URL . "users");
die;