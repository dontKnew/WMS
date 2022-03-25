<?php
require_once('../database/database.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE  FROM customers_wms WHERE id = '$id'";
    $result = $conn->query($sql);
    if($result==true){
        echo "200";
    }else {
        echo "Error by : ".$conn->error;
    }
}

if(isset($_POST['deleteDocument'])){
    $id = $_POST['deleteDocument'];
    $sql = "DELETE FROM property_document WHERE document_id = '$id'";
    $result = $conn->query($sql);
    if($result==true){
        echo "200";
    }else {
        echo "Error by : ".$conn->error;
    }
}

if(isset($_POST['deleteEmployer'])){
    $id = $_POST['deleteEmployer'];
    $sql = "DELETE FROM employers_wms WHERE employer_id = '".$id."'";
    $result = $conn->query($sql);
    if($result!=true){
        
        echo "Error by : ".$conn->error;
    }else {
        echo "200";
    }
}

if(isset($_POST['colCustomer'])){
    $sql = "SELECT  * FROM customers_wms";
    $result = $conn->query($sql);
    if($result==true){
        if($result->num_rows > 0){
                echo $result->num_rows;
        }else {
            echo 0;
        }
    }else {
        echo $conn->error;
    }
}

if(isset($_POST['totalDocument'])){
    $sql = "SELECT  * FROM property_document";
    $result = $conn->query($sql);
    if($result==true){
        if($result->num_rows > 0){
            echo $result->num_rows;
    }else {
        echo 0;
    }
    }else {
        echo $conn->error;
    }
}
if(isset($_POST['totalEmployers'])){
    $sql = "SELECT  * FROM employers_wms";
    $result = $conn->query($sql);
    if($result==true){
        if($result->num_rows > 0){
            echo $result->num_rows;
    }else {
        echo 0;
    }
    }else {
        echo $conn->error;
    }
}

if(isset($_POST['totalIncome'])){
    $sql = "SELECT sum(recieved) FROM customers_wms";
    $result = $conn->query($sql);
    if($result==true){
        while($income = $result->fetch_assoc()){
            if($income['sum(recieved)']!=0){
                $doller = $income['sum(recieved)']/74.425;
                echo ceil($doller)."&#36;";          
            }else {
                echo 0;
            }
        }
    }else {
        echo 0;
        echo $conn->error;
    }
}
if(isset($_POST['totalBalanced'])){
    $sql = "SELECT sum(balanced) FROM customers_wms";
    $result = $conn->query($sql);
    if($result==true){
        while($income = $result->fetch_assoc()){
            if($income['sum(balanced)']!=0){
                $doller = $income['sum(balanced)']/74.425;
                echo ceil($doller)."&#36;";          
            }else{
                echo 0;
            }
        }
    }else {
        echo $conn->error;
    }
}
?>