<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<?php wp_head(); ?>
</head>

<!-- <a class="left-off-canvas-toggle" href="#" >Menu</a> -->

<body <?php body_class(); ?>>

	<div id="page" class="off-canvas-wrap hfeed" data-offcanvas>
		<!-- inner wrap -->
		<div class="inner-wrap">
			
		<?php if(is_front_page()) {
			get_template_part('templates/home/inc', 'herobig');
		} else {
			get_template_part('templates/inc', 'hero');
		} ?>

		<?php get_template_part('templates/inc', 'modals'); ?>