<?php
include 'mysql.class.php';
include 'checkLogin.php';


$emp_id = $_POST['emp_id'];
$reason = $_POST['reason'];
$date = $_POST['date'];


$num = $mysql->select('emp', '', "emp_id = '${emp_id}' ");

$dataArr = array('emp_id' => $emp_id , 'reason' => $reason,'date' => $date);

if($num){
    $res = $mysql->insert('leaveoff', $dataArr);
    if(isset($res)){
        httpStatus(200);
    }else{
        httpStatus(401);
    }

}else{
    httpStatus(400);
}




?>