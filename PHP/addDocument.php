<?php
require_once '../database/database.php';
if(isset($_POST['firstParty'])){
    $firstParty = $_POST['firstParty'];
    $secondParty = $_POST['secondParty'];
    $registrationNumber = $_POST['registrationNumber'];
    $registeredDate = $_POST['registeredDate'];
    $volumeNumber = $_POST['volumeNumber'];
    $bookNumber = $_POST['bookNumber'];
    $area = $_POST['area'];
    $sql = "INSERT INTO `property_document`( `first_party`, `second_party`, `area`, `registration_number`, `volume_number`, `book_number`, `date`)  VALUES ('$firstParty', '$secondParty', '$area', '$registrationNumber', '$volumeNumber','$bookNumber', '$registeredDate')";
    if($conn->query($sql) == TRUE){
        echo '200';
    } else {
        echo '404';
        echo $conn->error;
    }   
}else {
    echo "401";
}
?>