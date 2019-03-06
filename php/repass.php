<?php
include 'mysql.class.php';
include 'checkLogin.php';


$id = $_POST['id'];
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$passArr = array('password' => $newpass);

$num = $mysql->select('user', '', " user_id = '${id}' and password = '${oldpass}' ");
// $loginname = $_POST['loginname'];
// $password = $_POST['password'];
// $result = $mysql->select('user','',"loginname = '${loginname}' and password = '${password}' ");

if(!$num){
    httpStatus(400);//原密码错误
}
$res = $mysql->update('user',$passArr,"user_id=${id} and password=${oldpass}");
echo $res;
// if($res){
//     httpStatus(200);//成功
// }else{
//     httpStatus(500);//
// }


?>