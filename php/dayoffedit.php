<?php
include 'mysql.class.php';
include 'checkLogin.php';


$reason = $_POST['reason'];
$dayoff_id = $_POST['dayoff_id'];
$start = $_POST['start'];
$end = $_POST['end'];
//  echo "user_id = ${dept_id} ";
$res = $mysql->update('dayoff', ['reason' => $reason,'start' => $start,'end' => $end], "dayoff_id = ${dayoff_id} ");
// echo $res;

if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}




?>