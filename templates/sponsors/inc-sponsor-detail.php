<?php
	$type = get_sub_field('sponsor_type');
	$img  = get_sub_field('sponsor_image');
	$desc = get_sub_field('sponsor_description');
?>
<section class="block sponsor_detail">
	<article class="sponsor">
		<div class="entry">
			<!-- 3 columns -->
			<div class="sponsor_img">
				<figure>
					<img src="<?php echo $img; ?>" alt="" />
				</figure>
			</div>
			<div class="sponsor_desc">
				<header>
					<h4 class="title"><span>Sponsor Type:</span> <?php echo $type; ?></h4>
				</header>

				<?php echo $desc; ?>
			</div>
			<div class="sponsor_names">
				<header>
					<h4 class="title">Contributors</h4>
				</header>
				<?php if( have_rows('sponsor_contributors') ): ?>
				    <ul class="names">
				 
					    <?php while( have_rows('sponsor_contributors') ): the_row(); 
					    	$cts   = get_sub_field('name');
					    ?>

					    	<li><?php echo $cts; ?></li>

					    <?php endwhile; ?>
				 
				    </ul> 
				<?php endif; ?>
			</div>
		</div>
	</article>
</section>

