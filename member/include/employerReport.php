<div id='centeredFormModalEmployerReport' class="modal-wrapper"> 
    <div class="overlay close-modal"></div>
    <div class="modal modal-centered">
        <div class="modal-content shadow-lg p-5">
            <div class="border-b p-2 pb-3 pt-0 mb-4">
                <div class="text-red-400  py-2 rounded relative" role="alert">
                    <div class="font-bold text-xl underline underline-offset-8 decoration-neutral-200"> Create Employers
                        Report </div>
                    <span
                        class="absolute top-0 bottom-0 right-0 px-4 py-3 close-modal close-model-customer cursor-pointer">
                        <svg class="fill-current h-6 w-6 text-red-400" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            </div>
            <!-- Modal content -->  
            <div class="flex flex-row mx-5">
            <select
                class="selectEmployer cursor-pointer border border-red-500 form-select form-select-sm appearance-none block w-full px-2 select py-1 text-sm  font-normal text-gray-700  bg-white  bg-clip-padding  bg-no-repeat border  border-solid  border-gray-300  rounded  transition  ease-in-out  m-0 focus:text-gray-700 focus:bg-white focus:border-red-600 focus:outline-none"
                aria-label=".form-select-sm example">
                <option selected class="selected" value="">Please select required Data </option>
                <option value="name">Name</option>
                <option value="fatherName">Father Name
                <option value="contact">contact</option>
                <option value="address">address</option>
                <option value="designation"> Designation</option>
                <option value="fixedSalary">fixed Salary</option>
                <option value="DOL">DOJ</option>
                <option value="DJ">DOJ</option>
            </select>
            <button
                onclick="addPreviewEmployer(this)"
                class="mx-1 bg-white border border-red-500 hover:bg-red-500 hover:text-white text-red-800 font-semibold py-2 px-4 border border-gray-200 rounded shadow">
                Add
            </button>
            </div>
            <div class="error text-center my-2 text-red-500">
            </div>
            <!-- table -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <table class="min-w-full border border-red-800">
                                <thead class="border-b bg-red-800">
                                    <tr class="previewDocumentHeading" id="tablePreviewHeading">
                                        <!-- <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                                            #
                                        </th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b previewDocumentDescription" id="tablePreviewDescription">
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end viewReportBtn">
                <button onclick="fetchEmployerReport()" type="button" class="close-modal close-model-customer mx-3 px-4 py-2 bg-yellow-500 text-white font-bold text-md leading-tight uppercase rounded shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg transition delay-150 duration-300 ease-in-out">View Report</button>
            </div>
            <!-- model end -->
        </div>
    </div>
</div>