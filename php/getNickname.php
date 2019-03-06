<?php
include 'mysql.class.php';
include 'checkLogin.php';

$loginname = $_SESSION['loginname'];
if($loginname){
    $num = $mysql->select('user', ['nickname'], " loginname = '{$loginname}' ");
    $resArr = $mysql->fetchAll();
    
    $res = json_encode($resArr,JSON_UNESCAPED_UNICODE); 
    echo $res;
    httpStatus(200);
}




?>