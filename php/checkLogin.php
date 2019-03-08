<?php

    session_start();
    if( isset($_SESSION['loginname']) ){
        // echo 'jie';
        return;
    }else{
        // echo 'jie1';
        header("Refresh:0;url=../web/login.html");
        // header('location:../web/login.html');
        die();
    }


?>