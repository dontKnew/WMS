<?php
require_once '../database/database.php';
session_start();
if(!isset($_SESSION['login'])){
    header("location:login.php");
};
    if(isset($_REQUEST['registered_wsm'])){
        if($_POST['name'] == "" || $_POST['email'] == "" || $_POST['password']=="" || $_POST['cpassword']=="" || $_POST['number']==""){
            $error = "<strong style='color:red'> All fields are required! </strong>";
        }else {
                $sql = "SELECT  `email` FROM member_wms WHERE email = '".$_POST['email']."'limit 1";
                $result = $conn->query($sql);
                if($result->fetch_assoc()==TRUE){
                    $error = "<strong style='color:yellow'> Email already registered, try another!  </strong>";
                }else {
                    if($_POST['password']==$_POST['cpassword']){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $number = $_POST['number'];
                        $sql = "INSERT INTO member_wms (`name`, `mobile_number`, `email`, `password`) VALUES ('$name', '$number', '$email','$password')";
                        if($conn->query($sql) == TRUE){
                            $error = "<strong style='color:green'> New Member has been registered successfull!</strong>";
                            echo "<script> setTimeout(function(){location.href='index.php'},3000)</script>";
                        } else {
                            $error = $conn->error. " <strong style='color:red'>  Unable to registered user, Please <a href=''style='text-decoration:none;underline:none;color:blue;'> contact us </a></strong>";
                        }
                    }else {
                        $error = "<strong style='color:red'> Please enter same password </strong>";
                    }
                }
        }
    }

?><html>
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
    background: url('../dist/images/login-new.jpeg')
  }
  </style>
</head>
<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl mt-2" method="POST" action="" autocomplete="off">
                <p class="text-gray-800 font-medium text-center">Register New Member</p>
                 <?php if(isset($error)){echo $error;}?>
                <div class="">
                    <label class="block text-sm text-gray-00" for="cus_name">Name</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="name" type="text" placeholder="Member Name" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-00" for="cus_email">Email</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="email" type="email" placeholder="Member Email" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-00" for="cus_number">Mobile Number</label>
                      <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="number" type="number" placeholder="Member Mobile Number" aria-label="number">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-00" for="cus_password">New Password</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="password" type="password" placeholder="Member new Password" aria-label="password">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-00" for="cus_cpassword">Confirm Password</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="cpassword" type="password" placeholder="Re-enter new Password" aria-label="cpassword">
                </div>
                <div class="mt-4 text-center">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="registered_wsm" type="submit">Register</button> or
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded"> <a href="index.php"> Cancle </a> </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>