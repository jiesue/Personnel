<?php
include 'mysql.class.php';
include 'checkLogin.php';


$reason = $_POST['reason'];
$emp_id = $_POST['emp_id'];
$leave_id = $_POST['leave_id'];
$date = $_POST['date'];
//  echo "user_id = ${dept_id} ";
$res = $mysql->update('leaveoff', ['reason' => $reason,'emp_id'=>$emp_id,'date'=>$date], "leave_id = ${leave_id} ");
echo $res;

if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}




?>