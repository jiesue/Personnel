<?php
include 'mysql.class.php';
include 'checkLogin.php';

$num = $mysql->select('dept');
$res = $mysql->fetchAll();
// echo '1232'
// var_dump($res) ;
$resArr = array('code' => 200 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
$res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
echo ($res2);
httpStatus(200);



?>