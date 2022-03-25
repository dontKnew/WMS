<?php
require_once '../database/database.php';
if(isset($_POST['salary'])){
    $name = $_POST['name'];
    $father = $_POST['father'];
    $designation = $_POST['designation'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $salary = $_POST['salary'];
    $DOJ = $_POST['DOJ'];
    $DOL  = $_POST['DOL'];
    $employerImage = rand(0,11);
        $sql = "INSERT INTO `employers_wms`(`name`,`employer_image`, `father_name`, `contact_number`, `address`, `designation`, `fixed_salary`, `DOJ`, `DOL`) VALUES ('$name', '$employerImage', '$father', '$number', '$address', '$designation', '$salary', '$DOJ','$DOL')";
        if($conn->query($sql) == TRUE){
            echo '200';
        } else {
            // echo '404';
            echo $conn->error;
            echo "erorr";
        }  
}else {
    echo "401";
}
?>