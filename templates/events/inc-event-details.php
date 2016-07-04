<?php
	$time  = get_sub_field('time');
	$type  = get_sub_field('event_type');
	$title = get_sub_field('title');
	$desc  = get_sub_field('event_description');
	$img   = get_sub_field('event_image');
	$loc   = get_sub_field('event_location');
?>

<section class="block event_detail">
	<article class="event">
		<div class="time">
			<h4 class="set"><?php echo $time; ?></h4>
		</div>
		<div class="entry">
			<header>
				<span class="type"><?php echo $type; ?></span>
				<h2><?php echo $title; ?></h2>
				<h6><?php echo $loc; ?></h6>
			</header>
			<?php echo $desc; ?>
		</div>
		<?php if (!is_mobile()) { ?>
		<div class="f_img">
			<?php if( $img ) { ?>
			<figure class="img_container featured" style="background-image: url('<?php echo $img; ?>');">
				&nbsp;					
			</figure>
			<?php } ?>
		</div>
		<?php } ?>
	</article>
</section>