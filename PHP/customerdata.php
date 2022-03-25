<?php
require_once('../database/database.php');
if(isset($_POST['customer']) && $_POST['searchKey1']!=="" && isset($_POST['searchKey1'])){
    $searchBy  = $_POST['searchByCustomer'];
    // echo $searchBy;
    switch($searchBy){
        case "id" : 
            $sql = "SELECT * FROM customers_wms WHERE `id` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "status" : 
            $sql = "SELECT * FROM customers_wms WHERE `work_status` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "name" : 
            $sql = "SELECT * FROM customers_wms WHERE `name` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "fatherName" : 
            $sql = "SELECT * FROM customers_wms WHERE `father_name` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "address" : 
            $sql = "SELECT * FROM customers_wms WHERE `address` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "purpose" : 
            $sql = "SELECT * FROM customers_wms WHERE `purpose` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "date" : 
            $sql = "SELECT * FROM customers_wms WHERE `registered_date` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
    }
    // $sql = "SELECT * FROM customers_wms WHERE `id` LIKE '%".trim($_POST['searchKey1'])."' OR `name` LIKE '%".trim($_POST['searchKey1'])."' OR `father_name` LIKE '%".trim($_POST['searchKey1'])."' OR `mobile_number` LIKE '%".trim($_POST['searchKey1'])."'";
    $result = $conn->query($sql);
    if($result==true){
        if($result->num_rows > 0){
            $id  = 1;
            while($data = $result->fetch_assoc()){
                echo '
                <tr>
                    <td class="border px-4 py-2 text-center">'.$id++.'</td>
                    <td class="border px-4 py-2 text-center">'; if($data['work_status']==1){echo '<span class=" p-1 rounded  font-bold text-pink-500 bg-pink-200">Waiting</span>';} elseif($data['work_status']==0){echo '<span class=" p-1 rounded  font-bold text-red-500 bg-red-200">Progression</span>';}elseif($data['work_status']==2){echo '<span class=" p-1 rounded  font-bold text-green-500 bg-green-200">Delivered</span>';} echo '</td>
                    <td class="border px-4 py-2">'.$data['name'].'</td>
                    <td class="border px-4 py-2">'.$data['father_name'].'</td>
                    <td class="border px-4 py-2">'.$data['mobile_number'].'</td>
                    <td class="border px-4 py-2">'.$data['purpose'].'</td>
                    <td class="border px-4 py-2">'.$data['charges'].'</td>
                    <td class="border px-4 py-2">'.$data['recieved'].'</td>
                    <td class="border px-4 py-2">'.$data['balanced'].'</td>
                    <td class="border px-4 py-2">'.$data['address'].'</td>
                    <td class="border px-4 py-2">'.$data['registered_date'].'</td>
                    <td class="border px-4 py-2">
                        <a data-modal="editFormModal" class="bg-blue-200 cursor-pointer rounded px-1 m-2 modal-trigger"  href="editCustomer.php?id='.$data['id'].'" >
                            <i class="fas fa-edit text-green-800 hover:text-black"></i></a>
                        <a class="bg-blue-200 cursor-pointer rounded px-1 m-2 deleteCustomer" onclick="deleteCustomer(this)" data-customer-id = "'.$data['id'].'">
                            <i class="fas fa-trash text-red-800 hover:text-black"></i>
                        </a>
                    </td>
            </tr>';
            }
        }else{
            echo "";
        }
    } else{
        $conn->error;
    }

}else{
    // if search key not found data, return default the data
    if(!isset($_POST['nextId'])){
        $nextId = 0;
        $sql = "SELECT  * FROM customers_wms ORDER BY id DESC LIMIT 10 OFFSET $nextId";
    }else {
        $sql = "SELECT  * FROM customers_wms ORDER BY id DESC LIMIT 10 OFFSET ".$_POST['nextId']."";
    }
    $result = $conn->query($sql);
    if($result==true){
        if($result->num_rows > 0){
            $id  = 1;
            while($data = $result->fetch_assoc()){
                echo '
                <tr>
                    <td class="border px-4 py-2 text-center">'.$id++.'</td>
                    <td class="border px-4 py-2 text-center">'; if($data['work_status']==1){echo '<span class=" p-1 rounded  font-bold text-pink-500 bg-pink-200">Waiting</span>';} elseif($data['work_status']==0){echo '<span class=" p-1 rounded  font-bold text-red-500 bg-red-200">Progression</span>';}elseif($data['work_status']==2){echo '<span class=" p-1 rounded  font-bold text-green-500 bg-green-200">Delivered</span>';} echo '</td>
                    <td class="border px-4 py-2">'.$data['name'].'</td>
                    <td class="border px-4 py-2">'.$data['father_name'].'</td>
                    <td class="border px-4 py-2">'.$data['mobile_number'].'</td>
                    <td class="border px-4 py-2">'.$data['purpose'].'</td>
                    <td class="border px-4 py-2">'.$data['charges'].'</td>
                    <td class="border px-4 py-2">'.$data['recieved'].'</td>
                    <td class="border px-4 py-2">'.$data['balanced'].'</td>
                    <td class="border px-4 py-2">'.$data['address'].'</td>
                    <td class="border px-4 py-2">'.$data['registered_date'].'</td>
                    <td class="border px-4 py-2">
                        <a data-modal="editFormModal" class="bg-blue-200 cursor-pointer rounded px-1 m-2 modal-trigger"  href="editCustomer.php?id='.$data['id'].'" >
                            <i class="fas fa-edit text-green-800 hover:text-black"></i></a>
                        <a class="bg-blue-200 cursor-pointer rounded px-1 m-2 deleteCustomer" onclick="deleteCustomer(this)" data-customer-id = "'.$data['id'].'">
                            <i class="fas fa-trash text-red-800 hover:text-black"></i>
                        </a>
                    </td>
            </tr>';
            }
        }else{
            echo "";
        }
    } else{
        $conn->error;
    }
}

?>