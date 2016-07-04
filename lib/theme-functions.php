<?php
/**
 * _mbbasetheme theme functions definted in /lib/init.php
 *
 * @package _mbbasetheme
 */


/**
 * Register Widget Areas
 */
function mb_widgets_init() {
	// Main Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_mbbasetheme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function mb_custom_menu_order( $menu_ord ) {
	if ( !$menu_ord ) return true;
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'gf_edit_forms', // Gravity Forms
		// 'genesis', // Genesis
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

/**
 * Hide Admin Areas that are not used
 */
function mb_remove_menu_pages() {
	// remove_menu_page( 'link-manager.php' );
}

/**
 * Remove default link for images
 */
function mb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ( $image_set !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
	}
}

/**
 * Enqueue scripts
 */
function mb_scripts() {
	wp_enqueue_style( '_mbbasetheme-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( !is_admin() ) {
		// Register Script

		wp_register_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr.js', array(), NULL, false );
		wp_register_script( 'foundation', get_template_directory_uri() . '/assets/js/foundation/foundation.min.js', array(), NULL, true );
		wp_register_script( 'reveal', get_template_directory_uri() . '/assets/js/foundation/foundation.reveal.js', array(), NULL, true );
		wp_register_script( 'offcanvas', get_template_directory_uri() . '/assets/js/foundation/foundation.offcanvas.js', array(), NULL, true );
		wp_register_script( 'skrollr', get_template_directory_uri() . '/assets/js/vendor/skrollr.min.js', array(), NULL, true );
		wp_register_script( 'acfmap', get_template_directory_uri() . '/assets/js/vendor/acfmap.js', array(), NULL, true );
		wp_register_script( 'covervid', get_template_directory_uri() . '/assets/js/vendor/covervid.min.js', array(), NULL, true );
		wp_register_script( 'countdown', get_template_directory_uri() . '/assets/js/vendor/jquery.countdown.min.js', array(), NULL, true );
		wp_register_script( 'home', get_template_directory_uri() . '/assets/js/vendor/home.js', array('jquery'), NULL, true );
		wp_register_script( 'customplugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), NULL, true );
		wp_register_script( 'customscripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), NULL, true );

		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'foundation' );
		wp_enqueue_script( 'reveal' );
		wp_enqueue_script( 'offcanvas' );
		wp_enqueue_script( 'skrollr' );
		wp_enqueue_script( 'customplugins' );
		wp_enqueue_script( 'customscripts' );

		if ( is_front_page() ) {
			wp_enqueue_script( 'covervid' );
			wp_enqueue_script( 'countdown' );
			wp_enqueue_script( 'home' );
		}

		global $post;
		$countdown = get_field('countdown_date', 24);
  		$data = array( 'day' => $countdown );
  		wp_localize_script( 'home', 'home_var', $data );
	}
}

/**
 * Remove Query Strings From Static Resources
 */
function mb_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}

/**
 * Remove Read More Jump
 */
function mb_remove_more_jump_link( $link ) {
	$offset = strpos( $link, '#more-' );
	if ($offset) {
		$end = strpos( $link, '"',$offset );
	}
	if ($end) {
		$link = substr_replace( $link, '', $offset, $end-$offset );
	}
	return $link;
}
