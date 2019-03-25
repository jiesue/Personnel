<?php
include 'mysql.class.php';
include 'checkLogin.php';


$emp_id = $_POST['emp_id'];
$start = $_POST['start'];
$reason = $_POST['reason'];
$end = $_POST['end'];


$num = $mysql->select('emp', '', "emp_id = '${emp_id}' ");

$dataArr = array('emp_id' => $emp_id , 'reason' => $reason,'start' => $start,  'end' => $end);

if($num){
    $res = $mysql->insert('dayoff', $dataArr);
    if(isset($res)){
        httpStatus(200);
    }else{
        httpStatus(401);
    }

}else{
    httpStatus(400);
}




?>