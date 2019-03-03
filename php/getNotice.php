<?php
include 'mysql.class.php';
include 'checkLogin.php';

$num = $mysql->select('notice');
$res = $mysql->fetchAll();
// echo '1232'
$resArr = array('code' => 0 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
$res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
echo ($res2);

?>