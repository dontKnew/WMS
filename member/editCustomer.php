<?php include_once('header.php'); 
if(isset($_GET['id'])){
    $sql = "SELECT * FROM customers_wms WHERE id = '". $_GET['id']."'";
            $result = $conn->query($sql);
            if($result==true){
                $data = $result->fetch_assoc();
                if(isset($data)){
                    echo '
                    <div class="modal-content shadow-lg p-5">
                        <div class="border-b p-2 pb-3 pt-0 mb-4">
                                <div class="text-info-dark  py-2 rounded relative" role="alert">
                                    <strong class="font-bold">Edit Customer '.$data['name'].'`s Data</strong>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3 close-modal close-model-customer cursor-pointer">
                                        <svg class="fill-current h-6 w-6 text-info" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span>
                                </div>
                        </div>
                        <form id="form_edit" class="w-full" autocomplete="off" method="POST" action="customer_info.php?id='.$data['id'].'">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                        Customer full name
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                        value="'.$data['name'].'"
                                        id="grid-first-name" type="text" placeholder="John deo" name="name">
                                        <span class="errorName"> </span>
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                        customer father`s Name
                                    </label>
                                    <input
                                    value="'.$data['father_name'].'"
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        id="grid-last-name" type="text" placeholder="John deo" name="father">
                                        <span class="errorFather"> </span>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-number">
                                        Mobile Number
                                    </label>
                                    <input
                                    value="'.$data['mobile_number'].'"
                                        type="number"
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        id="grid-number" type="text" placeholder="1234567890" name="number">
                                        <span class="errorNumber"> </span>
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                        Purpose
                                    </label>
                                    <input
                                        value="'.$data['purpose'].'"
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        id="grid-last-name" type="text" placeholder="Income,Death Certificate etc." name="purpose">
                                        <span class="errorPurpose"> </span>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                        Customer Address
                                    </label>
                                    <input
                                    value="'.$data['address'].'"
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        id="grid-password" type="text" placeholder="Enter address" name="address">
                                        <span class="errorAddress"> </span>
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                        Select Work Status 
                                    </label>
                                    <select name="customerStatus"
                                        class="mx-1 customerSearchFilter  cursor-pointer appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500">';
                                        if($data['work_status']==0){
                                        echo '<option value="'.$data['work_status'].'" selected> In Progress  </option>
                                            <option value="1"> Waiting </option>
                                            <option value="2"> Completed </option>';
                                        }else if($data['work_status']==1){
                                            echo '<option value="'.$data['work_status'].'" selected> Waiting </option>
                                                <option value="0"> In Progress </option>
                                                <option value="2"> Completed </option>';
                                        }else if($data['work_status']==2){
                                            echo '<option value="'.$data['work_status'].'" selected> Completed </option>
                                                <option value="0"> In Progress </option>
                                                <option value="1"> Waiting </option>';
                                        }
                                    echo '</select>;
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                        Total Charges (&#8377;)
                                    </label>
                                    <input
                                    value="'.$data['charges'].'"
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        id="grid-password" type="number" placeholder="3000" name="charges">
                                        <span class="errorCharges"> </span>
                                </div>
                                <div class="w-full md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                        Recieved (&#8377;)
                                    </label>
                                    <input
                                    value="'.$data['recieved'].'"
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        id="grid-password" type="number" placeholder="2000" name="recieved">
                                        <span class="errorRecieved"> </span>
                                </div>
                                <div class="w-full md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                        Balanced (&#8377;)
                                    </label>
                                    <input
                                    value="'.$data['balanced'].'"
                                        class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                                        id="grid-password" type="number" placeholder="1000" name="balanced" disabled>
                                        <span class="errorBalanced"> </span>
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <input type="submit" value="UPDATE"  name="updateCustomer" class="cursor-pointer mx-2 bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded" />
                                <a href="customer_info.php" class="close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded"> CANCEL </a>
                            </div>
                        </form>
                    </div>
                ';
                }else {
                    echo "<script> location.href='customer_info.php'; </script>";
                }
                
            }else {
                echo "<script> location.href='customer_info.php'; </script>";
                echo $conn->error;
            }
}else {
    echo "<script> location.href='customer_info.php'; </script>";
}

?>

<?php include_once('footer.php'); ?>