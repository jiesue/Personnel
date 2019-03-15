<?php
include 'mysql.class.php';
include 'checkLogin.php';

$loginname = $_SESSION['loginname'];
// echo 123;

if($loginname!=null){
    echo $loginname;
    httpStatus(200);
}else{
    httpStatus(400);
}




?>