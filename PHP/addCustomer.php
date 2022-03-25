<?php
require_once '../database/database.php';
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $father = $_POST['father'];
    $purpose = $_POST['purpose'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $charges = $_POST['charges'];
    $balanced = $_POST['balanced'];
    $recieved= $_POST['recieved'];
    $sql = "INSERT INTO `customers_wms` (`name`, `father_name`, `mobile_number`, `charges`, `recieved`, `balanced`, `purpose`, `address`) VALUES ('$name', '$father', '$number', '$charges', '$recieved', '$balanced', '$purpose','$address')";
    if($conn->query($sql) == TRUE){
        echo '200';
    } else {
        echo $conn->error;
    }   
}else {
    echo "401";
}
?>