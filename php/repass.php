<?php
include 'mysql.class.php';
include 'checkLogin.php';


$id = $_POST['id'];
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$passArr = array('password' => $newpass);

$num = $mysql->select('user','',"id=${$id} and password=${$oldpass}");
echo $num;
// if(!$num){
//     httpStatus(400);//原密码错误
// }
// $res = $mysql->update('user',$passArr,"id=${$id} and password=${$oldpass}");
// if($res){
//     httpStatus(200);//成功
// }else{
//     httpStatus(500);//
// }


?>