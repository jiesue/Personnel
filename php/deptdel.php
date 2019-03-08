<?php
include 'mysql.class.php';
include 'checkLogin.php';


$dept_id = $_POST['dept_id'];
$res = $mysql->delete('dept',"dept_id = '${dept_id}' ");

if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}




?>