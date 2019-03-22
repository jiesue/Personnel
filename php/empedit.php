<?php
include 'mysql.class.php';
include 'checkLogin.php';


$name = $_POST['name'];
$emp_id = $_POST['emp_id'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$education = $_POST['education'];
$dept_id = $_POST['dept_id'];
//  echo "user_id = ${dept_id} ";
$res = $mysql->update('emp', ['name' => $name,'tel' => $tel,'email' => $email,'birthday' => $birthday,'sex' => $sex,'education' => $education,'education' => $education], "emp_id = ${emp_id} ");
// echo $res;

if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}




?>