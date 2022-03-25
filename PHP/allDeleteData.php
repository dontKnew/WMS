<?php
require_once('../database/database.php');
function rowCount($table_name){
    include('../database/database.php');
    $sql = "SELECT  * FROM $table_name";
        $result = $conn->query($sql);
        if($result==true){
            if($result->num_rows > 0){
                $sql = "DELETE FROM  $table_name";
                $result = $conn->query($sql);
                if($result==true){
                    echo "200";
                }else{
                 echo "500";   
                }
            }else {
                
                echo "500";
            }
        }else {
            echo $conn->error;
        }
}

if(isset($_POST['deleteAllCustomer'])){
    rowCount('customers_wms');   
}

if(isset($_POST['deleteAllDocument'])){
    rowCount('property_document');   
}

if(isset($_POST['deleteAllEmployer'])){
        rowCount('employers_wms');   
}
?>