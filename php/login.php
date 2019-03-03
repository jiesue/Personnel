<?php


//包含数据库操作类文件
  include 'mysql.class.php';


  $loginname = $_POST['loginname'];
  $password = $_POST['password'];
  $result = $mysql->select('user','',"loginname = '${loginname}' and password = '${password}' ");

  session_start();
  if($result){
    $_SESSION['loginname'] = $loginname;
    httpStatus(200);
  }else{

    httpStatus(401);
  }
 
  //  var_dump(  ($mysql->fetchAll()));

 

  

?>