<?php
    session_start();
    unset($_SESSION['login']);
    unset($_SESSION['email']);
        if(session_destroy()) {
        header("Location:login.php");
        }
?>