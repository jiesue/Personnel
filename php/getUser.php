<?php
include 'mysql.class.php';
include 'checkLogin.php';

$num = $mysql->select('user');
$res = $mysql->fetchAll();
// echo '1232'
// var_dump($res) ;
if($_SESSION['loginname']==='admin'){
    $resArr = array('code' => 0 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
    $res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
    echo ($res2);
    httpStatus(200);
}else{
    $resArr = array('code' => 400 , 'msg' => '没有权限' );
    $res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
    echo ($res2);
    httpStatus(200);
}



?>