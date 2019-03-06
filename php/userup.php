<?php
include 'mysql.class.php';
include 'checkLogin.php';


$user_id = $_POST['id'];
$res = $mysql->update('user', ['status' => 1], "user_id = ${user_id}");

if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}




?>