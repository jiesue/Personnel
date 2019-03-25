<?php
include 'mysql.class.php';
include 'checkLogin.php';


$job_id = $_POST['job_id'];
$dept_id = $_POST['dept_id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
//  echo "user_id = ${dept_id} ";
$res = $mysql->update('job', [ 'dept_id' => $dept_id, 'name' => $name,'desc'=>$desc ], "job_id = '${job_id}' ");
echo $res;


if($res){
    httpStatus(200);
}else{
    httpStatus(400);
}

?>