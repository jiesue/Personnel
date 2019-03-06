<?php
include 'mysql.class.php';
include 'checkLogin.php';


$loginname = $_POST['loginname'];
$pass = $_POST['pass'];
$nickname = $_POST['nickname'];

// $res = $mysql->fetchAll();
$num = $mysql->select('user', '', " loginname = '${loginname}' ");
$dataArr = array('loginname' => $loginname , 'password' => $pass, 'nickname' => $nickname );
if(!$num){
    $res = $mysql->insert('user', $dataArr);
    if($res){
        httpStatus(200);
    }else{
        httpStatus(401);
    }

}else{
    httpStatus(400);
}
// var_dump($res) ;
// if($num)
// $resArr = array('code' => 200 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
// $res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
// echo ($res2);
// httpStatus(200);



?>