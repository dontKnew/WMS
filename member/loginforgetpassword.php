<?php
    session_start();
    $secreteCode = rand(100000,999999);
    $subject = "Secrete OTP from Work Managment System";
    $message = "Hello', \n \n Your Secrete Code is '".$secreteCode."', please do not share with anyone \n \n \n \n \n Terms & Condtion 2022-23";
    $header = 'From: sajid320.sa@gmail.comm'. "\r\n". 
                'Reply-To: ' . $_SESSION['email']. "\r\n" . 
                'X-Mailer: PHP/' . phpversion();
    // $header = 'From: sajid320.sa@gmail.comm'; 
    if(mail($_SESSION['email'],$subject,$message, $header)){
        $_SESSION['secreteCode'] = $secreteCode;
        // $_SESSION['secreteCodeOk'] = true;
        echo '<script> location.href ="resetpassword/verifypassword.php"; </script>';
        // $error = "<strong class='text-green-500'> Email Sent </strong>";  
    }else{   
        $_SESSION['secreteCode'] = $secreteCode;
        echo '<script> location.href ="resetpassword/verifypassword.php"; </script>';
        $error = "<strong class='text-red-500'>Internal Problems.. </strong>";  
    }
?>