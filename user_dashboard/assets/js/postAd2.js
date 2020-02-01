
 console.log("Insideeee Proccesed JS Page");

$("#Proceed").click(function(){
    
    console.log("Clicked Proccesed");

    
    
    
    // Get Elements
    
    var pageCat = document.getElementById('pageCat');
    var pageName = document.getElementById('pageName');
    var pageURL = document.getElementById('pageURL');
    var pageDesc = document.getElementById('pageDesc');
    var adDesc1 = document.getElementById('adDesc1');
    var pageImg1 = document.getElementById('pageImg1');
    var adDesc2 = document.getElementById('adDesc2');
    var pageImg2 = document.getElementById('pageImg2');
    var adDesc3 = document.getElementById('adDesc3');
    var pageImg3 = document.getElementById('pageImg3');
    var btnProcced = document.getElementById('itcost');
    
    
        // Get Elements Values
    
    var pageCatVal = pageCat.value;
    var pageNameVal = pageName.value;
    var pageURLVal = pageURL.value;
    var pageDescVal = pageDesc.value;
    var adDesc1Val = adDesc1.value;
    var pageImg1Val = pageImg1.value;
    var adDesc2Val = adDesc2.value;
    var pageImg2Val = pageImg2.value;
    var adDesc3Val = adDesc3.value;
    var pageImg3Val = pageImg3.value;
    
    

    
    
    

    
  /*  if(isEmpty(pageCatVal) || isEmpty(pageNameVal) || isEmpty(pageURLVal) || isEmpty(pageDescVal) || isEmpty(adDesc1Val) || isEmpty(pageImg1Val)  || isEmpty(adDesc2Val) || isEmpty(pageImg2Val) || isEmpty(adDesc3Val) || isEmpty(pageImg3Val))
        */
    if(isEmpty(pageCatVal))
        
       {
        console.log("Inside if");
           console.log(pageCatVal);
           console.log(pageNameVal);
           console.log(isEmpty(pageCatVal));
           console.log(isEmpty(pageNameVal));
           
            md.showNotification('top','left', 'danger', 'Please enter the required fields');
           /*
           if( $("pageName").empty()) {
                console.log("Inside if");
               
                 $("#itcost").addClass("form-control-cus");
           }*/
           
          
       
       }
    else {
        
        //btnProcced.setAttribute("disabled", null);
        
         $('#modalClick').modal('show')
    }
    

    
    
   
    


});



function isEmpty (property) {
    
    if(property === null || property === "" || typeof property === "undefined"){
        return true
    }
    
    return false
}