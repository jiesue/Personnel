<?php
include 'mysql.class.php';
include 'checkLogin.php';

$num = $mysql->select('dept');
$res = $mysql->fetchAll();
$resArr = array('code' => 0 , 'msg' => '请求成功' , 'count' => $num, 'data' => $res );
$res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
echo ($res2);
httpStatus(200);

?>