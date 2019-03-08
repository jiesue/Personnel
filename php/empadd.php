<?php
include 'mysql.class.php';
include 'checkLogin.php';


$dept_id = $_POST['dept_id'];
$name = $_POST['name'];

// $res = $mysql->fetchAll();

$dataArr = array('dept_id' => $dept_id , 'name' => $name);

    $res = $mysql->insert('dept', $dataArr);
    echo $res;
    if(isset($res)){
        httpStatus(200);
    }else{
        httpStatus(401);
    }


// var_dump($res) ;
// if($num)
// $resArr = array('code' => 200 , 'msg' => '請求成功' , 'count' => $num, 'data' => $res );
// $res2 = json_encode($resArr,JSON_UNESCAPED_UNICODE);
// echo ($res2);
// httpStatus(200);



?>