<?php
require_once('../database/database.php');
session_start();
if(!isset($_SESSION['login'])){
  if(isset($_REQUEST['login_wms'])){
              $email = $_POST['email'];
              $password = $_POST['password'];
              $sql = "SELECT  `email` FROM member_wms WHERE email = '".$email."' limit 1";
              $result = $conn->query($sql);
              if($result->fetch_assoc()==TRUE){
                  $sql = "SELECT  `email` , `password` FROM member_wms WHERE email = '".$email."' AND password = '".$password."' limit 1";
                  $result = $conn->query($sql);
                  if($result->fetch_assoc()==TRUE){
                      $_SESSION['login'] = true;
                      $_SESSION['email'] = $email;
                      header('Location:index.php');
                      exit;
                  }else {
                      $error = "<strong style='color:red'> please enter vaild email and password ! </strong>";
                  }
              }else {
                  $error = "<strong style='color:yellow'>  Your email <strong style='color:blue'>" .$email. " </strong> is not registered with us.  </strong>";
              }
      }
}else {
  header("Location:index.php");
}

?>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="../dist/styles.css">
    <link rel="stylesheet" href="../dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <title> WMS Login </title>
    <style>
  .login{
    background: url('https://www.chromethemer.com/google-chrome/chrome-themes/images/work-space-google-chrome-theme-1.jpg')
  }
  </style>
</head>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
      <div class="leading-loose">
      <form class="max-w-xl m-4 p-10 bg-gray-900 rounded shadow-xl" method="POST" action="" autocomplete="off">
        <p class="text-white font-medium text-center text-xl font-bold underline pb-5">Member Login</p> 
        <?php if(isset($error)){ echo $error;}?>
        <div class="">
          <label class="block text-sm text-white text-md" for="username">Enter Registered Email </label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="email" type="text" required="" placeholder="User Name or email" aria-label="username">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-white text-md" for="password">Enter Password</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-800 rounded font-bold" name="login_wms" type="submit">Login</button>
          <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800 text-red-800" href="./resetpassword/forgetpassword.php">
            Forgot Password?
          </a>
        </div>
      </form>

    </div>
  </div>
</div>
</body>
</html>