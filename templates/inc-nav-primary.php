<div class="primary">
	<?php
		$defaults = array(
			'theme_location'  => 'primary',
			'menu'            => '',
			'container'       => 'nav',
			'container_class' => 'menu main_nav',
			'container_id'    => 'main_navigation',
			'menu_class'      => 'sur-menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '<ul class="sur-menu">%3$s<li id="reg" class="cta"><a href="http://events.constantcontact.com/register/event?llr=oqmeildab&oeidk=a07ec5uii1gd982b853" target="_blank" class="btn reg">Register</a></li><li id="vol" class="cta"><a href="#" class="btn vol" data-reveal-id="volForm">Volunteer</a></li></ul>',
		);
		wp_nav_menu( $defaults );
	?>
</div>