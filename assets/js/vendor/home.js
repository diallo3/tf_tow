(function($) {

	$('.masthead_video').coverVid(1920, 1080); 

	

	$(document).ready(function() {

		// timer
		var d = home_var.day;
		$('#timer').countdown({
			date: d,
			offset: -8,
			day: 'Day',
			days: 'Days'
		});

	});

})(jQuery);
