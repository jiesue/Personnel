<?php
include 'mysql.class.php';
include 'checkLogin.php';

$num = $mysql->select('leaveoff');
$res = $mysql->fetchAll();
// var_dump($res);
foreach($res as $key => $valus){
    $where = "emp_id ='".$valus['emp_id']. "'";
    $mysql->select('emp', ['name'], $where);
    $nameArr = $mysql->fetchAll();

    $res[$key] = array_merge( $res[$key], $nameArr[0]);

}
$resArr = array('code' => 0 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
$res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
echo ($res2);

?>