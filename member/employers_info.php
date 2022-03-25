<?php include_once('header.php'); 
echo '<script>setTimeout(function(){$(".errorAddemployer").fadeOut();},3000);</script>';
if(isset($_REQUEST['updateEmployer'])){
    $sql = "UPDATE  employers_wms SET `name` = '".$_POST['name']."', `father_name` = '".$_POST['father']."', `contact_number` = '".$_POST['number']."', `address` = '".$_POST['address']."', `designation` = '".$_POST['designation']."', `fixed_salary` = '".$_POST['salary']."', `DOJ` = '".$_POST['DOJ']."', DOL = '".$_POST['DOL']."' WHERE employer_id = '".$_GET['id']."'";
   $result = $conn->query($sql);
   if($result==true){
       echo "<script> console.log('Updated EMPLOYER')</script>";
       $errorMsg = '<div class="flex justify-center mb-2 bg-green-200 text-green-500 text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> DATA Employer Success!</p></div>';
     // echo '<script> setTimeout(function(){ document.getElementsByClassName("errorAddcustomer").style.display = "none";},3000);</script>';
   }else{
       echo "<script> console.log('Error : ' " .$conn->error.")</script>";
   }
}
?>
<h1 class="text-center mb-1 bg-orange-300 text-orange-700 py-1 npm rounded-full "> Emloyer(s) Information Record <i
        data-modal='newEmployerFormModal' class="modal-trigger fas fa-user-plus cursor-pointer text-gray-800 "
        data-bs-toggle="tooltip" data-bs-placement="left" title="Add New Employer"></i> </h1>
<div class="flex flex-col md:flex-row justify-between m-2">
    <div class="flex flex-col items-center md:flex-row mx-2">
        <button data-modal='centeredFormModalAllEmployerDelete'
            class="mx-1 modal-trigger my-1 focus:outline-none hover:bg-red-500 hover:text-white text-red-500 py-2 px-1 border border-red-500 rounded deleteAllEmployerBtn">Delete
            Employers <i class=" fas fa-trash cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="left"
                title="delete all employers data"></i>
        </button>
        <!-- <button data-modal='newEmployerFormModal'
            class="modal-trigger  focus:outline-none hover:bg-orange-500 hover:text-white text-orange-500 py-2 px-4 border border-orange-500 rounded">Add
             Employer <i class="fas fa-user-plus cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="left"
                title="Add New Employer"></i></button> -->
    </div>
    <div class="flex flex-row items-center justify-center mx-2">
        <select
            class="employerSearchFilter p-2  cursor-pointer my-1 rounded-lg border text-white focus:border-orange-500 border-orange-500 bg-orange-dark"
            onclick="employerSearchFilter()">
            <option value="" selected> Search By </option>
            <option value="id">Employer Id</option>
            <option value="name"> Employer Name</option>
            <option value="fatherName"> Father Name </option>
            <option value="designation"> Designation</option>
            <option value="address"> Address </option>
            <option value="contact"> Contact </option>
            <option value="fixedSalary"> fixed Salary </option>
            <option value="DOJ" class="employerDate"> Date of Join </option>
            <option value="DOL" class="employerDate"> Date of Leave </option>
        </select>
        <label class="relative block mx-2 hidePrintingArea">
            <span class="sr-only">Search Data </span>
            <span class="absolute text-gray-400  inset-y-0 left-0 flex items-center pl-2">
                <svg class="h-5 w-5  text-gray-400" viewBox="0 0 20 20">
                    <path fill="orange"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                    </path>
                </svg>
            </span>
            <input disabled
                class="cursor-not-allowed pl-8 text-orange-500 placeholder:text-gray-400 rounded-lg border border-orange-500 py-2  shadow-sm focus:outline-none focus:border-orange-200 reportSearch1 employerSearch"
                placeholder="Search records..." type="text" name="reportSearch">
        </label>
    </div>
</div>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 snap-x ">
        <div class="errorAddemployer"><?php if(isset($errorMsg)){echo $errorMsg;} ?></div>
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 snap-x">
                        <tr>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            #
                            </th>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Employer`s Name
                            </th>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Father Name
                            </th>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Address
                            </th>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Designation
                            </th>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Fixed Salary (&#8377;)
                            </th>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                DOJ
                            </th>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                DOL
                            </th>
                            <th scope="col"
                                class="scroll-ml-6 snap-start px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action
                            </th>
                            <!-- <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</ span>
                            <span class="sr-only">Remove</span>
                          </th -->
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 employersData reportSearchTable">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="flex justify-between mx-3 mt-2">
    <small class="text-gray-600 colEmployers mt-2"> </small>
    <div class="inline-flex">
        <button onclick="previousEmployer()"
            class="bg-gray-200 hover:bg-blue-600 text-gray-900 hover:text-white font-bold py-2 px-4 rounded-l">
            Prev
        </button>
        <button onclick="nextEmployer()"
            class="bg-gray-200 hover:bg-blue-600 text-gray-900 hover:text-white font-bold py-2 px-4 rounded-r">
            Next
        </button>
    </div>
    <!-- Add customer form -->
    <?php include_once('newEmployer.php'); ?>
    <?php include_once('include/employerConfirmation.php'); ?>
    <?php include_once('footer.php'); ?>