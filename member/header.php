<?php
    require_once ('../database/database.php');
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head class="HeaderOfPage">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="../dist/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <script src="../src/plugin/jquery.min.js"></script>
    <title>Dashboard | Tailwind Admin</title>
    <style>
  .login{
    background: url('../dist/images/login-new.jpeg')
  }
  </style>
</head>
<body>
<!--Container -->
<div class="mx-auto bg-dark-400"> <!-- start body page -->
    <!--Screen-->
    <div class="min-h-screen flex flex-col overflow-hidden">
        <!--Header Section Starts Here-->
        <header class="bg-nav sticky top-0 overflow-y-hidden hidePrintingArea">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Work Management Management</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <a href="index.php" class="text-white p-2 no-underline rounded-full hidden md:block lg:block hover:text-white bg-green-300 text-green-700 border font-bold mx-2"><?php echo $_SESSION['email']; ?></a>
                    <a href="index.php"> <img class="h-10 w-10 rounded-full border border-red-100" src="../dist/images/adminProfile.png" alt=""> </a>
                    <a href="logout.php" class="text-white p-2 rounded-full no-underline hidden md:block lg:block hover:text-white  hover:bg-red-500 bg-red-300 mx-2 text-red-700 border font-bold">Logout</a>
                </div>
            </div>
        </header>
        <!--/Header-->
        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" style="display: none;"  class="overflow-hidden bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="index.php" onlclick="sidebar(this)"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="customer_info.php"onlclick="sidebar(this)"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-wpforms float-left mx-2"></i>
                            Customers
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="reg_document.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-book float-left mx-2"></i>
                            Documents
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <a href="employers_info.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fab fa-uikit float-left mx-2"></i>
                            Employers
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-300-border">
                        <a href="changepass.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-lock float-left mx-2"></i>
                            Change Password
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-300-border">
                        <a href="report.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-users float-left mx-2"></i>
                            Reports
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-300-border">
                        <a href="register.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-user-plus float-left mx-2"></i>
                            New Member
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                        <li class="border-t border-light-border py-3 flex justify-center">
                            <a href="logout.php" class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 hover:text-white">
                            Exit <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!--/Sidebar-->
            <!-- Arrow UP -->
            <!-- <div class="arrow-up animate-bounce w-6 h-6 ">
            <i class="far fa-arrow-alt-circle-up"></i>
            </div> -->
            <!-- End Arrow up -->
        <main class="bg-white-500 flex-1 p-3 overflow-hidden">
         <div class="flex flex-col">
