<?php
include 'mysql.class.php';
include 'checkLogin.php';


$emp_id = $_POST['emp_id'];
$start = $_POST['start'];
$reason = $_POST['reason'];
$end = $_POST['end'];

// $res = $mysql->fetchAll();
$num = $mysql->select('emp', '', "emp_id = '${emp_id}' ");
// echo $num;
$dataArr = array('emp_id' => $emp_id , 'reason' => $reason,'start' => $start,  'end' => $end);
// echo var_dump($dataArr);
if($num){
    $res = $mysql->insert('dayoff', $dataArr);
    // echo $res;
    if(isset($res)){
        httpStatus(200);
    }else{
        httpStatus(401);
    }

}else{
    httpStatus(400);
}
// var_dump($res) ;
// if($num)
// $resArr = array('code' => 200 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
// $res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
// echo ($res2);
// httpStatus(200);



?>