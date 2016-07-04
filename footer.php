<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>		
		<?php
			$hp = 24;
			$bck = get_field('contact_image', $hp);
		?>	

		<section class="block contact_container" style="background-image: url(<?php if($bck) { echo $bck; } ?>)">
			<div class="tint"></div>
			<div class="contact">
				<h2 class="title">
					Questions <span>or</span> Comments
				</h2>
				<?php gravity_form(
					'General', false, false, false, '', true, 12
					); 
				?>
			</div>

			<footer id="colophon" class="site_footer" role="contentinfo">
				<div class="site_info">
					<section class="copyright">
						<p>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></p>
					</section>
					<nav class="footer">
						<?php get_template_part('templates/inc', 'nav-footer'); ?>
					</nav>
					
				</div>
			</footer>

			
		</section>



		<!-- Off Canvas Menu -->
	    <aside class="left-off-canvas-menu">
	        <?php
				$defaults = array(
					'theme_location'  => 'secondary',
					'menu'            => '',
					'container'       => 'nav',
					'container_class' => 'menu mobile_nav',
					'container_id'    => 'mobile_navigation',
					'menu_class'      => 'sur-menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul class="sur-menu"><li id="reg" class="cta"><a href="http://events.constantcontact.com/register/event?llr=oqmeildab&oeidk=a07ec5uii1gd982b853" target="_blank" class="btn reg">Register</a></li><li id="vol" class="cta"><a href="#" class="btn vol" data-reveal-id="volForm">Volunteer</a></li>%3$s</ul>',
				);
				wp_nav_menu( $defaults );
			?>
	    </aside>
		<!-- whatever you want goes here -->


		<!-- close the off-canvas menu -->
		<a class="exit-off-canvas"></a>

		<div id="contact"></div>

	  	</div>
	  	<!-- /inner wrap -->
	</div>
	<?php wp_footer(); ?>

</body>
</html>
