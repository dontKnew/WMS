<div id='centeredFormModalAllCustomerDelete' class="modal-wrapper">
    <div class="overlay close-modal"></div>
    <div class="modal modal-centered">
        <div class="modal-content shadow-lg p-5">
            <div
                class="bg-white rounded-lg md:max-w-md md:mx-auto p-4 fixed inset-x-0 bottom-0 z-50 mb-4 mx-4 md:relative">
                <div class="md:flex items-center">
                    <div
                        class="rounded-full border border-gray-300 flex items-center justify-center w-16 h-16 flex-shrink-0 mx-auto">
                        <i class="text-red-500 fas fa-exclamation-triangle fa-2x"></i>
                    </div>
                    <div class="mt-2  md:ml-6 text-center md:text-left">
                        <p class="font-bold text-red-500">Are you sure ? </p>
                        <p class="text-sm text-gray-700 mt-1">You will lose all of your customers data and this action
                            cannot be undone.
                        </p>
                    </div>
                </div>
                <div class="text-center md:text-right mt-4 md:flex md:justify-end">
                    <button
                        class="cursor-pointer block w-full md:inline-block md:w-auto px-4 py-3 md:py-2 bg-red-200 text-red-700 rounded-lg font-semibold text-sm md:ml-2 md:order-2"
                        onclick="deleteAllCustomerData()">Confirm</button>
                    <button class="close-modal close-model-customer cursor-pointer  block w-full md:inline-block md:w-auto px-4 py-3 md:py-2 bg-gray-200 rounded-lg font-semibold text-sm mt-4
          md:mt-0 md:order-1">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>