<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _mbbasetheme
 */
?>

<?php if(is_page('classes-events')) { 

	 get_template_part('templates/events/inc', 'event-lists');

} elseif (is_page('faqs')) {

	get_template_part('templates/faq/inc', 'faq-lists');

} elseif (is_page('vendors')) {

	get_template_part('templates/vendors/inc', 'vendor-lists');

} elseif (is_page('sponsors')) {

	get_template_part('templates/sponsors/inc', 'sponsor-lists');

} else {

} ?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		
	</div>

</article><!-- #post-## -->
