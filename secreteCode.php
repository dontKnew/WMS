<?php
    session_start();
    unset($_SESSION['secreteCode']);
    unset($_SESSION['email']);
        if(session_destroy()) {
        header("Location:./member/login.php");
        }
?>