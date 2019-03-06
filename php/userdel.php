<?php
include 'mysql.class.php';
include 'checkLogin.php';


$user_id = $_POST['id'];
$res = $mysql->delete('user',"user_id = ${user_id}");

if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}




?>