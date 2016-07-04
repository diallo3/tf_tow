<?php
	if( have_rows('frequently_asked_questions') ):

	     // loop through the rows of data
	    while ( have_rows('frequently_asked_questions') ) : the_row();

			if( get_row_layout() == 'faq' ):

	        	get_template_part('templates/faq/inc', 'faq-detail' );

	        endif;

	    endwhile;

	endif;	
?>