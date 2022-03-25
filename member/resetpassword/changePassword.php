<?php include_once('../../database/database.php');
session_start();
if(!isset($_SESSION['secreteCodeOk'])){
  echo '<script>location.href ="../login.php"; </script>';
}
$error = "<strong class='text-white bg-green-500 hover:bg-green-600 p-1 rounded'> Email Verified! Please enter your new password. </strong>";  
// echo "Your session email : " . $_SESSION['email'];
  if(isset($_REQUEST['changePassword'])){
    if($_POST['newPassword']==$_POST['confirmPassword']){  
      $result = $conn->query("SELECT  `password` FROM member_wms WHERE email = '".$_SESSION['email']."' AND  password = '".$_POST['newPassword']."'");
        if($result->num_rows > 0){
          $error = "<strong class='text-white bg-blue-500 hover:bg-blue-600 p-1 rounded'> Warnning : Old Password Can`t become new password ! </strong>";
        }else{
          $result = $conn->query("UPDATE member_wms SET `password` = '".$_POST['newPassword']."' WHERE email = '".$_SESSION['email']."'");
          if($result==true){
            $error = "<strong class='text-white bg-green-500 hover:bg-green-600 p-1 rounded'> Password has been changed, <span class='text-white bg-blue-500 hover:bg-blue-600 p-1 rounded'> Redirecting to Login.. </span> </strong>";
            $_SESSION['login'] = true;
            $_SESSION['email'] = $_SESSION['email'];
            echo '<script> setTimeout(function(){location.href ="../index.php";},3000) </script>';
          }else{
            $error = "<strong class='text-white bg-blue-500 hover:bg-blu-600 p-1 rounded'>Error : '".$conn->error."' </strong>";
          } 
        }
    }else {
      $error = "<strong class='text-white bg-blue-500 hover:bg-blue-600 p-1 rounded'> Please enter same password </strong>";
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
</head>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
      <div class="leading-loose">
      <a href="index.php"> <i class="text-blue-900 hover:text-blue-600 fas fa-arrow-left fa-3x"></i></a>
      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" action="" autocomplete="off">
        <p class="text-gray-800 font-medium text-center text-lg font-bold underline"> Change  Password </p>
        <?php if(isset($error)){ echo $error;}?>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password"> New Password </label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="newPassword" type="text" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password"> Confirm Password </label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="confirmPassword" type="text" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-4 flex justify-center">
          <button class="border px-4 font-bold text-yellow-600 font-light bg-yellow-300  hover:bg-yellow-500 hover:text-white rounded mx-1" name="changePassword" type="submit">Submit</button> & 
          <a href="../forgetpass.php" class="border px-4 font-bold text-red-600 font-light bg-red-300  hover:bg-red-500 hover:text-white rounded mx-1" name="login_wms" type="submit">Cancel</a>
        </div>
      </form>

    </div>
  </div>
</div>
</body>
</html>