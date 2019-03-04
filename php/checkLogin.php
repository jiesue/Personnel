<?php

    session_start();
    if( isset($_SESSION['loginname']) ){
        return;
    }else{
        header("Refresh:0;url=../web/login.html");
        die();
    }


?>