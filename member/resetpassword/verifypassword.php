<?php
include_once('../../database/database.php');
session_start();
if(!isset($_SESSION['secreteCode'])){
    echo '<script>location.href ="../login.php"; </script>';
}

$error = "<strong class='text-white bg-blue-500 hover:bg-blue-600 p-1 rounded'>We`ve sent an secrete code on your registered email! </strong>";  
if(isset($_REQUEST['verifyCode'])){
  if($_SESSION['secreteCode'] == $_POST['secreteCode']){
    $error = "<strong class='text-red-500'> Password matched </strong>"; 
    $_SESSION['secreteCodeOk'] = true;
      echo '<script> location.href ="changePassword.php"; </script>';
  }else {
    $error = "<strong class='text-white bg-red-500 hover:bg-red-600 p-1 rounded'> Secrete code was wrong...! </strong>";
  }
}
?>

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="../../dist/styles.css">
    <link rel="stylesheet" href="../../dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title> WMS Login </title>
    <style>
    .login {
        background: url('../../dist/images/login-new.jpeg')
    }
    </style>
</head>;

<body class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="leading-loose">
            <a href="forgetpassword.php"> <i class="text-blue-900 hover:text-blue-600 fas fa-arrow-left fa-3x"></i></a>
            <form class="max-w-xl m-1 p-10 bg-white rounded shadow-xl" method="POST" action="" autocomplete="off">
                <h1 class="text-green-500 font-medium text-center font-bold underline mb-10"> Verify Registered Email
                </h1>
                <?php if(isset($error)){ echo $error;}?>
                <div class="">
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="email"
                        type="text" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email'];}?>" required="" placeholder="Enter registered email"
                        aria-label="username" disabled />
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-800" for="username">Secrete Code </label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="secreteCode"
                        type="number" required="" placeholder="Enter Secrete Code" aria-label="username">
                </div>
                <div class="mt-20 items-center justify-center">
                    <button
                        class="px-4 font-bold text-red-600 font-light bg-red-300  hover:bg-red-500 hover:text-white rounded"
                        name="verifyCode" type="submit">Verify</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>