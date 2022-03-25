<?php
include('../database/database.php');
if(isset($_POST['lastDateDocument'])){
    $sql = "SELECT * FROM property_document WHERE registered_date BETWEEN '".$_POST['lastDateDocument']."' AND '".$_POST['today']."'"; 
    $result = $conn->query($sql);
    if($result==true){
        while($result->fetch_assoc()){
            
            echo "Your Data is " . $result->fetch_assoc(['first_party']);
        }
    }else{
        echo $conn->error;
    }
  } else{
      echo "404";
  }
?>