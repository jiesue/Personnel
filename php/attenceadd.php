<?php
include 'mysql.class.php';
include 'checkLogin.php';


$emp_id = $_POST['emp_id'];
$time = $_POST['time'];


// $num = $mysql->select('emp', '', "emp_id = '${emp_id}' ");

$dataArr = array('emp_id' => $emp_id , 'time' => $time);


    $res = $mysql->insert('attence', $dataArr);
    if(isset($res)){
        httpStatus(200);
    }else{
        httpStatus(401);
    }








?>