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
				console.log("Mohamed Yasser1");
				
			 $(".host").css("backgroundColor", "#3a3d6e");
            $('.host .active').fadeOut(100, function () {
               
                $(this).removeClass('active').next().addClass('active').fadeIn();
				

            });
			});
			
			
			$(".host .backstep").click(function(){
				console.log("Mohamed Yasser2");
				$(".host").css("backgroundColor", "#fff");
            $('.host .active').fadeOut(100, function () {
               
                $(this).removeClass('active').next().addClass('active').fadeIn();
				
				if ($(this).is(':last-child')) {
						$('.host div').eq(0).addClass('active').fadeIn();
					} 
				

            });
			});
			
			
			// HOST END
			
			
			
			// advertise START
			$(".advertise .register").click(function(){
				console.log("Mohamed Yasser1");
				
			 $(".advertise").css("backgroundColor", "#3a3d6e");
            $('.advertise .active').fadeOut(100, function () {
               
                $(this).removeClass('active').next().addClass('active').fadeIn();
				

            });
			});
			
			
			$(".advertise .backstep").click(function(){
				console.log("Mohamed Yasser2");
				$(".advertise").css("backgroundColor", "#fff");
            $('.advertise .active').fadeOut(100, function () {
               
                $(this).removeClass('active').next().addClass('active').fadeIn();
				
				if ($(this).is(':last-child')) {
						$('.advertise div').eq(0).addClass('active').fadeIn();
					} 
				

            });
			});
			
			
			// advertise END