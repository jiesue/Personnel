<?php
include 'mysql.class.php';
include 'checkLogin.php';


$loginname = $_POST['loginname'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];


$num = $mysql->select('user', '', "loginname = '${loginname}' ");

$dataArr = array('loginname' => $loginname , 'nickname' => $nickname,'password' => $password);

if(!$num){
    $res = $mysql->insert('user', $dataArr);
    if(isset($res)){
        httpStatus(200);
    }else{
        httpStatus(401);
    }

}else{
    httpStatus(400);
}




?>