(function($) {

	$(document).ready(function() {

		setTimeout(function(){
			$('body').addClass('loaded');
		}, 1000);

		// foundation
		$(document).foundation({
			offcanvas: {
				open_method: 'overlap',
				close_on_click : true
			}
		});

		// navigation
		var $head = $(".header_container");
		var $win = $(window);

		$head.clone().prependTo("body").addClass("header_container--clone");

		$win.scroll(function(){
			var sticky = $('.header_container--clone'),
			    scroll = $win.scrollTop();

			if (scroll >= 200) sticky.addClass('header_container--stick');
			else sticky.removeClass('header_container--stick');
		});

		// animated anchors
		$('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		    	var target = $(this.hash);
		      	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      	if (target.length) {
		        	$('html,body').animate({
		          		scrollTop: target.offset().top
		        	}, 1000);
		        return false;
		      	}
		    }
		});

		// Init Skrollr
		var windowWidth = $(window).width();
		if(windowWidth > 767) {
			// fade in blocks
			$('.block').addClass("hidden").viewportChecker({
			    classToAdd: 'visible animated fadeIn', // Class to add to the elements when they are visible
			    offset: 100    
			}); 

			// skrollr
			var s = skrollr.init({
			    render: function(data) {
			    	forceHeight: false
			        //Debugging - Log the current scroll position.
			        //console.log(data.curTop);
			    }
			});
		}
		 

		$.fn.highlight = function (str, className) {
		    var regex = new RegExp(str, "gi");
		    return this.each(function () {
		        $(this).contents().filter(function() {
		            return this.nodeType == 3 && regex.test(this.nodeValue);
		        }).replaceWith(function() {
		            return (this.nodeValue || "").replace(regex, function(match) {
		                return "<span class=\"" + className + "\">" + match + "</span>";
		            });
		        });
		    });
		};

		$(".time *").highlight("pm", "est"); 
		$(".time *").highlight("am", "est"); 
	});

	

})(jQuery);


