$(document).ready(function(){
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
    
    

    
    
    

    
    if(isEmpty(pageCatVal) || isEmpty(pageNameVal) || isEmpty(pageURLVal) || isEmpty(pageDescVal) || isEmpty(adDesc1Val) || isEmpty(pageImg1Val))
        
    //if(isEmpty(pageCatVal))
        
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
    
    
    
    
$(".adMore1").click(function(){
    

    
    if(!$(".pageDesBloc1").hasClass('pageDesBlocActive')) {
        
        $(".pageDesBloc1").addClass('pageDesBlocActive');
        
        
    }
    
    $(".adMore1").removeClass('adMoreactive');
    $(".adMore2").addClass('adMoreactive');
    
});
    
    
    $(".adMore2").click(function(){
    

    
    if(!$(".pageDesBloc2").hasClass('pageDesBlocActive')) {
        
        $(".pageDesBloc2").addClass('pageDesBlocActive');
        
        
    }
    
    $(".adMore2").removeClass('adMoreactive');
    $(".adMore3").addClass('adMoreactive');
    
});
    
        $(".adMore3").click(function(){
    

    
    if(!$(".pageDesBloc3").hasClass('pageDesBlocActive')) {
        
        $(".pageDesBloc3").addClass('pageDesBlocActive');
        
        
    }
    
    $(".adMore3").removeClass('adMoreactive');
    $(".removeMore3").addClass('removeMoreActive');
    
});
    
    
    
         $(".removeMore3").click(function(){
    

    
    if($(".pageDesBloc3").hasClass('pageDesBlocActive')) {
        
        $(".pageDesBloc3").removeClass('pageDesBlocActive');
        
        
    }
    
    $(".removeMore3").removeClass('removeMoreActive');
    $(".removeMore2").addClass('removeMoreActive');
    
});   
    
    
    
            $(".removeMore2").click(function(){
    

    
    if($(".pageDesBloc2").hasClass('pageDesBlocActive')) {
        
        $(".pageDesBloc2").removeClass('pageDesBlocActive');
        
        
    }
    
    $(".removeMore2").removeClass('removeMoreActive');
    $(".removeMore1").addClass('removeMoreActive');
    
});  
    
    
    
    
                $(".removeMore1").click(function(){
    

    
    if($(".pageDesBloc1").hasClass('pageDesBlocActive')) {
        
        $(".pageDesBloc1").removeClass('pageDesBlocActive');
        
        
    }
    
    $(".removeMore1").removeClass('removeMoreActive');
     $(".adMore1").addClass('adMoreactive');
    
});  
    
    
    
function isEmpty (property) {
    
    if(property === null || property === "" || typeof property === "undefined"){
        return true
    }
    
    return false
}





//Js Code
 console.log("before change");
function myFunction() {
     console.log("insde change");
  var x = document.getElementById("pageCat").value;
    alert(x);
}

    
    
    // $('#page-cat-basic-single').select2();
    
    
    
$("#page-cat-basic-single").select2({
    placeholder: "Select a Cat",
    allowClear: true
});
    
    
    
    
    
    //adsduration.removeAttribute("disabled");


    var $exampleMulti = $("#page-cat-basic-single").select2({
    placeholder: "Select a Cat",
    allowClear: true
});

    $(".editCat").click(function(){
    console.log("Iam clicked editCat");
          $exampleMulti.val(null).trigger("change");
       // console.log("Iam clicked editCat disabled");
      //  document.getElementById('adsduration').removeAttribute("disabled");
        // console.log("Iam clicked editCat disabled");


});

});


