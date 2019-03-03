<?php
 
//包含数据库操作类文件
include 'mysql.class.php';
 
/* 配置连接参数 */
$config = array(
    'type' => 'mysql',
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => '',
    'port' => '3306'
  );
  /* 连接数据库 */
  $mysql = new mysql();
  $mysql->connect($config);
  echo'11';
 
?>