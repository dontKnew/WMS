<?php include_once('header.php'); 
if(isset($_REQUEST['updateCustomer'])){
	     $balanced = $_POST['charges']-$_POST['recieved'];
             $sql = "UPDATE  customers_wms SET `name` = '".$_POST['name']."', `father_name` = '".$_POST['father']."', `mobile_number` = '".$_POST['number']."', `purpose` = '".$_POST['purpose']."', `charges` = '".$_POST['charges']."', `recieved` = '".$_POST['recieved']."', `balanced` = '".$balanced."', `address` = '".$_POST['address']."', `work_status` = '".$_POST['customerStatus']."' WHERE id = '".$_GET['id']."'";
              $result = $conn->query($sql);
              if($result==true){
                  echo "<script> console.log('Updated Customer')</script>";
                  $errorMsg = '<div class="flex items-center mb-2 bg-green-200 text-green-500 text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Date Updated Success!</p></div>';
                // echo '<script> setTimeout(function(){ document.getElementsByClassName("errorAddcustomer").style.display = "none";},3000);</script>';
                echo '<script>setTimeout(function(){$(".errorAddcustomer").fadeOut();},3000);</script>';
              }else{
                  echo "<script> console.log('Error : ' " .$conn->error.")</script>";
              }
}else {
    
}
?>
<?php require_once('include/customerConfirmation.php');?>
<h1 class="text-center mb-1 bg-green-300 text-green-700 py-1 npm rounded-full "> Customer(s) Information Record <i
        data-modal='centeredFormModal' class="modal-trigger fas fa-user-plus cursor-pointer text-gray-800 "
        data-bs-toggle="tooltip" data-bs-placement="left" title="Add New Employer"></i></h1>
<div class="flex flex-col md:flex-row justify-between m-2">
    <div class="flex flex-col items-center md:flex-row mx-2">
        <button data-modal='centeredFormModalAllCustomerDelete'
            class="mx-1 modal-trigger sm:text-sm my-1 focus:outline-none hover:bg-red-500 hover:text-white text-red-500 py-2 px-1 border border-red-500 rounded deleteAllCustomerBtn" >Delete Customers <i class=" fas fa-trash cursor-pointer"
                data-bs-toggle="tooltip" data-bs-placement="left" title="delete all customers data"></i>
        </button>
        <!-- <button data-modal='centeredFormModal'
            class="modal-trigger  sm:text-sm focus:outline-none hover:bg-green-500 hover:text-white text-green-500 py-2 px-4 border border-green-500 rounded">Add
            Custmer <i data-modal='centeredFormModal' class="modal-trigger fas fa-user-plus cursor-pointer"
                data-bs-toggle="tooltip" data-bs-placement="left" title="Add New Customer"></i>
        </button> -->
    </div>
    <div class="flex flex-row items-center justify-center mx-2">
        <select name="customeSearchFilter"
            class="mx-1 customerSearchFilter p-1 py-2 px-2  cursor-pointer rounded-lg border text-white fofocus:border-green-500 border-green-500 bg-green-dark" onclick="customeSearchFilter()">
            <option value="" selected> Search By </option>
            <option value="id">#</option>
            <option value="status">Status</option>
            <option value="name"> Customer Name</option>
            <option value="fatherName"> Father Name </option>
            <option value="address"> Address </option>
            <option value="contact"> Contact </option>
            <option value="purpose">  Purpose </option>
            <option value="date">  Date </option>
        </select>
        <div>
        <label class="relative block hideSearchButton my-1">
            <span class="sr-only">Search Data </span>
            <span class="absolute text-gray-400  inset-y-0 left-0 flex items-center pl-2">
                <svg class="h-5 w-5  text-gray-400" viewBox="0 0 20 20">
                    <path fill="green"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                    </path>
                </svg>
            </span>
            <input disabled
                class="cursor-not-allowed  pl-8 text-green-700 placeholder:text-gray-400 rounded-lg border border-green-500 py-2  shadow-sm focus:outline-none focus:border-green-200 reportSearch1 customerSearch"
                placeholder="Search records..." type="text" name="reportSearch">
        </label>
        </div>
    </div>
</div>
<!--Grid Form-->
<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full hideCustomerTable">
        <span class="errorAddcustomer"><?php if(isset($errorMsg)){echo $errorMsg;} ?> </span>
        <div class="flex justify-around">
        </div>
        <div class="p-3">
            <table class="table-responsive w-full rounded">
                <thead>
                    <tr class="text-center">
                        <th class="border px-4 py-2">#</th>
                        <th class="border px-4 py-2">Status</th>
                        <th class="border px-4 py-2">Name</th>
                        <th class="border px-4 py-2">Father</th>
                        <th class="border px-4 py-2">Contact</th>
                        <th class="border px-4 py-2">Purpose</th>
                        <th class="border px-4 py-2">Charges (&#8377;)</th>
                        <th class="border px-4 py-2">Received (&#8377;)</th>
                        <th class="border px-4 py-2">Balanced (&#8377;)</th>
                        <th class="border px-4 py-2">Address</th>
                        <th class="border px-4 py-2">Date</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="customerData reportSearchTable">
                    <!-- <tr>
                        <td class="border px-4 py-2">1</td>    
                        <td class="border px-4 py-2">Micheal Clarke</td>
                        <td class="border px-4 py-2">Sydney</td>
                        <td class="border px-4 py-2">1500</td>
                        <td class="border px-4 py-2">Kapashera</td>
                        <td class="border px-4 py-2">25/10/2021</td>
                        <td class="border px-4 py-2">
                            <a class="bg-blue-200 cursor-pointer rounded px-1 m-2">
                                    <i class="fas fa-edit text-green-800 hover:text-black"></i></a>
                            <a class="bg-blue-200 cursor-pointer rounded px-1 m-2 ">
                                    <i class="fas fa-trash text-red-800 hover:text-black"></i>
                            </a>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <div class="flex justify-between mx-3 customerTableBottom">
            <small class="text-gray-600 colCustomer"></small>
            <div class="inline-flex">
                <button
                    class="bg-gray-200 hover:bg-blue-600 text-gray-900 hover:text-white font-bold py-2 px-4 rounded-l"
                    onclick="previousCustomer()">
                    Prev
                </button>
                <button
                    class="bg-gray-200 hover:bg-blue-600 text-gray-900 hover:text-white font-bold py-2 px-4 rounded-r"
                    onclick="nextCustomer()">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>
<!--/Grid Form-->
<!-- Add customer form -->
<?php include_once('addCustomer.php'); ?>
<?php include_once('footer.php'); ?>