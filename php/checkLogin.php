<?php

    session_start();
    if( $_SESSION['loginname'] ){
        return;
    }else{
        header("Refresh:10;url=../web/login.html");
        die();
    }


?>