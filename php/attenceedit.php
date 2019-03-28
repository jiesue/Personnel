<?php
include 'mysql.class.php';
include 'checkLogin.php';


$attence_id = $_POST['attence_id'];
// $emp_id = $_POST['emp_id'];
$time = $_POST['time'];
//  echo "user_id = ${dept_id} ";
$res = $mysql->update('attence', ['time' => $time], "attence_id = ${attence_id} ");
// echo $res;

if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}




?>