<?php include_once('header.php'); 
if(isset($_REQUEST['updateDocument'])){
    $sql = "UPDATE  property_document SET `first_party` = '".$_POST['firstParty']."', `second_party` = '".$_POST['secondParty']."', `area` = '".$_POST['area']."', `registration_number` = '".$_POST['registrationNumber']."', `book_number` = '".$_POST['bookNumber']."', `volume_number` = '".$_POST['volumeNumber']."', `date` = '".$_POST['registeredDate']."' WHERE document_id = '".$_GET['id']."'";
    $result = $conn->query($sql);
    if($result==true){
        echo "<script> console.log('Updated Document')</script>";
        $errorMsg = '<div class="flex items-center mb-2 bg-green-200 text-green-500 text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Document Update Success!</p></div>';
    // echo '<script> setTimeout(function(){ document.getElementsByClassName("errorAddcustomer").style.display = "none";},3000);</script>';
    echo '<script>setTimeout(function(){$(".errorAdddocument").fadeOut();},3000);</script>';
    }else{
        echo "<script> console.log('Error : ' " .$conn->error.")</script>";
    }
}

?>
<h1 class="text-center mb-1 bg-red-300 text-red-700 py-1 npm rounded-full "> Registered Document(s) Information Record
    <i data-modal='addDocumentFormModal' class="modal-trigger fas fa-user-plus cursor-pointer text-gray-800 " data-bs-toggle="tooltip" data-bs-placement="left" title="Add New Employer"></i>
</h1>
<div class="flex flex-col md:flex-row justify-between m-2">
    <div class="flex flex-col items-center md:flex-row mx-2">
    <button data-modal='centeredFormModalAllDocumentDelete'
            class="mx-1 modal-trigger my-1 focus:outline-none hover:bg-red-500 hover:text-white text-red-500 py-2 px-1 border border-red-500 rounded deleteAllDocumentBtn">Delete
            Documents <i class=" fas fa-trash cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="left"
                title="delete all documents data"></i>
        </button>
        <!-- <button data-modal='addDocumentFormModal'
            class="modal-trigger  focus:outline-none hover:bg-pink-500 hover:text-white text-pink-500 py-2 px-4 border border-pink-500 rounded">Add
            Document <i class="fas fa-user-plus cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="left"
                title="Add New Document"></i></button> -->
    </div>
    <div class="flex flex-row items-center justify-center mx-2">
        <select
            class="documentSearchFilter py-2 cursor-pointer my-1 rounded-lg border text-white focus:outline-none focus:border-red-500 border-red-500 bg-red-dark"
            onclick="documentSearchFilter()">
            <option value="" selected> Search By </option>
            <option value="id"> #</option>
            <option value="firstParty"> First Party Name</option>
            <option value="secondParty"> Second Party Name </option>
            <option value="area"> Area(location)</option>
            <option value="regnNo"> Regn.No. </option>
            <option value="volumeNo"> Volume No. </option>
            <option value="bookNo"> Book No. </option>
            <option value="regnDate" class="documentDate"> Regn. Date </option>
            <option value="date" class="documentDate"> date </option>
        </select>
        <label class="relative block mx-2 hidePrintingArea">
            <span class="sr-only">Search Data </span>
            <span class="absolute text-gray-400  inset-y-0 left-0 flex items-center pl-2">
                <svg class="h-5 w-5  text-gray-400" viewBox="0 0 20 20">
                    <path fill="red"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                    </path>
                </svg>
            </span>
            <input disabled
                class="cursor-not-allowed pl-8 text-red-700 placeholder:text-gray-400 rounded-lg border border-red-500 py-2  shadow-sm focus:outline-none focus:border-red-200 reportSearch1 documentSearch"
                placeholder="Search records..." type="text" name="reportSearch">
        </label>
    </div>
</div>
<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <span class="errorAdddocument"><?php if(isset($errorMsg)){echo $errorMsg;} ?></span>
        <!-- <button data-modal='addDocumentFormModal' class="modal-trigger bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 border border-orange-800 rounded">Add Document</button> -->
        <div class="p-3">
            <table class="table-responsive w-full rounded">
                <thead>
                    <tr class="text-center">
                        <th class="border px-4 py-2">#</th>
                        <th class="border px-4 py-2">First Party</th>
                        <th class="border px-4 py-2">Second Party</th>
                        <th class="border px-4 py-2">Area</th>
                        <th class="border px-4 py-2">Regn. No.</th>
                        <th class="border px-4 py-2">Volume No. </th>
                        <th class="border px-4 py-2">Book No.</th>
                        <th class="border px-4 py-2">Regn.Date</th>
                        <th class="border px-4 py-2">Date</th>
                        <th class="border px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody class="propertyDocumentData reportSearchTable">

                </tbody>
            </table>
        </div>
        <div class="flex justify-between mx-3">
            <small class="text-gray-600 colDocuments">Total Documents is </small>
            <div class="inline-flex">
                <button
                    class="bg-gray-200 hover:bg-blue-600 text-gray-900 hover:text-white font-bold py-2 px-4 rounded-l"
                    onclick="previousDocument()">
                    Prev
                </button>
                <button
                    class="bg-gray-200 hover:bg-blue-600 text-gray-900 hover:text-white font-bold py-2 px-4 rounded-r"
                    onclick="nextDocument()">
                    Next
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Add customer form -->
<?php include_once('addDocument.php'); ?>
<?php include_once('include/documentConfirmation.php'); ?>
<?php include_once('footer.php'); ?>