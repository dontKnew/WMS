<?php include_once('header.php');
if(isset($_REQUEST['changePassword1'])){
    if($_POST['newPassword']==$_POST['confirmPassword']){
      $sql = "SELECT  email, `password` FROM member_wms WHERE email = '".$_SESSION['email']."' AND password = '".$_POST['oldPassword']."'";
      $result = $conn->query($sql);
        if($result->num_rows > 0){
          // $error = "<strong style='color:red'> Old Password Matched </strong>";
          $result = $conn->query("UPDATE member_wms SET `password` = '".$_POST['newPassword']."' WHERE email = '".$_SESSION['email']."'");
          if($result==true){
            $error = "<strong style='color:green'> Password has been changed </strong>";
          }else{
            $error = "<strong style='color:blue'>Error : '".$conn->error."' </strong>";
          }
          
        }else{
          $error = "<strong style='color:red'> Old password was wrong! </strong>";
        }   
    }else {
      $error = "<strong style='color:blue'> Please enter same </strong>";
    }
}
?>
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
      <div class="leading-loose">
      <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" action="" autocomplete="off">
      <h1 class="text-gray-800 font-medium text-center font-bold underline"> Change Your Password </h1>
        <?php if(isset($error)){ echo $error;}?>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password"> New Password </label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="newPassword" type="text" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password"> Confirm Password </label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="confirmPassword" type="text" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password"> Old Password </label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="oldPassword" type="text" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-4 flex justify-center">
          <button class="border px-4 font-bold text-red-700 font-light bg-green-500  hover:bg-green-400 hover:text-blue-800 rounded mx-1" name="changePassword1" type="submit">Submit</button>
          <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800 text-red-800" href="loginforgetpassword.php">
            Are you Forgot your Password ?
          </a>
        </div>
      </form>

    </div>
  </div>
</div>
<?php include_once('footer.php') ?>