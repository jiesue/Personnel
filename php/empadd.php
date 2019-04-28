<?php
include 'mysql.class.php';
include 'checkLogin.php';


$dept_id = $_POST['dept_id'];
$name = $_POST['name'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$birthday = $_POST['birthday'];
$education = $_POST['education'];

// $res = $mysql->fetchAll();

$dataArr = array('dept_id' => $dept_id , 'name' => $name, 'sex' => $sex, 'email' => $email, 'address' => $address, 'tel' => $tel, 'birthday' => $birthday, 'education' => $education);

    $res = $mysql->insert('emp', $dataArr);
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