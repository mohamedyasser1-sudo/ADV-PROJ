;(function(){

			// Menu settings
			$('#menuToggle, .menu-close').on('click', function(){
				$('#menuToggle').toggleClass('active');
				$('body').toggleClass('body-push-toleft');
				$('#theMenu').toggleClass('menu-open');
			});


})(jQuery)

var smScreens=window.matchMedia("(max-width: 400px)");
if (smScreens.matches) 
    { 
    }