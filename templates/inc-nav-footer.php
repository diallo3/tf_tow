<div class="foot">
	<?php
		$defaults = array(
			'theme_location'  => 'footer',
			'menu'            => '',
			'container'       => 'nav',
			'container_class' => 'menu footer_nav',
			'container_id'    => 'footer_navigation',
			'menu_class'      => 'sur-menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
		);
		wp_nav_menu( $defaults );
	?>
</div>