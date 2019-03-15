<?php
include 'mysql.class.php';
include 'checkLogin.php';

$num = $mysql->select('job');
$res = $mysql->fetchAll();
// var_dump($res);
foreach($res as $key => $valus){
    $where = "dept_id ='".$valus['dept_id']. "'";
    $mysql->select('dept', ['dept_name'], $where);
    $nameArr = $mysql->fetchAll();

    $res[$key] = array_merge( $res[$key], $nameArr[0]);

}
$resArr = array('code' => 0 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
$res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
echo ($res2);

?>