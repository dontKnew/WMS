<?php
require_once('../database/database.php');
if(isset($_POST['documents']) && $_POST['searchKey1']!=="" && isset($_POST['searchKey1'])){ 
    $searchBy  = $_POST['searchByDocument'];
    // echo $searchBy;
    switch($searchBy){
        case "id" : 
            $sql = "SELECT * FROM property_document WHERE `document_id` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "firstParty" : 
            $sql = "SELECT * FROM property_document WHERE `first_party` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "secondParty" : 
            $sql = "SELECT * FROM property_document WHERE `second_party` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "regnNo" : 
            $sql = "SELECT * FROM property_document WHERE `registration_number` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "volumeNo" : 
            $sql = "SELECT * FROM property_document WHERE `volume_number` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "bookNo" : 
          $sql = "SELECT * FROM property_document WHERE `book_number` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
        case "area" : 
          $sql = "SELECT * FROM property_document WHERE `area` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
        case "regnDate" : 
          $sql = "SELECT * FROM property_document WHERE `date` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
        case "date" : 
          $sql = "SELECT * FROM property_document WHERE `registered_date` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
    }
    // $sql = "SELECT * FROM property_document WHERE `document_id` LIKE '%".trim($_POST['searchKey1'])."' OR `first_party` LIKE '%".trim($_POST['searchKey1'])."' OR `second_party` LIKE '%".trim($_POST['searchKey1'])."' OR `registration_number` LIKE '%".trim($_POST['searchKey1'])."'";
    $result = $conn->query($sql);
    if($result==true){
        if($result->num_rows > 0){
            $id  = 1;
            while($data = $result->fetch_assoc()){
                echo '
            <tr>
                <td class="border px-4 py-2 text-center">'.$id++.'</td>    
                <td class="border px-4 py-2">'.$data['first_party'].'</td>
                <td class="border px-4 py-2">'.$data['second_party'].'</td>
                <td class="border px-4 py-2">'.$data['area'].'</td>
                <td class="border px-4 py-2">'.$data['registration_number'].'</td>
                <td class="border px-4 py-2">'.$data['volume_number'].'</td>
                <td class="border px-4 py-2">'.$data['book_number'].'</td>
                <td class="border px-4 py-2">'.$data['date'].'</td>
                <td class="border px-4 py-2">'.$data['registered_date'].'</td>
                <td class="border px-4 py-2">
                    <a href ="editDocument.php?id='.$data['document_id'].'" class="bg-blue-200 cursor-pointer rounded px-1 m-2">
                            <i class="fas fa-edit text-green-800 hover:text-black"></i></a>
                    <a class="bg-blue-200 cursor-pointer rounded px-1 m-2" onclick="deleteDocument(this)"  data-document-id = "'.$data['document_id'].'">
                            <i class="fas fa-trash text-red-800 hover:text-black"></i>
                    </a>
                </td>
            </tr>';
            }
        }else {
            echo "404";
        }
    }else {
        echo "Error by : ".$conn->error;
    }
    
}else{
    // if search not found return the default data
    if(!isset($_POST['nextId'])){
        $nextId = 0;
        $sql = "SELECT  * FROM property_document ORDER BY document_id DESC LIMIT 10 OFFSET $nextId";
    }else {
        $sql = "SELECT  * FROM property_document ORDER BY document_id DESC LIMIT 10 OFFSET ".$_POST['nextId']."";
    }
    $result = $conn->query($sql);
    if($result==true){
        if($result->num_rows > 0){
            $id  = 1;
            while($data = $result->fetch_assoc()){
                echo '
            <tr>
                <td class="border px-4 py-2 text-center">'.$id++.'</td>    
                <td class="border px-4 py-2">'.$data['first_party'].'</td>
                <td class="border px-4 py-2">'.$data['second_party'].'</td>
                <td class="border px-4 py-2">'.$data['area'].'</td>
                <td class="border px-4 py-2">'.$data['registration_number'].'</td>
                <td class="border px-4 py-2">'.$data['volume_number'].'</td>
                <td class="border px-4 py-2">'.$data['book_number'].'</td>
                <td class="border px-4 py-2">'.$data['date'].'</td>
                <td class="border px-4 py-2">'.$data['registered_date'].'</td>
                <td class="border px-4 py-2">
                    <a href ="editDocument.php?id='.$data['document_id'].'" class="bg-blue-200 cursor-pointer rounded px-1 m-2">
                            <i class="fas fa-edit text-green-800 hover:text-black"></i></a>
                    <a class="bg-blue-200 cursor-pointer rounded px-1 m-2" onclick="deleteDocument(this)"  data-document-id = "'.$data['document_id'].'">
                            <i class="fas fa-trash text-red-800 hover:text-black"></i>
                    </a>
                </td>
            </tr>';
            }
        }else {
            echo "404";
        }
    }else {
        echo "Error by : ".$conn->error;
    }
}

?>