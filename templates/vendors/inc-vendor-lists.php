<?php
	if( have_rows('vendor_list') ):

	     // loop through the rows of data
	    while ( have_rows('vendor_list') ) : the_row();

			if( get_row_layout() == 'vendor' ):

	        	get_template_part('templates/vendors/inc', 'vendor-detail' );
	        

	        endif;

	    endwhile;

	endif;	


?>