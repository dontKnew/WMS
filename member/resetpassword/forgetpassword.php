<?php
include_once('../../database/database.php');
session_start();
// if(isset($_SESSION['login'])){
//   echo '<script> location.href ="../index.php"; </script>';  
// }
$secreteCode = rand(100000,999999);
if(isset($_REQUEST['sendCode'])){
    $result = $conn->query("SELECT  email, 'name' FROM member_wms WHERE email = '".$_POST['email']."'");
    if($result->num_rows > 0){
      $data = $result->fetch_assoc();
      $email = $_POST['email'];
      $subject = "Secrete OTP from Work Managment System";
      $message = "Hello '".$data['name']."', \n \n Your Secrete Code is '".$secreteCode."', please do not share with anyone \n \n \n \n \n Terms & Condtion 2022-23";
      $header = 'From: sajid320.sa@gmail.comm'. "\r\n". 
                'Reply-To: ' . $email. "\r\n" . 
                'X-Mailer: PHP/' . phpversion();
      // $header = 'From: sajid320.sa@gmail.comm'; 
      if(mail($email,$subject,$message, $header)){
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['secreteCode'] = $secreteCode;
        echo '<script> location.href ="verifypassword.php"; </script>';
      }else{
        $error = "<strong class='text-white bg-red-500 hover:bg-red-600 p-1 rounded'>Server error, Please try after some times</strong>";  

        // for testing purpose
        // $_SESSION['email'] = $_POST['email'];
        // $_SESSION['secreteCode'] = $secreteCode;
        // echo '<script> location.href ="verifypassword.php"; </script>';
      }
    }else{
      $error = "<strong class='text-white bg-blue-500 hover:bg-blue-600 p-1 rounded'> This is email does not exits ! </strong>";
    }
}

?>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="../../dist/styles.css">
    <link rel="stylesheet" href="../../dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <title> WMS Login </title>
    <style>
  .login{
    background: url('../../dist/images/login-new.jpeg')
  }
  </style>
</head>;
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
      <div class="leading-loose">
      <a href="../login.php"> <i class="text-blue-900 hover:text-blue-600 fas fa-arrow-left fa-3x"></i></a>
      <form class="max-w-xl m-1 p-10 bg-white rounded shadow-xl" method="POST" action="" autocomplete="off">
        <h1 class="text-gray-800 font-medium text-center font-bold underline mb-20"> Forget your Password ?   </h1>
        <?php if(isset($error)){ echo $error;}?>
        <div class="">
          <!-- <label class="block text-sm text-gray-800" for="username">Enter your email </label> -->
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="email" type="text" required="" placeholder="Enter registered email" aria-label="username">
        </div>
        <div class="mt-20 items-center justify-center">
          <button class="px-4 font-bold text-red-600 font-light bg-red-300  hover:bg-red-500 hover:text-white rounded" name="sendCode" type="submit">Send OTP</button>
<a class="font-bold text-sm text-500 hover:text-blue-800 text-green-800" href="mailto: israfil123.sa@gmail.com" target="blank"">
             Try Another way 
          </a>'
        </div>
      </form>

    </div>
  </div>
</div>
</body>
</html>