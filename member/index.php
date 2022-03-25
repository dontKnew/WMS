<?php include_once('header.php'); ?>
<div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
    <div class="shadow-lg bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col text-center">
            <a href="customer_info.php" class="no-underline text-white text-2xl totalCustomer">
                0
            </a>
            <a href="customer_info.php" class="no-underline text-white text-lg">
                    Customers
            </a>
        </div>
    </div>
    <div class="shadow bg-red-600 border-l-8 hover:bg-red-dark border-red-dark mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col text-center">
            <a href="reg_document.php" class="no-underline text-white text-2xl totalDocuments">
                0
            </a>
            <a href="reg_document.php" class="no-underline text-white text-lg">
                    Reg. Document
            </a>
        </div>
    </div>

    <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col text-center">
            <a href="employers_info.php" class="no-underline text-white text-2xl totalEmployers">
                0
            </a>
            <a href="employers_info.php" class="no-underline text-white text-lg">
                    Employers
            </a>
        </div>
    </div>

    <div class="shadow bg-blue-500 border-l-8 hover:bg-blue-dark border-blue-dark mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col text-center">
            <a href="#" class="no-underline text-white text-2xl totalIncome">
                0 (&#8377;)
            </a>
            <a href="" class="no-underline text-white text-lg">
                Income
            </a>
        </div>
    </div>
    <div class="shadow bg-purple-500 border-l-8 hover:bg-purple-dark border-purple-dark mb-2 p-2 md:w-1/4 mx-2">
        <div class="p-4 flex flex-col text-center">
            <a href="#" class="no-underline text-white text-2xl totalBalanced">
                0 (&#8377;)
            </a>
            <a href="#" class="no-underline text-white text-lg">
                Balanced
            </a>
        </div>
    </div>
</div>

<!-- Table -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full my-2">
    <div class="px-6 py-2 border-b border-light-grey ">
        <div class="font-bold text-xl text-success">Last few New Customers <i class="fas fa-users"> </i></div>
    </div>
    <div class="table-responsive">
        <table class="table text-grey-darkest">
            <thead class="bg-grey-dark text-white text-normal">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Purpose</th>
                <th scope="col">Charges (&#8377;)</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT  * FROM customers_wms ORDER BY id DESC LIMIT 5";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    $id = 1;
                    while($data = $result->fetch_assoc()){
                        echo '<tr>
                                <th scope="row">'.$id++.'</th>
                                <td>
                                    <button class="bg-success hover:bg-success-dark text-white font-light py-1 px-2 rounded-full">
                                        '.$data['name'].'
                                    </button>
                                </td>
                                <td>'.$data['mobile_number'].'</td>
                                <td>'.$data['purpose'].'</td>
                                <td>
                                    <span class="text-green-500">'.$data['charges'].'</span>
                                </td>
                            </tr>';

                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Table  -->

<!-- Last Fews documents... -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full mt-4">
    <div class="px-6 py-2 border-b border-light-grey">
        <div class="font-bold text-xl text-red-500">Last Few New Documents <i class="fas fa-address-card"> </i> </div>
    </div>
    <div class="table-responsive">
        <table class="table text-grey-darkest">
            <thead class="bg-grey-dark text-white text-normal">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Party</th>
                <th scope="col">Second Party</th>
                <th scope="col">Area</th>
                <th scope="col">Regn. Date</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $sql1 = "SELECT  * FROM property_document ORDER BY document_id DESC LIMIT 5";
                $result1 = $conn->query($sql1);
                if($result1==true){
                    $id = 1;
                    while($data = $result1->fetch_assoc()){
                        echo '<tr>
                                <th scope="row">'.$id++.'</th>
                                <td>
                                    <button class="bg-red-500 hover:bg-red-dark text-white font-light py-1 px-2 rounded-full">
                                        '.$data['first_party'].'
                                    </button>
                                </td>
                                <td>
                                <button class="bg-red-500 hover:bg-red-dark text-white font-light py-1 px-2 rounded-full">
                                        '.$data['second_party'].'
                                    </button>
                                </td>
                                <td>'.$data['area'].'</td>
                                <td>
                                    <span class="text-green-500">'.$data['date'].'</span>
                                </td>
                            </tr>';

                    }
                }else{
                    echo $conn->error;
                }

                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Table  -->

<!-- Last Fews documents... -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full mt-4">
    <div class="px-6 py-2 border-b border-light-grey">
        <div class="font-bold text-xl text-orange-500">Last Few New Employers <i class="fas fa-users-cog"></i></div>
    </div>
    <div class="table-responsive">
        <table class="table text-grey-darkest">
            <thead class="bg-grey-dark text-white text-normal">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Designation</th>
                <th scope="col">Fixed Salary (&#8377;)</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $sql1 = "SELECT  * FROM employers_wms ORDER BY employer_id DESC LIMIT 5";
                $result1 = $conn->query($sql1);
                if($result1==true){
                    $id = 1;
                    while($data = $result1->fetch_assoc()){
                        echo '<tr>
                                <th scope="row">'.$id++.'</th>
                                <td>
                                    <button class="bg-orange-500 hover:bg-orange-dark text-white font-light py-1 px-2 rounded-full">
                                        '.$data['name'].'
                                    </button>
                                </td>
                                <td>'.$data['contact_number'].'</td>
                                <td>'.$data['designation'].'</td>
                                <td>
                                    <span class="text-green-500">'.$data['fixed_salary'].'</span>
                                </td>
                            </tr>';

                    }
                }else{
                    echo $conn->error;
                }

                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Table  -->
<?php include_once('footer.php'); ?>