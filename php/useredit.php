<?php
include 'mysql.class.php';
include 'checkLogin.php';


$user_id = $_POST['user_id'];
$loginname= $_POST['loginname'];
$nickname = $_POST['nickname'];
$password = $_POST['password'];
//  echo "user_id = ${dept_id} ";
$res = $mysql->update('user', [ 'loginname' => $loginname, 'nickname' => $nickname,'password'=>$password ], "user_id = ${user_id} ");
echo $res;


if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}

?>