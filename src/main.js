// START  ALL EMPLOYER DATA
function deleteAllEmployerData(){
    setTimeout(function(){$(".errorAddemployer").fadeOut();},3000);
    $('.close-model-employer').click();
    $.ajax({
        url:'../PHP/allDeleteData.php',
        method:'POST',
        data:{deleteAllEmployer:"200"},
        success:function(data){

            if(data=="200"){
                $(".errorAddemployer").fadeIn(500, function(){
                    $('.errorAddemployer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> All  employer data Has been deleted </p></div>');
                    getEmployers();;
                    measureCol();                    
                });
            }else if(data=="500"){
                $(".errorAddemployer").fadeIn(500, function(){
                    $('.errorAddemployer').html('<div class="flex items-center mb-2 bg-green-300 text-red-500 text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> No employer data found for delete </p></div>');
                });
            }
        },  
        error:function(){
            
        }
    });
}
// END DELETE ALL EMPLOYER DATA

// START  ALL DOCUMNET DATA
function deleteAllDocumentData(){
    $('.close-model-document').click();
    setTimeout(function(){$(".errorAdddocument").fadeOut();},3000);
    $.ajax({
        url:'../PHP/allDeleteData.php',
        method:'POST',
        data:{deleteAllDocument:"200"},
        success:function(data){ 

            if(data=="200"){
                $(".errorAdddocument").fadeIn(500, function(){
                $('.errorAdddocument').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> All  document data Has been deleted </p></div>');
                getDocuments();
                measureCol();
                });
            }else if(data=="500"){
                    $(".errorAdddocument").fadeIn(500, function(){
                    $('.errorAdddocument').html('<div class="flex items-center mb-2 bg-green-300 text-red-500 text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> No document data found for delete </p></div>');
                });
            }
        },  
        error:function(){
            
        }
    });
}
// END DELETE ALL DOCUMENT DATA


// START DELETE ALL CUSTOMER DATA
function deleteAllCustomerData(){
    $('.close-model-customer').click();
    setTimeout(function(){$(".errorAddcustomer").fadeOut();},3000);
    $.ajax({
        url:'../PHP/allDeleteData.php',
        method:'POST',
        data:{deleteAllCustomer:"200"},
        success:function(data){

            if(data=="200"){
                $(".errorAddcustomer").fadeIn(500, function(){
                $('.errorAddcustomer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> All Customer data Has been deleted </p></div>');
                });
                getCustomers();
                measureCol();
            }else if(data=="500"){
                $(".errorAddcustomer").fadeIn(500, function(){
                    $('.errorAddcustomer').html('<div class="flex items-center mb-2 bg-green-300 text-red-500 text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> No customer data found for delete </p></div>');
                });
            }
        },  
        error:function(){
            
        }
    });
}
// END DELETE ALL CUSTOMER DATA

// START DOCUMENT FILTER SEARCH
var documentSelectedValue;
function documentSearchFilter(){
         documentSelectedValue = $('.documentSearchFilter').val();
         let selected = documentSelectedValue;
        if(selected =="documentDate"){
            document.querySelector('.documentSearch').placeholder = "SearchBy 01-Jan-2021"; 
            $('.documentSearch').prop('disabled',false);
            $('.documentSearch').removeClass('cursor-not-allowed');
            getDocumentSearchFilter();
        }else if(selected!="" && selected!=null){
            document.querySelector('.documentSearch').placeholder = "Search "+selected+ " ..."; 
            $('.documentSearch').prop('disabled',false);
            $('.documentSearch').removeClass('cursor-not-allowed');
            getDocumentSearchFilter();
        }else{
            $('.documentSearch').prop('disabled',true);
            $('.documentSearch').addClass('cursor-not-allowed');
        }
}

function getDocumentSearchFilter(){   
    $(".documentSearch").on("keyup", function() {
        let searchKey = $(this).val();
            $.ajax({
                url:'../PHP/documentdata.php',
                method:'POST',
                data:{searchKey1:searchKey,documents:'ok', searchByDocument:documentSelectedValue},
                success:function(data){
        
                    if(data=="404"){
                        $('.errorAdddocument').html('<div class="bg-teal-300 mb-2 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert"><div class="flex justify-center"><div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div><div><p class="font-bold"> No Result Founds</p><p class="text-sm">Try again with different keywords</p></div></div></div>').fadeIn();
                        $('.propertyDocumentData').html("");
                    }else{
                        $('.propertyDocumentData').html(data);
                        $('.errorAdddocument').html('<div class="bg-teal-300 mb-2 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert"><div class="flex justify-center"><div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div><div><p class="font-bold"> No Result Founds</p><p class="text-sm">Try again with different keywords</p></div></div></div>').fadeOut();
                    }
                },  
                error:function(){
                    
                }
            });
    });
}
// END DOCUMENT FILTER SEARCH

// START EMPLOYER FILTER SEARCH
var employerSelectedValue;
function employerSearchFilter(){
         employerSelectedValue = $('.employerSearchFilter').val();
        
         let selected = employerSelectedValue;
        if(selected =="employerDate"){
            document.querySelector('.employerSearch').placeholder = "SearchBy 01-Jan-2021"; 
            $('.employerSearch').prop('disabled',false);
            $('.employerSearch').removeClass('cursor-not-allowed');
            getEmployerSearchFilter();
        }else if(selected!="" && selected!=null){
            document.querySelector('.employerSearch').placeholder = "Search "+selected+ " ..."; 
            $('.employerSearch').prop('disabled',false);
            $('.employerSearch').removeClass('cursor-not-allowed');
            getEmployerSearchFilter();
        }else{
            $('.employerSearch').prop('disabled',true);
            $('.employerSearch').addClass('cursor-not-allowed');
        }
}
function getEmployerSearchFilter(){
    $(".employerSearch").on("keyup", function() {
        let searchKey = $(this).val();
            $.ajax({
                url:'../PHP/employersdata.php',
                method:'POST',
                data:{searchKey1:searchKey,employers:'ok', searchByEmployer:employerSelectedValue},
                success:function(data){
        
                    if(data=="404"){
                        $('.errorAddemployer').html('<div class="bg-teal-300 mb-2 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert"><div class="flex justify-center"><div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div><div><p class="font-bold"> No Result Founds</p><p class="text-sm">Try again with different keywords</p></div></div></div>').fadeIn();
                        $('.employersData').html("");
                    }else{
                        $('.employersData').html(data);
                        $('.errorAddemployer').html('<div class="bg-teal-300 mb-2 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert"><div class="flex justify-center"><div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div><div><p class="font-bold"> No Result Founds</p><p class="text-sm">Try again with different keywords</p></div></div></div>').fadeOut();
                    }
                },  
                error:function(){
                    
                }
            });
    });
    
}
// END EMPLOYER FILTER SEARCH

// START CUSTOMER FILTER SEARCH
var customerSelectedValue;
function customeSearchFilter(){
         customerSelectedValue = $('.customerSearchFilter').val();
         let selected = customerSelectedValue;
        if(selected =="date"){
            document.querySelector('.customerSearch').placeholder = "SearchBy 01-Jan-2021"; 
            $('.customerSearch').prop('disabled',false);
            $('.customerSearch').removeClass('cursor-not-allowed');
            getCustomerSearchFilter();
        }else if(selected =="status"){
            document.querySelector('.customerSearch').placeholder = "Search "+selected+ " ..."; 
            $('.customerSearch').prop('disabled',false);
            $('.customerSearch').removeClass('cursor-not-allowed');
            getCustomerSearchFilter();
        }else if(selected!="" && selected!=null){
            document.querySelector('.customerSearch').placeholder = "Search "+selected+ " ..."; 
            $('.customerSearch').prop('disabled',false);
            $('.customerSearch').removeClass('cursor-not-allowed');
            getCustomerSearchFilter();
        }else{
            document.querySelector('.customerSearch').placeholder = "Please Select Data ..."; 
            $('.customerSearch').prop('disabled',true);
            $('.customerSearch').addClass('cursor-not-allowed');
        }
}

function getCustomerSearchFilter(){
    $(".customerSearch").on("keyup", function() {
        let searchKey = $(this).val();
        if(searchKey=='in progress'){
            searchKey = 0
        }else if(searchKey=='completed'){
            searchKey = 2
        }else if(searchKey=='waiting'){
            searchKey = 1
        }else{
            searchKey = searchKey;
        }
        console.log(searchKey);
            $.ajax({
                url:'../PHP/customerdata.php',
                method:'POST',
                data:{searchKey1:searchKey,customer:'ok',searchByCustomer:customerSelectedValue},
                success:function(data){
                    // $('.customerData').html(data);
                    if(data=="404"){
                        $('.errorAddcustomer').html('<div class="bg-teal-300 mb-2 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert"><div class="flex justify-center"><div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div><div><p class="font-bold"> No Result Founds</p><p class="text-sm">Try again with different keywords</p></div></div></div>').fadeIn();
                        $('.customerData').html("");
                    }else{
                        $('.customerData').html(data);
                        $('.errorAddcustomer').html('<div class="bg-teal-300 mb-2 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert"><div class="flex justify-center"><div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div><div><p class="font-bold"> No Result Founds</p><p class="text-sm">Try again with different keywords</p></div></div></div>').fadeOut();
                    }
                },  
                error:function(){
                    
                }
            });
    });
}

// START CUSTOMER FILTER SEARCH


// START  PREVIEW EMPLOYER REPORT
function fetchEmployerReport(){
    data = {
        lastDateEmployer:"allEmployer", 
        today:lastDays(0),
        name:checkDataExits("name"),
        fatherName:checkDataExits("fatherName"), 
        contact:checkDataExits("contact"), 
        address:checkDataExits("address"),
        designation:checkDataExits("designation"),
        fixedSalary:checkDataExits("fixedSalary"),
        DOL:checkDataExits("DOL"),
        DOJ:checkDataExits("DOJ"),
        }
        
    $.ajax({
        url:'../PHP/report.php',
        method:'POST',
        data:data,
        success:function(data){

            $('.customeReportCustomer').html( data);
            $('.reportHeaderTitle').html('<h1 class="text-center mb-1 bg-red-300 text-red-700 py-1 npm rounded-full "> Employer(s) Information Report <strong class=" cursor-pointer font-serif text-pink-700 curser-pointer hidePrintingArea" onclick="printReport()"> (Print) </strong> </h1>')
            $('.customerDate option[value="allCustomerData"]').attr("selected", "selected");
            $('.customerDate').on('change', function (e) {
                let optionSelected = $("option:selected", this);
                let valueSelected = this.value;
                var newDate;
                switch(valueSelected){
                    case "today":
                        newDate = lastDays(0);
                        
                    break;
                    case "3days":
                        newDate = lastDays(3);
                        
                    break;
                    case "7days":
                        newDate = lastDays(7);
                        
                    break;
                    case "14days":
                        newDate = lastDays(14);
                        
                    break;
                    case "30days":
                        newDate = lastDays(30);
                        
                    break;
                    case "3month":
                        newDate = lastMonth(3);
                        
                    break;
                    case "6month":
                        newDate = lastMonth(6);
                        
                    break;
                    case "9month":
                        newDate = lastMonth(9);
                        
                    break;
                    case "12month":
                        newDate = lastMonth(12);
                        
                    break;
                    case "allCustomerData":
                        newDate = "allEmployer";
                    default:
                        newDate = "No date was selected";
                }
                $.ajax({
                    url:'../PHP/report.php',
                    method:'POST',
                    data:{
                        lastDateEmployer:newDate,
                        today:lastDays(0),
                        name:checkDataExits("name"),
                        fatherName:checkDataExits("fatherName"), 
                        contact:checkDataExits("contact"), 
                        address:checkDataExits("address"),
                        designation:checkDataExits("designation"),
                        fixedSalary:checkDataExits("fixedSalary"),
                        DOL:checkDataExits("DOL"),
                        DOJ:checkDataExits("DOJ"),
                    },
                    success:function(response){
            
                        $('.reportHeaderTitle').html('<h1 class="text-center mb-1 bg-red-300 text-red-700 py-1 npm rounded-full "> Employer(s) Information Report <strong class=" cursor-pointer font-serif text-pink-700 curser-pointer hidePrintingArea" onclick="printReport()"> (Print) </strong> </h1>')
                        $('.customeReportCustomer').html(response);
                         $('.customerDate option[value="allCustomerData"]').attr("selected", "selected");
                    },  
                    error:function(){
                        
                    }
                });
            });
        },  
        error:function(){
            
        }
    });
}


function addPreviewEmployer(removeBtn){
    let selected = $('.selectEmployer').val();
        if(selected!=""){
              document.querySelector('.previewDocumentHeading').innerHTML += '<th scope="col" class="'+selected.trim()+'Option text-sm font-medium text-white px-6 py-4 text-left"> '+ selected.toUpperCase() + ' </th>' ; 
              document.querySelector('.previewDocumentDescription').innerHTML += '<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> Example </td>' ; 
            $('.selectEmployer').find('option:selected').remove();
            $('.selected').remove();
            $('.viewReportBtn').show();
            removeBtn.innerHTML = "AddMore";
            if($('.selectEmployer option').length==0){
                $('.selectEmployer').remove();
                removeBtn.remove();
            }
        }else{

            $('.error').html("<span class='text-red-500 px-10 py-1'> <i> Please select employer data columns <i class='fas fa-exclamation-triangle'></i> </i>  </span>").fadeIn();
            setTimeout(function(){
                $('.error').html("<span class='text-red-500 px-10 py-1'> <i> Please select employer data columns <i class='fas fa-exclamation-triangle'></i> </i>  </span>").fadeOut()
            },3000);

        }
}
// END PREVIEW EMPLOYER REPORT


// start preview document report
function addPreviewDocument(removeBtn){
    let selected = $('.selectDocument').val();
    // document.querySelector('.previewDocumentHeading').innerHTML +=selected;
        if(selected!=""){
              document.querySelector('.previewDocumentHeading').innerHTML += '<th scope="col" class="'+selected.trim()+'Option text-sm font-medium text-white px-6 py-4 text-left"> '+ selected.toUpperCase() + ' </th>' ; 
            document.querySelector('.previewDocumentDescription').innerHTML += '<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> Example </td>' ; 
            $('.selectDocument').find('option:selected').remove();
            $('.selected').remove();
            $('.viewReportBtn').show();
            removeBtn.innerHTML = "AddMore";
            if($('.selectDocument option').length==0){
                $('.selectDocument').remove();
                removeBtn.remove();
            }
        }else{

            $('.error').html("<span class='text-red-500 px-10 py-1'> <i> Please select document data columns <i class='fas fa-exclamation-triangle'></i> </i>  </span>").fadeIn();
            setTimeout(function(){
                $('.error').html("<span class='text-red-500 px-10 py-1'> <i> Please select document data columns <i class='fas fa-exclamation-triangle'></i> </i>  </span>").fadeOut()
            },3000);

        }
}
function fetchDocumentReport(){
    data = {
        lastDateDocument:"allDocument", 
        today:lastDays(0),
        firstParty:checkDataExits("firstParty"),
        secondParty:checkDataExits("secondParty"), 
        area:checkDataExits("area"), 
        regnNo:checkDataExits("regnNo"),
        volumeNo:checkDataExits("volumeNo"),
        bookNo:checkDataExits("bookNo"),
        regnDate:checkDataExits("regnDate"),
        }
    $.ajax({
        url:'../PHP/report.php',
        method:'POST',
        data:data,
        success:function(data){

            $('.customeReportCustomer').html( data);
            $('.reportHeaderTitle').html('<h1 class="text-center mb-1 bg-red-300 text-red-700 py-1 npm rounded-full "> Documents(s) Information Report <strong class=" cursor-pointer font-serif text-pink-700 curser-pointer hidePrintingArea" onclick="printReport()"> (Print) </strong> </h1>')
            let ok = $('.customerDate option[value="today"]').attr("selected", "selected");

            $('.customerDate').on('change', function (e) {
                let optionSelected = $("option:selected", this);
                let valueSelected = this.value;
                var newDate;
                switch(valueSelected){
                    case "today":
                        newDate = lastDays(0);
                        
                    break;
                    case "3days":
                        newDate = lastDays(3);
                        
                    break;
                    case "7days":
                        newDate = lastDays(7);
                        
                    break;
                    case "14days":
                        newDate = lastDays(14);
                        
                    break;
                    case "30days":
                        newDate = lastDays(30);
                        
                    break;
                    case "3month":
                        newDate = lastMonth(3);
                        
                    break;
                    case "6month":
                        newDate = lastMonth(6);
                        
                    break;
                    case "9month":
                        newDate = lastMonth(9);
                        
                    break;
                    case "12month":
                        newDate = lastMonth(12);
                        
                    break;
                    case "allCustomerData":
                        newDate = "allDocument";
                    default:
                        newDate = "No date was selected";
                }
                $.ajax({
                    url:'../PHP/report.php',
                    method:'POST',
                    data:{
                        lastDateDocument:newDate,
                        today:lastDays(0),
                        firstParty:checkDataExits("firstParty"),
                        secondParty:checkDataExits("secondParty"), 
                        area:checkDataExits("area"), 
                        regnNo:checkDataExits("regnNo"),
                        volumeNo:checkDataExits("volumeNo"),
                        bookNo:checkDataExits("bookNo"),
                        regnDate:checkDataExits("regnDate"),
                    },
                    success:function(response){
                        $('.reportHeaderTitle').html('<h1 class="text-center mb-1 bg-red-300 text-red-700 py-1 npm rounded-full "> Documents(s) Information Report <strong class=" cursor-pointer font-serif text-pink-700 curser-pointer hidePrintingArea" onclick="printReport()"> (Print) </strong> </h1>')
                        $('.customeReportCustomer').html(response);
                         $('.customerDate option[value="allCustomerData"]').attr("selected", "selected");
                        
                        
                    },  
                    error:function(){
                        
                    }
                });
            });
        },  
        error:function(){
            
        }
    });
}
// end preview  doucment report


function printReport(){
    // first hide unused printing area
    $('.hidePrintingArea').hide();
    
    // then call print function
    let print = window.print();

    // restore the hidden printing area
    $('.hidePrintingArea').show();
}

// for report tab
$(".reportSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase().trim();
    $(".reportSearchTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
$('.viewReportBtn').hide();
function addPreviewCustomer(removeBtn){
    let selected = $('.selectCustomer').val();
        if(selected!=""){
            document.getElementById('tablePreviewHeading').innerHTML += '<th scope="col" class="'+selected.trim()+'Option text-sm font-medium text-white px-6 py-4 text-left"> '+ selected.toUpperCase() + ' </th>' ; 
            document.getElementById('tablePreviewDescription').innerHTML += '<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> Example </td>' ; 
            $('.selectCustomer').find('option:selected').remove();
            $('.selected').remove();
            $('.viewReportBtn').show();
            removeBtn.innerHTML = "AddMore";
            if($('.selectCustomer option').length==0){
                $('.selectCustomer').remove();
                removeBtn.remove();
            }
        }else{
            $('.error').html("<span class='text-red-500 px-10 py-1'> <i> Please select customer data column <i class='fas fa-exclamation-triangle'></i> </i>  </span>").fadeIn();
            setTimeout(function(){
                $('.error').html("<span class='text-red-500 px-10 py-1'> <i> Please select customer data column <i class='fas fa-exclamation-triangle'></i> </i>  </span>").fadeOut()
            },3000);

        }
}
function lastDays(last){
    var d = new Date(); 
     timestamp = d.setTime(d.getTime()-(last*24*60*60*1000));
     date = new Date(timestamp);
     newDate = date.getFullYear()+"-"+parseInt(date.getMonth()+1)+"-"+date.getDate();
     return newDate;
}
function lastMonth(last){
 var d = new Date(); 
 timestamp = d.setMonth(d.getMonth()-last);
 date = new Date(timestamp);
 newDate = date.getDate()+"/"+parseInt(date.getMonth()+1)+"/"+date.getFullYear();
 return newDate;
}
function checkDataExits(data){
    $("th").hasClass(""+data+"nameOption")
    let value = $("."+data+"Option").text();
    return value.trim();
}
function fetchCustomerReport(){
    data = {
        date:lastDays(3),
        love:"400", 
        today:lastDays(0),
        date1:checkDataExits("date"),
        name:checkDataExits("name"), 
        father:checkDataExits("fatherName"), 
        contact:checkDataExits("contact"),
        purpose:checkDataExits("purpose"),
        charges1:checkDataExits("Charges"),
        address:checkDataExits("address"),
        balanced :checkDataExits("balanced"),
        recieved :checkDataExits("recieved"),
        }
        
    $.ajax({
        url:'../PHP/report.php',
        method:'POST',
        data:data,
        success:function(data){
            
            $('.customeReportCustomer').html( data);
            let ok = $('.customerDate option[value="today"]').attr("selected", "selected");

            $('.customerDate').on('change', function (e) {
                let optionSelected = $("option:selected", this);
                let valueSelected = this.value;
                var newDate;
                switch(valueSelected){
                    case "today":
                        newDate = lastDays(0);
                        
                    break;
                    case "3days":
                        newDate = lastDays(3);
                        
                    break;
                    case "7days":
                        newDate = lastDays(7);
                        
                    break;
                    case "14days":
                        newDate = lastDays(14);
                        
                    break;
                    case "30days":
                        newDate = lastDays(30);
                        
                    break;
                    case "3month":
                        newDate = lastMonth(3);
                        
                    break;
                    case "6month":
                        newDate = lastMonth(6);
                        
                    break;
                    case "9month":
                        newDate = lastMonth(9);
                        
                    break;
                    case "12month":
                        newDate = lastMonth(12);
                        
                    break;
                    case "allCustomerData":
                        newDate = "all";
                    default:
                        newDate = "No date was selected";
                }
                $.ajax({
                    url:'../PHP/report.php',
                    method:'POST',
                    data:{
                    date:newDate, love:"400", today:lastDays(0),
                    date1:checkDataExits("date"),
                    name:checkDataExits("name"),
                    father:checkDataExits("fatherName"), 
                    contact:checkDataExits("contact"),
                    purpose:checkDataExits("purpose"),
                    charges1:checkDataExits("Charges"),
                    address:checkDataExits("address"),
                    balanced :checkDataExits("balanced"),
                    recieved :checkDataExits("recieved"),
                    },
                    success:function(response){
                        $('.customeReportCustomer').html(response);
                        let ok = $('.customerDate option[value="today"]').attr("selected", "selected");
            

                    },  
                    error:function(){
                        
                    }
                });
            });
        },  
        error:function(){
            
        }
    });
}
// start here
function autoFetchCustomerReport(){
    
    $.ajax({
        url:'../PHP/report.php',
        method:'POST',
        data:{fetchreport:"ok"},
        success:function(data){
            
                $('.reportCustomer').html(data);
        },  
        error:function(){
            
        }
    });
}
autoFetchCustomerReport();
// on selected date for fetch customer 
$('.customerDate').on('change', function (e) {
    let optionSelected = $("option:selected", this);
    let valueSelected = this.value;
    var newDate;
    switch(valueSelected){
        case "today":
            newDate = lastDays(0);
            
        break;
        case "3days":
            newDate = lastDays(3);
            
        break;
        case "7days":
            newDate = lastDays(7);
            
        break;
        case "14days":
            newDate = lastDays(14);
            
        break;
        case "30days":
            newDate = lastDays(30);
            
        break;
        case "3month":
            newDate = lastMonth(3);
            
        break;
        case "6month":
            newDate = lastMonth(6);
            
        break;
        case "9month":
            newDate = lastMonth(9);
            
        break;
        case "12month":
            newDate = lastMonth(12);
            
        break;
    }
    $.ajax({
        url:'../PHP/fetchallcustomerReport.php',
        method:'POST',
        data:{
        date1:newDate, today:lastDays(0),
        },
        success:function(response){
            $('.customeReportCustomer').html(response);
        },  
        error:function(){
            
        }
    });
});

$('input[name="recieved"]').keyup(function(){
    let charges = $('input[name="charges"]').val();
    let recieved = $('input[name="recieved"]').val();
    $('input[name="balanced"]').val(charges-recieved);
});
var sidebar = document.getElementById('sidebar');

function sidebarToggle() {
        // sidebar.style.display = "block";
    if (sidebar.style.display === "none") {
        sidebar.style.display = "block";
    } else {
        sidebar.style.display = "none";
    }
}

var profileDropdown = document.getElementById('ProfileDropDown');

function profileToggle() {
    if (profileDropdown.style.display === "none") {
        profileDropdown.style.display = "block";
    } else {
        profileDropdown.style.display = "none";
    }
}
function sideBar(sidebar){
    sidebar.click(function(){
        setTimeout(function(){profileDropdown.style = "none";},3000);
    });
}


/**
 * ### Modals ###
 */

function toggleModal(action, elem_trigger)
{
    elem_trigger.addEventListener('click', function () {
        if (action == 'add') {
            let modal_id = this.dataset.modal;
            document.getElementById(`${modal_id}`).classList.add('modal-is-open');
        } else {
            // Automaticlly get the opned modal ID
            let modal_id = elem_trigger.closest('.modal-wrapper').getAttribute('id');
            document.getElementById(`${modal_id}`).classList.remove('modal-is-open');
        }
    });
}


// Check if there is modals on the page
if (document.querySelector('.modal-wrapper'))
{
    // Open the modal
    document.querySelectorAll('.modal-trigger').forEach(btn => {
        toggleModal('add', btn);
    });
    
    // close the modal
    document.querySelectorAll('.close-modal').forEach(btn => {
        toggleModal('remove', btn);
    });
}


//  add customer
function addCustomer(){
    let name = $('input[name="name"]').val();
    let father = $('input[name="father"]').val();
    let number = $('input[name="number"]').val();
    let purpose = $('input[name="purpose"]').val();
    let address = $('input[name="address"]').val();
    let charges = $('input[name="charges"]').val();
    let balanced = $('input[name="balanced"]').val();
    let recieved = $('input[name="recieved"]').val();
    let regex=/^[a-zA-Z]/;
    if(name==""){
        $(".errorName").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(father==""){
        $(".errorFather").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(number==""){
        $(".errorNumber").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(purpose==""){
        $(".errorPurpose").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(address==""){
        $(".errorAddress").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(charges==""){
        $(".errorCharges").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(balanced==""){
        $(".errorBalanced").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(recieved==""){
        $(".errorRecieved").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(number.length < 10){
        $(".errorNumber").html('<p class="text-red-500 text-xs italic">Please enter vaild number</p>');
    }else if(!name.match(regex)){
        $(".errorName").html('<p class="text-red-500 text-xs italic">Invaild name input</p>');
    }else if(!father.match(regex)){
        $(".errorFather").html('<p class="text-red-500 text-xs italic">Invaild father named input</p>');
    }else if(!purpose.match(regex)){
        $(".errorPurpose").html('<p class="text-red-500 text-xs italic">Invaild purpose text input</p>');
    }else {
        // // ajax Purpose here...
        $.ajax({
            type : 'POST',
            url : '../PHP/addCustomer.php',
            data : {father:father,number:number,purpose:purpose,address:address,charges:charges, balanced:balanced,recieved:recieved,name:name},
            beforeSend: function(){
                $(".errorName").fadeOut();
                $(".errorFather").fadeOut();
                $(".errorPurpose").fadeOut();
                $(".errorAddress").fadeOut();
                $(".errorCharges").fadeOut();
                $(".errorNumber").fadeOut();
                $(".errorBalanced").fadeOut();
                $(".errorRecieved").fadeOut();
            },
            success : function(response){
                if(response==200){    
                    $(".errorAddcustomer").fadeIn(500, function(){
                        $('.errorAddcustomer').html('<div class="flex items-center mb-2 bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> New Customer Added  Successfully... </p></div>');
                    });
                    clearCustomerForm();
                    setTimeout(function(){$(".close-model-customer").click();},500);
                    setTimeout(function(){$(".errorAddcustomer").fadeOut();},5000);
                    getCustomers();
            } else if (response==404){
                    $(".errorAddcustomer").fadeIn(500, function(){
                        $('.errorAddcustomer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p>Could not add data. </p></div>');
                    });
                    setTimeout(function(){$(".errorAddcustomer").fadeOut();},3000);
                }else if (response==401){
                    $(".errorAddcustomer").fadeIn(500, function(){
                        $('.errorAddcustomer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Server does not recieved any data</p></div>');
                    });
                    setTimeout(function(){$(".errorAddcustomer").fadeOut();},3000);
                }
            }
        });
    }   
}
function clearCustomerForm(){
     $('input[name="name"]').val("");
     $('input[name="father"]').val("");
     $('input[name="number"]').val("");
     $('input[name="purpose"]').val("");
     $('input[name="address"]').val("");
     $('input[name="charges"]').val("");
     $('input[name="balanced"]').val("");
     $('input[name="recieved"]').val("");
}


//  add document
function addDocument(){
    let firstParty = $('input[name="firstParty"]').val();
    let secondParty = $('input[name="secondParty"]').val();
    let registrationNumber = $('input[name="registrationNumber"]').val();
    let volumeNumber = $('input[name="volumeNumber"]').val();
    let bookNumber = $('input[name="bookNumber"]').val();
    let registeredDate = $('input[name="registeredDate"]').val();
    var regex=/^[a-zA-Z]/;
    // if (!x.match(regex))
    let area = $('input[name="area"]').val();
    // alert(name+father+number+Purpose+address+charges);
    if(firstParty==""){
        $(".errorFirstParty").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(secondParty==""){
        $(".errorSecondParty").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(volumeNumber==""){
        $(".errorVolumeNumber").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(bookNumber==""){
        $(".errorBookNumber").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(registrationNumber==""){
        $(".errorRegistrationNumber").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(registeredDate==""){
        $(".errorRegisteredDate").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(area== ""){
        $(".errorArea").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(!firstParty.match(regex)){
        $(".errorFirstParty").html('<p class="text-red-500 text-xs italic font-bold">Invailed named Input</p>');
    }else if(!secondParty.match(regex)){
        $(".errorSecondParty").html('<p class="text-red-500 text-xs italic font-bold">Invailed named Input</p>');
    }else if(!area.match(regex)){
        $(".errorArea").html('<p class="text-red-500 text-xs italic font-bold">Invailed area name Input</p>');
    }else {
        // // ajax Purpose here...
        $.ajax({
            type : 'POST',
            url : '../PHP/addDocument.php',
            data : {firstParty:firstParty,secondParty:secondParty,registrationNumber:registrationNumber,volumeNumber:volumeNumber,bookNumber:bookNumber, registeredDate:registeredDate,area:area},
            beforeSend: function(){
                $(".errorFirstParty").fadeOut();
                $(".errorSecondParty").fadeOut();
                $(".errorVolumeNumber").fadeOut();
                $(".errorRegistrationNumber").fadeOut();
                $(".errorRegisteredDate").fadeOut();
                $(".errorArea").fadeOut();
                $(".errorBookNumber").fadeOut();
            },
            success : function(response){
                if(response==200){    
                    $(".errorAdddocument").fadeIn(500, function(){
                        $('.errorAdddocument').html('<div class="flex items-center mb-2 bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> New Document Addedd Successfully... </p></div>');
                    });
                    clearDocumentForm();
                    setTimeout(function(){$(".errorAdddocument").fadeOut();},5000);
                    setTimeout(function(){$(".close-model-document").click();},500);
                    getDocuments();
            } else if (response==404){
                    $(".errorAdddocument").fadeIn(500, function(){
                        $('.errorAdddocument').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p>Could not added data. </p></div>');
                    });
                    setTimeout(function(){$(".errorAdddocument").fadeOut();},3000);
                }else if (response==401){
                    $(".errorAdddocument").fadeIn(500, function(){
                        $('.errorAdddocument').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Server does not recieved any data</p></div>');
                    });
                    setTimeout(function(){$(".errorAdddocument").fadeOut();},3000);
                }
            }
        });
    }   
}
function clearDocumentForm(){
    $('input[name="firstParty"]').val("");
    $('input[name="secondParty"]').val("");
    $('input[name="registrationNumber"]').val("");
    $('input[name="volumeNumber"]').val("");
    $('input[name="bookNumber"]').val("");
    $('input[name="registeredDate"]').val("");
    $('input[name="area"]').val("");
}

// Add Employer
function addEmployer(){
    let name = $('input[name="name"]').val();
    let father = $('input[name="father"]').val();
    let number = $('input[name="number"]').val();
    let designation = $('input[name="designation"]').val();
    let address = $('input[name="address"]').val();
    let salary = $('input[name="salary"]').val();
    let DOJ = $('input[name="DOJ"]').val();
    let DOL = $('input[name="DOL"]').val();
    let regex=/^[a-zA-Z]/;
    // if (!x.match(regex))
    if(name==""){
        $(".errorName").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(father==""){
        $(".errorFather").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(number==""){
        $(".errorNumber").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(designation==""){
        $(".errorDesignation").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(address==""){
        $(".errorAddress").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(salary==""){
        $(".errorSalary").html('<p class="text-red-500 text-xs italic">Please fill out this field.</p>');
    }else if(DOJ==""){
        $(".errorDOJ").html('<p class="text-red-500 text-xs italic">DOJPlease fill out this field.</p>');
    }else if(!name.match(regex)){
        $(".errorName").html('<p class="text-red-500 text-xs italic">Invaild named input.</p>');
    }else if(!father.match(regex)){
        $(".errorFather").html('<p class="text-red-500 text-xs italic">Invaild father name  input.</p>');
    }else if(!designation.match(regex)){
        $(".errorDesignation").html('<p class="text-red-500 text-xs italic">Invaild designation text input.</p>');
    }else {
        // // ajax Purpose here...
        $.ajax({
            type : 'POST',
            url : '../PHP/addEmployer.php',
            data : {father:father,number:number,designation:designation,address:address,salary:salary, DOJ:DOJ,DOL:DOL,name:name},
            beforeSend: function(){
                $(".errorName").fadeOut();
                $(".errorFather").fadeOut();
                $(".errorDesignation").fadeOut();
                $(".errorAddress").fadeOut();
                $(".errorSalary").fadeOut();
                $(".errorNumber").fadeOut();
                $(".errorDOJ").fadeOut();
            },
            success : function(response){
    
                if(response==200){    
                    $(".errorAddemployer").fadeIn(500, function(){
                        $('.errorAddemployer').html('<div class="flex items-center mb-2 bg-green-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> New Employer Added  Successfully... </p></div>');
                    });
                    clearEmployerForm()
                    getEmployers();
                    setTimeout(function(){$(".errorAddemployer").fadeOut();},5000);
                    setTimeout(function(){$(".modal-close-employer").click();},500);
            } else if (response==404){
                    $(".errorAddemployer").fadeIn(500, function(){
                        $('.errorAddemployer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p>Could not registered new employer. </p></div>');
                    });
                    setTimeout(function(){$(".errorAddemployer").fadeOut();},3000);
                }else if (response==401){
                    $(".errorAddemployer").fadeIn(500, function(){
                        $('.errorAddemployer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Server does not recieved any data</p></div>');
                    });
                    setTimeout(function(){$(".errorAddemployer").fadeOut();},3000);
                }
            }
        });
    }   
}
function clearEmployerForm(){
$('input[name="name"]').val("");
$('input[name="father"]').val("");
$('input[name="number"]').val("");
$('input[name="designation"]').val("");
$('input[name="address"]').val("");
$('input[name="salary"]').val("");
$('input[name="DOL"]').val("");
$('input[name="DOJ"]').val("");
}


let autoNumber = 1;
function getCustomers(){
    $.ajax({
        url:'../PHP/customerdata.php',
        method:'POST',
        data:{autoNumber:autoNumber},
        success:function(data){
            if(data=="404"){
                $('.deleteAllCustomerBtn').addClass("cursor-not-allowed");
            }else{
                $('.customerData').html(data);
            }
            
        },  
        error:function(){
            
        }
    });
}
getCustomers();


function getEmployers(){
    $.ajax({
        url:'../PHP/employersdata.php',
        method:'POST',
        success:function(data){

            if(data=="404")
            {
                $('.employersData').html("");    
            }else{
                $('.employersData').html(data);
            }
        },  
        error:function(){
            
        }
    });
}
getEmployers();

function getDocuments(){
    $.ajax({
        url:'../PHP/documentdata.php',
        method:'POST',
        success:function(data){
            
            
            $('.propertyDocumentData').html(data);
        },  
        error:function(){
            
        }
    });
}
getDocuments();
function getDocuments(){
    $.ajax({
        url:'../PHP/documentdata.php',
        method:'POST',
        success:function(data){
            if(data=="404"){
                $('.propertyDocumentData').html("");
            }else{
                $('.propertyDocumentData').html(data);
            }
            
        },  
        error:function(){
            
        }
    });
}

function deleteCustomer(data){
    let id = data.getAttribute('data-customer-id');
    $.ajax({
        url:'../PHP/modificationcustomer.php',
        method:'POST',
        data:{id:id},
        success:function(data){

            if(data="200"){
                $(".errorAddcustomer").fadeIn(500, function(){
                    $('.errorAddcustomer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Delete customer data success</p></div>');
                });
                setTimeout(function(){$(".errorAddcustomer").fadeOut();},3000);
                getCustomers();
                measureCol();
            }else if(data="400"){
                $(".errorAddcustomer").fadeIn(500, function(){
                    $('.errorAddcustomer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p>Data could not deleted!</p></div>');
                });
                setTimeout(function(){$(".errorAddcustomer").fadeOut();},3000);
            }
        },  
        error:function(){
            
        }
    });
}


function deleteDocument(data){
    let id = data.getAttribute('data-document-id');
    
    $.ajax({
        url:'../PHP/modificationcustomer.php',
        method:'POST',
        data:{deleteDocument:id},
        success:function(data){

            if(data="200"){
                $(".errorAdddocument").fadeIn(500, function(){
                    $('.errorAdddocument').html('<div class="flex flex justify-center mb-2 bg-green-200 text-red-500 text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Document deleted success</p></div>');
                });
                setTimeout(function(){$(".errorAdddocument").fadeOut();},3000);
                getDocuments();
            }else if(data="400"){
                $(".errorAdddocument").fadeIn(500, function(){
                    $('.errorAdddocument').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p>Document could not deleted!</p></div>');
                });
                setTimeout(function(){$(".errorAdddocument").fadeOut();},3000);
            }
        },  
        error:function(){
            
        }
    });
}

function deleteEmployer(data){
    let id = data.getAttribute('data-employer-id');
    
    $.ajax({
        url:'../PHP/modificationcustomer.php',
        method:'POST',
        data:{deleteEmployer:id},
        success:function(data){
            
            

            if(data="200"){
                $(".errorAddemployer").fadeIn(500, function(){
                    $('.errorAddemployer').html('<div class="flex flex justify-center mb-2 bg-green-200 text-red-500 text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Employer deleted success</p></div>');
                });
                setTimeout(function(){$(".errorAddemployer").fadeOut();},3000);
                getEmployers();
            }else if(data="400"){
                $(".errorAddemployer").fadeIn(500, function(){
                    $('.errorAddemployer').html('<div class="flex items-center mb-2 bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert"><svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg><p> Employer could not deleted!</p></div>');
                });
                setTimeout(function(){$(".errorAddemployer").fadeOut();},3000);
            }
        },  
        error:function(){
            
        }
    });
}

var nextId = 10;
function nextCustomer(){
    
    $.ajax({
        url:'../PHP/customerdata.php',
        method:'POST',
        data:{nextId:nextId+=10},
        success:function(data){

            if(data!=404){
                $('.customerData').html(data);
            }else if(data==404){
                nextId = 0;
                $.ajax({
                    url:'../PHP/customerdata.php',
                    method:'POST',
                    data:{nextId:nextId},
                    success:function(data){
                        
                        $('.customerData').html(data);
                    },  
                    error:function(){
                        
                    }
                });
            }
        },  
        error:function(){
            
        }
    });
}

function previousCustomer(){
    
    if(nextId > 0){
        $.ajax({
            url:'../PHP/customerdata.php',
            method:'POST',
            data:{nextId:nextId-=10},
            success:function(data){
                
                $('.customerData').html(data);
                measureCol();
            },  
            error:function(){
                
            }
        });
    }else {
        $.ajax({
            url:'../PHP/customerdata.php',
            method:'POST',
            data:{nextId:nextId=0},
            success:function(data){
                
                $('.customerData').html(data);
                measureCol();
            },  
            error:function(){
                
            }
        });
    }
}

function nextEmployer(){
    
    $.ajax({
        url:'../PHP/employersdata.php',
        method:'POST',
        data:{nextId:nextId+=10},
        success:function(data){

            if(data!=404){
                $('.employersData').html(data);
            }else if(data==404){
                nextId = 0;
                $.ajax({
                    url:'../PHP/employersdata.php',
                    method:'POST',
                    data:{nextId:nextId},
                    success:function(data){
                        
                        $('.employersData').html(data);
                    },  
                    error:function(){
                        
                    }
                });
            }
        },  
        error:function(){
            
        }
    });
}

function previousEmployer(){
    
    if(nextId > 0){
        $.ajax({
            url:'../PHP/employersdata.php',
            method:'POST',
            data:{nextId:nextId-=10},
            success:function(data){
                
                $('.employersData').html(data);
                measureCol();
            },  
            error:function(){
                
            }
        });
    }else {
        $.ajax({
            url:'../PHP/employersdata.php',
            method:'POST',
            data:{nextId:nextId=0},
            success:function(data){
                
                $('.employersData').html(data);
                measureCol();
            },  
            error:function(){
                
            }
        });
    }
}

function nextDocument(){
    
    $.ajax({
        url:'../PHP/documentdata.php',
        method:'POST',
        data:{nextId:nextId+=10},
        success:function(data){

            if(data!=404){
                $('.propertyDocumentData').html(data);
            }else if(data==404) {
    
                nextId = 0;
                $.ajax({
                    url:'../PHP/documentdata.php',
                    method:'POST',
                    data:{nextId:nextId},
                    success:function(data){
                        $('.propertyDocumentData').html(data);
                    },  
                    error:function(){
                        
                    }
                });
            }
        },  
        error:function(){
            
        }
    });
}

function previousDocument(){
    
    if(nextId > 0){
        $.ajax({
            url:'../PHP/documentdata.php',
            method:'POST',
            data:{nextId:nextId-=10},
            success:function(data){
                $('.propertyDocumentData').html(data);
            },  
            error:function(){
                
            }
        });
    }else {
        $.ajax({
            url:'../PHP/documentdata.php',
            method:'POST',
            data:{nextId:nextId=0},
            success:function(data){
                $('.propertyDocumentData').html(data);
            },  
            error:function(){
                
            }
        });
    }
}

function measureCol(){
    $.ajax({
        url:'../PHP/modificationcustomer.php',
        method:'POST',
        // cache:false,
        data:{colCustomer:"500"},
        success:function(data){
            $('.colCustomer').html("<span> Note : Total Customer is <b> "+ data +" </b> (upto updated) </span>");
            $('.totalCustomer').html("<span> " + data + " </span>");
            $('.reportTotalCustomer').html("<span> Total Customers " + data + " records </span>");
            
        },  
        error:function(){
            
        }
    });
}
measureCol();

function totalDocuments(){
    $.ajax({
        url:'../PHP/modificationcustomer.php',
        method:'POST',
        // cache:false,
        data:{totalDocument:"200"},
        success:function(data){
            
            $('.colDocuments').html("<span> Note : Total Documents is <b> "+ data +" </b> (upto updated) </span>");
            $('.totalDocuments').html("<span> " + data + " </span>");
        },  
        error:function(){
            
        }
    });
}
totalDocuments();


function totalEmployers(){
    $.ajax({
        url:'../PHP/modificationcustomer.php',
        method:'POST',
        // cache:false,
        data:{totalEmployers:"200"},
        success:function(data){
            
            $('.colEmployers').html("<span> Note : Total Employers is <b> "+ data +" </b> (upto updated) </span>");
            $('.totalEmployers').html("<span> " + data + " </span>");
        },  
        error:function(){
            
        }
    });
}
totalEmployers();
function totalIncome(){
    $.ajax({
        url:'../PHP/modificationcustomer.php',
        method:'POST',
        // cache:false,
        data:{totalIncome:"200"},
        success:function(data){
            
                $('.totalIncome').html("<span> " + data + " </span>");
        },  
        error:function(){
            
        }
    });
}
totalIncome();
function totalBalanced(){
    $.ajax({
        url:'../PHP/modificationcustomer.php',
        method:'POST',
        // cache:false,
        data:{totalBalanced:"200"},
        success:function(data){
            
            // $('.colCustomer').html("<span> Note : Total Customer is <b> "+ data +" </b> (updated) </span>");
                $('.totalBalanced').html("<span> " + data + " </span>");
        },  
        error:function(){
            
        }
    });
}
totalBalanced();