<?php
include 'mysql.class.php';
include 'checkLogin.php';

$empNum = $mysql->select('emp');
$deptNum = $mysql->select('dept');
$dayoffNum = $mysql->select('dayoff');
$leaveoffNum = $mysql->select('leaveoff');
$resArr = array('code' => 0 , 'msg' => '請求成功' ,  'data' =>[$empNum,$deptNum,$dayoffNum,$leaveoffNum] );
$res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
if($leaveoffNum ){
    echo ($res2);
    httpStatus(200);
}else{
    httpStatus(401);
}


?>