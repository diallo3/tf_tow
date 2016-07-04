<?php

	$fri = get_field('friday_date');
	$sat = get_field('saturday_date');
	$sun = get_field('sunday_date');

	// check if the flexible content field has rows of data
	echo '<div class="block event_day"><header><h1><span>Friday</span>' . $fri . '</h1></header></div>';

	if( have_rows('events_list') ):

	     // loop through the rows of data
	    while ( have_rows('events_list') ) : the_row();

	        if( get_row_layout() == 'fri_event' ):

	        	get_template_part('templates/events/inc', 'event-details' );

	        endif;

	    endwhile;

	endif;

	echo '<div class="block event_day"><header><h1><span>Saturday</span>' . $sat . '</h1></header></div>';

	if( have_rows('events_list') ):

	     // loop through the rows of data
	    while ( have_rows('events_list') ) : the_row();

	        if( get_row_layout() == 'sat_event' ):

	        	get_template_part('templates/events/inc', 'event-details' );

	        endif;

	    endwhile;

	endif;

	echo '<div class="block event_day"><header><h1><span>Sunday</span>' . $sun . '</h1></header></div>';

	if( have_rows('events_list') ):

	     // loop through the rows of data
	    while ( have_rows('events_list') ) : the_row();

	        if( get_row_layout() == 'sun_event' ):

	        	get_template_part('templates/events/inc', 'event-details' );

	        endif;

	    endwhile;

	endif;

?>
	
