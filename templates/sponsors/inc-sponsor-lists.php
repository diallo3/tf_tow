<?php
	if( have_rows('sponsor_list') ):

	     // loop through the rows of data
	    while ( have_rows('sponsor_list') ) : the_row();

			if( get_row_layout() == 'sponsor' ):

	        	get_template_part('templates/sponsors/inc', 'sponsor-detail' );
	        

	        endif;

	    endwhile;

	endif;	

?>