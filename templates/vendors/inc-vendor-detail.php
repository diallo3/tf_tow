<?php
	$name = get_sub_field('vendor_name');
	$web  = get_sub_field('vendor_website');
	$fb   = get_sub_field('vendor_facebook_page');
	$desc = get_sub_field('vendor_description');
?>
<section class="block vendor_detail">
	<article class="vendor">
		<div class="entry">
			<header>
				<h4><?php echo $name; ?></h4>
				<div class="urls">
					<div class="web">
						<a href="<?php echo $web; ?>" target="_blank"><?php echo $web; ?></a>
					</div>
					<div class="fb">
						<?php if($fb) {
							echo "<a href='".$fb."' target=\"_blank\">Visit Us on Facebook</a>";
						} ?>
						
					</div>
				</div>
			</header>
			<?php echo $desc; ?>
		</div>
	</article>
</section>