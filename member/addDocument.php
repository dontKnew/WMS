<div id='addDocumentFormModal' class="modal-wrapper">
    <div class="overlay close-modal"></div>
    <div class="modal modal-centered">
        <div class="modal-content shadow-lg p-5">
            <div class="border-b p-2 pb-3 pt-0 mb-4">
                    <div class="text-info-dark  py-2 rounded relative" role="alert">
                        <strong class="font-bold">New Registerd Documents Information</strong>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 close-modal close-modal-document cursor-pointer">
                            <svg class="fill-current h-6 w-6 text-info" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
            </div>
            <!-- Modal content -->
            <form id='form_id' class="w-full" autocomplete="off" method="POST">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                            first party name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            id="grid-first-name" type="text" placeholder="John deo" name="firstParty">
                            <span class="errorFirstParty"> </span>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                            second party name
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                            id="grid-last-name" type="text" placeholder="John deo" name="secondParty">
                            <span class="errorSecondParty"> </span>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-number">
                            Registration Number
                        </label>
                        <input
                            type="number"
                            class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                            id="grid-number" type="number" placeholder="1234567" name="registrationNumber">
                            <span class="errorRegistrationNumber"> </span>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                            Volume Number
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                            id="grid-last-name" type="number" placeholder="12345678" name="volumeNumber">
                            <span class="errorVolumeNumber"> </span>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                            Book Number
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                            id="grid-password" type="number" placeholder="01" name="bookNumber">
                            <span class="errorBookNumber"> </span>
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                            Registered Date
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                            id="grid-password" type="date" placeholder="Enter address" name="registeredDate">
                            <span class="errorRegisteredDate"> </span>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                            Area(Location)
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600"
                            id="grid-password" type="text" placeholder="Enter Location" name="area">
                            <span class="errorArea"> </span>
                    </div>
                </div>
                
                <div class="mt-5 text-center">
                    <span class='cursor-pointer mx-2 bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded' onclick="addDocument()"> Add </span>
                    <span class='close-modal cursor-pointer bg-red-200 hover:bg-red-500 text-red-900 font-bold py-2 px-4 rounded'>
                        Close
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>