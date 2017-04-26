(function($) {	
	$(document).ready(function() {
		$('a.toggle-mobile-menu').click(function() {
			$('ul#menu-primary').fadeToggle(400);
		});

		$('a.toggle-mobile-menu').click(function() {
			$('.mobile-menu-icon').toggleClass('fa-bars fa-times')
		});
	});
})( jQuery );