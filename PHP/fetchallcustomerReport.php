<?php
include_once('../database/database.php');
  if(isset($_POST['date1'])){ 
    $sql = "SELECT * FROM customers_wms WHERE registered_date BETWEEN '".$_POST['date1']."' AND '".$_POST['today']."'"; 
  }else {
    $sql = "SELECT * FROM customers_wms"; 
  }
    $result = $conn->query($sql);
    if($result==true){
        // $date =  $_POST['date'];
        echo ' 
            <thead>
                <tr class="text-center">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Father</th>
                    <th class="border px-4 py-2">Contact</th>
                    <th class="border px-4 py-2">Purpose</th>
                    <th class="border px-4 py-2">Charges</th>
                    <th class="border px-4 py-2">Received</th>
                    <th class="border px-4 py-2">balanced</th>
                    <th class="border px-4 py-2">Address</th>
                    <th class="border px-4 py-2">Date</th>
                </tr>
            </thead>
            <tbody class="reportCustomer">';
            $id  = 1;
        while($data = $result->fetch_assoc()){
            echo '
            <tr>
                <td class="border px-4 py-2 ">'.$id++.'</td>
                <td class="border px-4 py-2 text-center">'; if($data['work_status']==0){echo '<span class=" p-1 rounded  font-bold text-pink-500 bg-pink-200">Waiting</span>';} elseif($data['work_status']==1){echo '<span class=" p-1 rounded  font-bold text-red-500 bg-red-200">Progression</span>';}elseif($data['work_status']==2){echo '<span class=" p-1 rounded  font-bold text-green-500 bg-green-200">Delivered</span>';} echo '</td>
                <td class="border px-4 py-2">'.$data['name'].'</td>
                <td class="border px-4 py-2">'.$data['father_name'].'</td>
                <td class="border px-4 py-2">'.$data['mobile_number'].'</td>
                <td class="border px-4 py-2">'.$data['purpose'].'</td>
                <td class="border px-4 py-2">'.$data['charges'].'</td>
                <td class="border px-4 py-2">'.$data['recieved'].'</td>
                <td class="border px-4 py-2">'.$data['balanced'].'</td>
                <td class="border px-4 py-2">'.$data['address'].'</td>
                <td class="border px-4 py-2">'.$data['registered_date'].'</td>
        </tr>
        </tbody>';
        }
    }else{
        echo "Error: ".$conn->error;
    }  
?>