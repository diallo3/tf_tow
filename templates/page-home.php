<?php
/**
 * Template Name: Page Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				if( have_rows('home_page_sections') ): 
					while ( have_rows('home_page_sections') ) : the_row(); 
					
						// Speaker
						if( get_row_layout() == 'guest_speaker' ): 

						    get_template_part('templates/home/inc', 'speaker');

						// Template info
						elseif( get_row_layout() == 'templefest_into' ):
							
							get_template_part('templates/home/inc', 'intro');

						elseif( get_row_layout() == 'location' ):

							get_template_part('templates/home/inc', 'map');

						endif; 
					endwhile;
				endif;
			endwhile; // end of the loop. ?>

			<?php get_template_part('templates/home/inc', 'map'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
