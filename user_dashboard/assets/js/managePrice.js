        


// Manage Names

     function changeNamesHandler(event) {
          

         console.log(event.target.value)
         
          if(event.target.value == "FACEBOOK")
           {
               $(".pname").text("FB Name");
               $(".purl").text("FB URL");
               $(".pdesc").text("FB Description");
           }
         
         
            if(event.target.value == "YOUTUBE")
           {
               $(".pname").text("YouTube Name");
               $(".purl").text("YouTube URL");
               $(".pdesc").text("YouTube Description");
           }
         
         
            if(event.target.value == "INSTAGRAM")
           {
               $(".pname").text("Insta Name");
               $(".purl").text("Insta URL");
               $(".pdesc").text("Insta Description");
           }
         
         
            if(event.target.value == "WEBSITE")
           {
               $(".pname").text("Website Name");
               $(".purl").text("Website URL");
               $(".pdesc").text("Website Description");
           }
          
      }




//Manage price
        
        // Get Elements  
    var clickcount = document.getElementById('clickcount');	
    var adsduration = document.getElementById('adsduration');
    var pageCatForAd = document.getElementById('page-cat-basic-single');
    var price = document.getElementById('price');
        
	 // Get Elements Values
    var clickcountVal = clickcount.value;   
    var adsdurationVal = adsduration.value;
    var pageCatForAdVal = pageCatForAd.value; 
    var priceVal = price.value; 


     


      function changeClickcountHandler(event) {
          
          clickcountVal = event.target.value;
          handlePrice();
          //alert('You like ' + clickcountVal + ' ice cream.');
          //alert('You like ' + isEmpty(event.target.value) + ' ice cream.');
          
      }


   function changeAdsdurationHandler(event) {
       
          adsdurationVal = event.target.value;
      
          handlePrice();
         // alert('You like ' + event.target.value + ' ice cream.');
         // alert('You like ' + isEmpty(event.target.value) + ' ice cream.');
          
      }

     function changeCatHandler(event) {
         console.log("Inside changeCatHandler")
         
          //console.log(event.target.value)
         //console.log($('#page-cat-basic-single').find(':selected'))
         pageCatForAdVal = event.target.value;
          handlePrice();
         
     var text = "";
var i;
         var seleLen = $('#page-cat-basic-single').find(':selected').length;
for (i = 0; i < seleLen; i++) {
  text = $('#page-cat-basic-single').find(':selected')[i].value;
    //console.log("Inside Push");
    console.log(seleLen);
    console.log(text);
                    
}    
    

         
         
         if(seleLen >= 2) {
             console.log("Inside selected")
           // md.showNotification('top','right', 'warning', 'Max Cat is Two');
             pageCatForAd.setAttribute("disabled", "");
            
            }
         
         
      }






   function handlePrice() {
       
       
       
       if(!isEmpty(clickcountVal))
       {
           
           adsduration.removeAttribute("disabled");
            $("#adsduration").removeClass('disableElemenet');
             if(!isEmpty(adsduration.value))
       {
           
           pageCatForAd.removeAttribute("disabled");
           
           //$("#itcost").removeAttribute('disabled');
            var priceData;
           
           
            
           if(clickcountVal == 500)
           {
               priceData = 500;
           }
           
             if(clickcountVal == 1000)
           {
               priceData = 1000;
           }
           
             if(clickcountVal == 2000)
           {
               priceData = 2000;
           }
           
             if(clickcountVal == 5000)
           {
               priceData = 5000;
           }
           
            $("#price").text(priceData);
           
           if(!isEmpty(pageCatForAdVal))
           {
               
               console.log("Inside isEmpty pageCatForAdVal IF")
              document.getElementById("itcost").removeAttribute("disabled");
              }
           else{
                 console.log("Inside isEmpty pageCatForAdVal ELSE")
              document.getElementById("itcost").setAttribute("disabled", ""); 
               
           }
           


           
           
       }
           else {
              
               console.log("Inside isEmpty CLICKS l IF")
                console.log(adsduration.value)
                pageCatForAd.setAttribute("disabled", "");
               
               md.showNotification('top','right', 'warning', 'Please select days number');
               
           }
           
           
       }
       else {
           document.getElementById("itcost").setAttribute("disabled", "");
           adsduration.setAttribute("disabled", "");
           pageCatForAd.setAttribute("disabled", "");
           $("#adsduration").addClass('disableElemenet');
            $("#adsduration").val('');
           $("#page-cat-basic-single").val('');
             $("#price").text("-");
       }
              
             
          adsdurationVal = event.target.value;
        
          
      }

function isEmpty (property) {
    
    if(property === null || property === "" || typeof property === "undefined"){
        return true
    }
    
    return false
}





