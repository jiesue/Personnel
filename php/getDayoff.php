<?php
include 'mysql.class.php';
include 'checkLogin.php';

$num = $mysql->select('dayoff');
$res = $mysql->fetchAll();
foreach($res as $key => $valus){
    $where = "emp_id ='".$valus['emp_id']. "'";
    // echo $where.' ';
    $mysql->select('emp', ['name'], $where);
    $nameArr = $mysql->fetchAll();
// var_dump($resArr);
    $res[$key] = array_merge( $res[$key], $nameArr[0]);

}

// var_dump($res);
// echo '1232'
$resArr = array('code' => 0 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
$res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
echo ($res2);

?>