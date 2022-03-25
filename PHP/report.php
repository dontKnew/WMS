<?php
include_once('../database/database.php');
    if(isset($_POST['date'])){
        if($_POST['date']=="all"){
            $sql = "SELECT * FROM customers_wms"; 
        }else{
            $sql = "SELECT * FROM customers_wms WHERE registered_date BETWEEN '".$_POST['date']."' AND '".$_POST['today']."'"; 
        }
        $result = $conn->query($sql);
        if($result==true){
            // $date =  $_POST['date'];
            echo ' 
            <thead>
                <tr class="text-center">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Status</th>';
                    if($_POST['name']!=""){echo'<th class="border px-4 py-2">Name</th>';}
                    if($_POST['father']!=""){echo'<th class="border px-4 py-2">Father</th>';}
                    if($_POST['contact']!=""){echo'<th class="border px-4 py-2">Contact</th>';}
                    if($_POST['purpose']!=""){echo'<th class="border px-4 py-2">Purpose</th>';}
                    if($_POST['charges1']!=""){echo'<th class="border px-4 py-2">Charges</th>';}
                    if($_POST['recieved']!=""){echo'<th class="border px-4 py-2">Received</th>';}
                    if($_POST['balanced']!=""){echo'<th class="border px-4 py-2">balanced</th>';}
                    if($_POST['address']!=""){echo'<th class="border px-4 py-2">Address</th>';}
                    if($_POST['date1']!=""){echo'<th class="border px-4 py-2">Date</th>';}
                   echo '
                </tr>
            </thead>
            <tbody class="reportCustomer">';
            $id = 1;
            while($data = $result->fetch_assoc()){
                echo '
                <tr>
                    <td class="border px-4 py-2 ">'.$id++.'</td>
                    <td class="border px-4 py-2 text-center">'; if($data['work_status']==0){echo '<span class=" p-1 rounded  font-bold text-red-500 bg-red-200">Progression</span>';} elseif($data['work_status']==1){echo '<span class=" p-1 rounded  font-bold text-pink-500 bg-pink-200">Waiting</span>';}elseif($data['work_status']==2){echo '<span class=" p-1 rounded  font-bold text-green-500 bg-green-200">Completed</span>';} echo '</td>';
                    if($_POST['name']!=""){echo'<td class="border px-4 py-2">'.$data['name'].'</td>';} 
                    if($_POST['father']!=""){echo'<td class="border px-4 py-2">'.$data['father_name'].'</td>';}
                    if($_POST['contact']!=""){echo'<td class="border px-4 py-2">'.$data['mobile_number'].'</td>';}
                    if($_POST['purpose']!=""){echo'<td class="border px-4 py-2">'.$data['purpose'].'</td>';}
                    if($_POST['charges1']!=""){echo'<td class="border px-4 py-2">'.$data['charges'].'</td>';}
                    if($_POST['recieved']!=""){echo'<td class="border px-4 py-2">'.$data['recieved'].'</td>';}
                    if($_POST['balanced']!=""){echo'<td class="border px-4 py-2">'.$data['balanced'].'</td>';}
                    if($_POST['address']!=""){echo'<td class="border px-4 py-2">'.$data['address'].'</td>';}
                    if($_POST['date1']!=""){echo'<td class="border px-4 py-2">'.$data['registered_date'].'</td>';}
                    echo '
            </tr>';
            } echo '</tbody>';
        }else{
            echo "Error: ".$conn->error;
        }  
    }
    if(isset($_POST['fetchreport'])){   
        $sql = "SELECT  * FROM customers_wms";
        $result = $conn->query($sql);
        if($result==true){
            if($result->num_rows > 0){
                $id = 1;
                while($data = $result->fetch_assoc()){
                    echo '
                    <tr class="printReportRow">
                        <td class="border px-4 py-2 ">'.$id++.'</td>
                        <td class="border px-4 py-2 text-center">'; if($data['work_status']==0){echo '<span class=" p-1 rounded  font-bold text-red-500 bg-red-200">Progression</span>';} elseif($data['work_status']==1){echo '<span class=" p-1 rounded  font-bold text-pink-500 bg-pink-200">Waiting</span>';}elseif($data['work_status']==2){echo '<span class=" p-1 rounded  font-bold text-green-500 bg-green-200">Completed</span>';} echo '</td>
                        <td class="border px-4 py-2">'.$data['name'].'</td>
                        <td class="border px-4 py-2">'.$data['father_name'].'</td>
                        <td class="border px-4 py-2">'.$data['mobile_number'].'</td>
                        <td class="border px-4 py-2">'.$data['purpose'].'</td>
                        <td class="border px-4 py-2">'.$data['charges'].'</td>
                        <td class="border px-4 py-2">'.$data['recieved'].'</td>
                        <td class="border px-4 py-2">'.$data['balanced'].'</td>
                        <td class="border px-4 py-2">'.$data['address'].'</td>
                        <td class="border px-4 py-2">'.$data['registered_date'].'</td>
                </tr>';
                }
            }
        } 
    }

if(isset($_POST['lastDateDocument'])){
    if($_POST['lastDateDocument']=="allDocument"){
        echo "all doucment";
        $sql = "SELECT  * FROM property_document";
    }else{
        echo "document with date";
        $sql = "SELECT * FROM property_document WHERE registered_date BETWEEN '".$_POST['lastDateDocument']."' AND '".$_POST['today']."'"; 
    }
    $result = $conn->query($sql);
    if($result==true){
            echo ' 
            <thead>
                <tr class="text-center">
                    <th class="border px-4 py-2">#</th>';
                    if($_POST['firstParty']!=""){echo'<th class="border px-4 py-2">First Party</th>';}
                    if($_POST['secondParty']!=""){echo'<th class="border px-4 py-2">Second Party</th>';}
                    if($_POST['area']!=""){echo'<th class="border px-4 py-2">Area</th>';}
                    if($_POST['regnNo']!=""){echo'<th class="border px-4 py-2">Regn.No.</th>';}
                    if($_POST['volumeNo']!=""){echo'<th class="border px-4 py-2">Volume No.</th>';}
                    if($_POST['bookNo']!=""){echo'<th class="border px-4 py-2">Book No.</th>';}
                    if($_POST['regnDate']!=""){echo'<th class="border px-4 py-2">Registration Date</th>';}
                    echo'<th class="border px-4 py-2">Date</th>';
                   echo '
                </tr>
            </thead>
            <tbody class="reportCustomer reportSearchTable">';
            $id = 1;
            while($data = $result->fetch_assoc()){
                    echo '
                <trc>
                <td class="border px-4 py-2 ">'.$id++.'</td>';
                if($_POST['firstParty']!=""){echo'<td class="border px-4 py-2">'.$data['first_party'].'</td>';} 
                if($_POST['secondParty']!=""){echo'<td class="border px-4 py-2">'.$data['second_party'].'</td>';}
                if($_POST['area']!=""){echo'<td class="border px-4 py-2">'.$data['area'].'</td>';}
                if($_POST['regnNo']!=""){echo'<td class="border px-4 py-2">'.$data['registration_number'].'</td>';}
                if($_POST['volumeNo']!=""){echo'<td class="border px-4 py-2">'.$data['volume_number'].'</td>';}
                if($_POST['bookNo']!=""){echo'<td class="border px-4 py-2">'.$data['book_number'].'</td>';}
                if($_POST['regnDate']!=""){echo'<td class="border px-4 py-2">'.$data['date'].'</td>';}
                echo'<td class="border px-4 py-2">'.$data['registered_date'].'</td>';
                echo '
        </tr>';
            } echo '</tbody>';
    }else{
        echo $conn->error;
    }
    
}

if(isset($_POST['lastDateEmployer'])){
    if($_POST['lastDateEmployer']=="allEmployer"){
        echo "all doucment";
        $sql = "SELECT  * FROM employers_wms";
    }else{
        echo "document with date";
        $sql = "SELECT * FROM employers_wms WHERE `date` BETWEEN '".$_POST['lastDateEmployer']."' AND '".$_POST['today']."'"; 
    }
    $result = $conn->query($sql);
    if($result==true){
            echo ' 
            <thead>
                <tr class="text-center">
                    <th class="border px-4 py-2">#</th>';
                    if($_POST['name']!=""){echo'<th class="border px-4 py-2">Name</th>';}
                    if($_POST['fatherName']!=""){echo'<th class="border px-4 py-2">Father Name</th>';}
                    if($_POST['contact']!=""){echo'<th class="border px-4 py-2">Contact</th>';}
                    if($_POST['address']!=""){echo'<th class="border px-4 py-2">Address</th>';}
                    if($_POST['designation']!=""){echo'<th class="border px-4 py-2">designation</th>';}
                    if($_POST['fixedSalary']!=""){echo'<th class="border px-4 py-2">Fixed Salary </th>';}
                    if($_POST['DOJ']!=""){echo'<th class="border px-4 py-2">DOJ</th>';}
                    if($_POST['DOL']!=""){echo'<th class="border px-4 py-2">DOL</th>';}
                    echo'<th class="border px-4 py-2">Date</th>';
                   echo '
                </tr>
            </thead>
            <tbody class="reportCustomer reportSearchTable">';
            $id = 1;
            while($data = $result->fetch_assoc()){
                    echo '
                <tr>
                <td class="border px-4 py-2 ">'.$id++.'</td>';
                if($_POST['name']!=""){echo'<td class="border px-4 py-2">'.$data['name'].'</td>';} 
                if($_POST['fatherName']!=""){echo'<td class="border px-4 py-2">'.$data['father_name'].'</td>';}
                if($_POST['contact']!=""){echo'<td class="border px-4 py-2">'.$data['contact_number'].'</td>';}
                if($_POST['address']!=""){echo'<td class="border px-4 py-2">'.$data['address'].'</td>';}
                if($_POST['designation']!=""){echo'<td class="border px-4 py-2">'.$data['designation'].'</td>';}
                if($_POST['fixedSalary']!=""){echo'<td class="border px-4 py-2">'.$data['fixed_salary'].'</td>';}
                if($_POST['DOJ']!=""){echo'<td class="border px-4 py-2">'.$data['DOJ'].'</td>';}
                if($_POST['DOL']!=""){echo'<td class="border px-4 py-2">'.$data['DOL'].'</td>';}
                echo'<td class="border px-4 py-2">'.$data['date'].'</td>';
                echo '
        </tr>';
            } echo '</tbody>';
    }else{
        echo $conn->error;
    }
    
}
?>