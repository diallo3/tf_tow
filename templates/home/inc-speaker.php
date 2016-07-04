<?php
	$g_image = get_sub_field('speaker_image');
	$title   = get_sub_field('speaker_title');
	$content = get_sub_field('speaker_excerpt');
	$b_img   = get_sub_field('block_background');
	$link    = get_sub_field('speaker_website');
?>
<section class="block guest_speaker"  style="background-image: url('<?php echo $b_img; ?>');"
	data-top-bottom="background-position: 50% -350px;"
	data-bottom-top="background-position: 50% 100px;"
>
	<!-- headshot -->
	<div class="headshot">
		<figure class="speaker" style="background-image: url('<?php echo $g_image['url']; ?>');"></figure>
		<div class="special_guests">
			<span class="col_1">Special</span>
			<span class="col_2">Guest</span>
		</div>
	</div>
	<!-- /headshot -->
	<div class="speaker_content">
		<article class="entry">
			<div class="content">
				<header>
					<h1 class="title">
						<?php echo $title; ?>
					</h1>
				</header>
					<?php echo $content; ?>
				<?php if($link) { ?>
				<footer>
					<p>
						<a href="<?php echo $link; ?>" title="<?php echo $title; ?>" class="btn" target="_blank">Website</a>
					</p>
				</footer>
				<?php } ?>
				
			</div>
			
		</article>
	</div>
	<div class="tint"></div>
</section>