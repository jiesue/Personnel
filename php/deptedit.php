<?php
include 'mysql.class.php';
include 'checkLogin.php';


$dept_id = $_POST['dept_id'];
$dept_name = $_POST['dept_name'];
$createdate = $_POST['createdate'];
//  echo "user_id = ${dept_id} ";
$res = $mysql->update('dept', [ 'dept_name' => $dept_name, 'createdate' => $createdate ], "dept_id = '${dept_id}' ");
echo $res;


if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}

?>