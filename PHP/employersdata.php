<?php
require_once('../database/database.php');

if(isset($_POST['employers']) && $_POST['searchKey1']!=="" && isset($_POST['searchKey1'])){ 
  // if search data found , reocrd will be fetch in the doucments
  $searchBy  = $_POST['searchByEmployer'];
    // echo $searchBy;
    switch($searchBy){
        case "id" : 
            $sql = "SELECT * FROM employers_wms WHERE `employer_id` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "name" : 
            $sql = "SELECT * FROM employers_wms WHERE `name` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "fatherName" : 
            $sql = "SELECT * FROM employers_wms WHERE `father_name` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "contact" : 
            $sql = "SELECT * FROM employers_wms WHERE `contact_number` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "designation" : 
            $sql = "SELECT * FROM employers_wms WHERE `designation` LIKE '%".trim($_POST['searchKey1'])."'";
            break;
        case "address" : 
          $sql = "SELECT * FROM employers_wms WHERE `address` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
        case "fixedSalary" : 
          $sql = "SELECT * FROM employers_wms WHERE `fixed_salary` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
        case "DOJ" : 
          $sql = "SELECT * FROM employers_wms WHERE `DOJ` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
        case "DOL" : 
          $sql = "SELECT * FROM employers_wms WHERE `DOL` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
        case "date" : 
          $sql = "SELECT * FROM employers_wms WHERE `registered_date` LIKE '%".trim($_POST['searchKey1'])."'";
          break;
    }
  // $sql = "SELECT * FROM employers_wms WHERE `employer_id` LIKE '%".trim($_POST['searchKey1'])."' OR `name` LIKE '%".trim($_POST['searchKey1'])."' ";
  $result = $conn->query($sql);
  if($result==true){
      if($result->num_rows > 0){
        $id  = 1;
          while($data = $result->fetch_assoc()){
            echo '<tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$id++.'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex">
                <div class="flex-shrink-0 h-10 w-10">
                  <img class="h-10 w-10 rounded-full employerIcon" src="../dist/images/employer'.$data['employer_image'].'.png" alt="employerImage'.$data['employer_image'].'">
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">
                      '.$data['name'].'
                  </div>
                  <div class="text-sm text-gray-500">
                    <a href="tel:+91'.$data['contact_number'].'"> +91'.$data['contact_number'].' </a>
                  </div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['father_name'].'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['address'].'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['designation'].'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['fixed_salary'].'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['DOJ'].'</div>
              </td>';
                  if(isset($data['DOL'])){
                      echo '<td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-red-600">'.$data['DOL'].'</div>
                  </td>';
                  }else {
                      echo '<td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-green-900">Still Working</div>
                  </td>';
                  }              
            echo '<td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
              <a href="editEmployer.php?id='.$data['employer_id'].'" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              <a href="#" class="text-red-600 hover:text-red-900" data-employer-id="'.$data['employer_id'].'" onclick="deleteEmployer(this)">Remove</a>
            </td>
          </tr>';
        }
      }else{
        echo "404";
      }
  }else {
      echo "Error by : ".$conn->error;
  }
}else{
  // if search data not found default data will be replaced : 
  if(!isset($_POST['nextId'])){
    $nextId = 0;
    $sql = "SELECT  * FROM employers_wms ORDER BY employer_id DESC LIMIT 10 OFFSET $nextId";
  }else {
    $sql = "SELECT  * FROM employers_wms ORDER BY employer_id DESC LIMIT 10 OFFSET  ".$_POST['nextId']."";
  }
  $result = $conn->query($sql);
  if($result==true){
      if($result->num_rows > 0){
        $id  = 1;
          while($data = $result->fetch_assoc()){
            echo '<tr class="employeraRow">
            <td class="px-6 py-4 whitespace-nowrap text-center">
              <div class="text-sm text-gray-900">'.$id++.'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex">
                <div class="flex-shrink-0 h-10 w-10">
                <img class="h-10 w-10 rounded-full employerIcon" src="../dist/images/employer'.$data['employer_image'].'.png" alt="employerImage'.$data['employer_image'].'">
                </div>
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">
                      '.$data['name'].'
                  </div>
                  <div class="text-sm text-gray-500">
                    <a href="tel:+91'.$data['contact_number'].'"> +91'.$data['contact_number'].' </a>
                  </div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['father_name'].'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['address'].'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['designation'].'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['fixed_salary'].'</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">'.$data['DOJ'].'</div>
              </td>';
                  if(isset($data['DOL'])){
                      echo '<td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-red-600">'.$data['DOL'].'</div>
                  </td>';
                  }else {
                      echo '<td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-green-900">Still Working</div>
                  </td>';
                  }              
            echo '<td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
              <a href="editEmployer.php?id='.$data['employer_id'].'" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              <a href="#" class="text-red-600 hover:text-red-900" data-employer-id="'.$data['employer_id'].'" onclick="deleteEmployer(this)">Remove</a>
            </td>
          </tr>';
        }
      }else{
        echo "404";
      }
  }else {
      echo "Error by : ".$conn->error;
  }
}
?>