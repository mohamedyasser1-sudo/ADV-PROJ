;(function(){

			// Menu settings
			$('#menuToggle, .menu-close').on('click', function(){
				$('#menuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toleft');
				$('#theMenu').toggleClass('menu-open');
			});


})(jQuery)


	$('.menu a').click(function() {
		
		$('html, body').animate({
			scrollTop: $('#' + $(this).data('value')).offset().top
		}, 1000);
	});
	



// HOST START

			$(".host .register").click(function(){
				
				
				   if ($('.advertise .back').hasClass('active')) {
					   
					   console.log("Yes i have");    
            
            $(".advertise .backstep").trigger("click");
            
        }
		
		 else {
            console.log("Noooo i don't have");    
          
        }
				
				console.log("Mohamed Yasser1ddd");    
				
			 $(".host").css("backgroundColor", "#010101");
			 $(".host").css("borderColor", "#151515");
			 
			 
            $('.host .active').slideUp(500, function () {
               
                $(this).removeClass('active').next().addClass('active').slideDown(1500);
				

            });
			
			
			});
			
			
			$(".host .backstep").click(function(){
				console.log("Mohamed Yasser2");
				$(".host").css("backgroundColor", "rgba(72,72,72,0.4)");
            $('.host .active').slideDown(500, function () {
               
                $(this).removeClass('active').next().addClass('active').slideUp(500);
				
				if ($(this).is(':last-child')) {
						$('.host div').eq(0).addClass('active').slideDown(500);
					} 
				

            });
			});
			
			
			// HOST END
			
			
			
			// advertise START
			$(".advertise .register").click(function(){
				
				
						   if ($('.host .back').hasClass('active')) {
					   
					   console.log("Yes i have");    
            
            $(".host .backstep").trigger("click");
            
        }
		
		 else {
            console.log("Noooo i don't have");    
          
        }
		
		
				console.log("Mohamed Yasser1");
				
			 $(".advertise").css("backgroundColor", "#010101");
			 $(".advertise").css("borderColor", "#151515");
			 
            $('.advertise .active').slideUp(500, function () {
               
                $(this).removeClass('active').next().addClass('active').slideDown(1500);
				

            });
			});
			
			
			$(".advertise .backstep").click(function(){
				console.log("Mohamed Yasser2");
				$(".advertise").css("backgroundColor", "rgba(72,72,72,0.4)");
            $('.advertise .active').slideDown(500, function () {
               
                $(this).removeClass('active').next().addClass('active').slideUp(500);
				
				if ($(this).is(':last-child')) {
						$('.advertise div').eq(0).addClass('active').slideDown(500);
					} 
				

            });
			});
			
			
			// advertise END


// funcrion to prevent default action 


/*
		$("#xxx").click(function(e){
			console.log("Clicked but prevent default");
			
				 e.preventDefault();
				 $("#xxx").trigger("click");
				
			});*/
			
			
			
			
			//// Validation on Input Form 
			
			
function IsEmpty(obj) {

if ($('[name~=' + obj+']').val() === null || $('[name~=' + obj+']').val().length <= 0) {
    
    return true;
  }
  return false; 
}


			        var emptyError = true;
					function checkEmpty (name, valLength, erroeMsg) {
				
												$('[name~=' + name+']').blur( function () {

									if($(this).val().length <= valLength )
									{
										$(this).css('border', '1px solid #F00');
										$('.' + erroeMsg ).fadeIn("slow");
								        $(this).parent().find('.asterisx').fadeIn(200);

							          emptyError = true;   
									}
									else {
										$(this).css('border', '1px solid #080');
										$('.' + erroeMsg ).fadeOut();
										$(this).parent().find('.asterisx').fadeOut(100);	
										
                                         emptyError = false;										
									}                    
					});
				emptyError = true;
			}
			
			
			
			
			
			var qualityError = true;
		function checkEquilty (elemName, secondElemeName, erroeMsg) {
					
												$('[name~=' + elemName+']').blur( function () {
													
											
											var temVal= $('[name~=' + secondElemeName+']').val();
											console.log(temVal);
												 
											if(!IsEmpty(secondElemeName))
											{
												console.log("the object is No empty");
												
								if($(this).val() != $('[name~=' + secondElemeName+']').val() )
									{
										$(this).css('border', '1px solid #F00');
										$('.' + erroeMsg ).fadeIn("slow");
								        $(this).parent().find('.asterisx').fadeIn(200);

							          qualityError = true;

									}
									else {
										$(this).css('border', '1px solid #080');
										$('.' + erroeMsg ).fadeOut();
										$(this).parent().find('.asterisx').fadeOut(100);
                                       qualityError = false;										
									} 
									
									
												
											}


     


									
					});
					
					qualityError = true;
				
			}
			
			
			
			
			// host validation
			checkEmpty('username', 3, 'usernamealert');
			checkEmpty('pass', 4, 'passwordlert');	
		    checkEmpty('email', 5, 'emaillert');
			checkEquilty('confirmemail', 'email', 'cemaillert');
			checkEquilty('confirmpass', 'pass', 'cpasswordlert');
			
		    // advertise validation
			checkEmpty('usernamea', 3, 'usernamealerta');
			checkEmpty('passa', 4, 'passwordlerta');	
		    checkEmpty('emaila', 5, 'emaillerta');
			checkEquilty('confirmemaila', 'emaila', 'cemaillerta');
			checkEquilty('confirmpassa', 'passa', 'cpasswordlerta');
			
			
			
			
			
			
$('.host-contact-form').submit( function (e) {


   if(emptyError === true || qualityError === true) {
		e.preventDefault();
		
			
	}
	else
	{
	
	}

});




			
			
			
								