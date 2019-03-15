<?php
include 'mysql.class.php';
include 'checkLogin.php';



$id = $_POST['id'];
$table = $_POST['table'];
$field = $_POST['field'];
$where = $field . '=' . $id; 
$res = $mysql->delete($table, $where);
// echo $res;
if(isset($res)){
    httpStatus(200);
}else{
    httpStatus(401);
}

?>