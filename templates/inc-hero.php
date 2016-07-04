<?php
	$thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
    $thumb_url = $thumb_url_array[0];
    $sum = get_field('page_summary');
?>

<div class="hero" data-top-bottom="background-position: 50% -150px;" data-bottom-top="background-position: 50% 100px;"
	<?php if ( has_post_thumbnail() ) { ?>
		style="background-image: url('<?php echo $thumb_url; ?>');"
	<?php } else { ?>
		style="background-image: url('http://placehold.it/500x500');"
	<?php } ?>
>

	<div class="tint"></div>

	<?php get_template_part('templates/inc', 'header-main'); ?>


	<header class="page_header">
		<div class="title">
			<?php the_title( '<h1 class="page_title">', '</h1>' ); ?>
		</div>
		<div class="entry">
			<?php if (!empty($sum) ) {
				echo $sum;
			} else {
				the_excerpt(); 
			} ?>
		</div>
	</header>
	
</div>

	

    