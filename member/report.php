<?php include_once('header.php');
include_once('./include/reportHeader.php');
include_once('./include/customerReport.php');
include_once('include/employerReport.php');
include('include/documentReport.php');
?>
<span class="reportHeaderTitle">
    <h1 class="text-center mb-1 bg-green-300 text-green-700 py-1 npm rounded-full "> Customer(s) Information Report
        <strong class=" cursor-pointer font-serif text-pink-700 curser-pointer hidePrintingArea"
            onclick="printReport()"> (Print) </strong> </h1>
</span>
<div class="flex justify-between mx-2 my-1">
    <select name="date"
        class="customerDate cursor-pointer  mx-2 px-2  rounded-lg border text-gray-700 border-green-500">
        <option value="allCustomerData" selected> All Report </option>
        <option value="today">Today</option>
        <option value="3days"> Last 3 Days </option>
        <option value="7days"> Last 7 Days </option>
        <option value="14days"> Last 14 Days </option>
        <option value="30days"> Last 30 days </option>
        <option value="3month"> Last 3 Months </option>
        <option value="6month"> Last 6 Months </option>
        <option value="9month"> Last 9 Months </option>
        <option value="12month"> Last 12 Months </option>
    </select>
    <label class="relative block mx-2 hidePrintingArea">
        <span class="sr-only">Search Data </span>
        <span class="absolute text-gray-400  inset-y-0 left-0 flex items-center pl-2">
            <svg class="h-5 w-5  text-gray-400" viewBox="0 0 20 20">
                <path fill="green"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                </path>
            </svg>
        </span>
        <input
            class="pl-8 text-green-dark  placeholder:text-gray-400 rounded-lg border border-green-500 py-2  shadow-sm focus:outline-none focus:border-gray-200 reportSearch"
            placeholder="Search records..." type="text" name="reportSearch">
    </label>
</div>
<div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 my-1">
    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
        <small class="text-gray-600 reportTotalCustomer rounded-lg  mx-2 flex justify-center bg-gray-200 my-1">Total
            Record is 29 records
        </small>
        <span class="errorAddcustomer"><?php if(isset($errorMsg)){echo $errorMsg;} ?> </span>
        <div class="px-2 ">
            <table class="table-responsive rounded customeReportCustomer    ">
                <thead class="viewHeading">
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
                    </tr>
                </thead>
                <tbody class="reportCustomer reportSearchTable">
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>