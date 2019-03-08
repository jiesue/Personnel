<?php
include 'mysql.class.php';
include 'checkLogin.php';


$name = $_POST['name'];
$dept_id = $_POST['dept_id'];
//  echo "user_id = ${dept_id} ";
$res = $mysql->update('dept', ['name' => $name], "dept_id = ${dept_id} ");
// echo $res;

if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}




?>